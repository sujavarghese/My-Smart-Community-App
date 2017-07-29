<?php

namespace App\Classes;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Constants;
use GenericConfig;
use App\Http\Requests\LoadBoundaryFormRequest;
use Illuminate\Support\Facades\Storage;
use App\Utilities\DataLoadUtilities;
use DB;
use Input;
use Validator;
use Redirect;
use Session;
use Auth;
use DateTime;
use DateTimeZone;

class IdeasController extends Controller
{
    public $dataload_utilities;
    public $generic_config;

    public function __construct()
    {
        $this->dataload_utilities = new DataLoadUtilities();
        $this->generic_config = new GenericConfig();
        parent::__construct();
    }

    /**
     * Function to get boundary names
     * @param string $boundary_type: Boundary type argument default is SAM
     * @return mixed
     */
    public function index()
    {
        $response = array(
            'sam_names' => $this->dataload_utilities->get_default_sams(),
        );

        return view('ideas.home')->with('response', $response);
    }

    /**
     * Function to store uploaded boundary data
     * @param Request $r
     * @return Redirect to boundary loader
     */
    public function create(Request $r)
    {
        /**
         * Form validation
         */
        $this->validate($r, [
            'boundaryCsvFile' => 'required',
            'selBoundaryType' => 'required',
            'selBoundaryName' => 'required',
        ], [], [
                'boundaryCsvFile' => 'Boundary File',
                'selBoundaryType' => 'Boundary Type',
                'selBoundaryName' => 'Boundary Name',
            ]
        );
        $created_at = new DateTime('now', new DateTimeZone('AUSTRALIA/MELBOURNE'));
        $file_validation = $this->dataload_utilities->validate_file_extension(Input::file('boundaryCsvFile'));
        $structure_validation = $this->dataload_utilities->validate_kml(Input::file('boundaryCsvFile'));
        //check if file is kml
        $this->boundary_msgs['overall_status'] = '&nbsp;&nbsp;&nbsp;<br/><b> Pass </b>';
        $file = Input::file('boundaryCsvFile');
        $bType = $r->get('selBoundaryType');
        $bName = $r->get('selBoundaryName');
        DB::table('users_log')->insert(
            ['boundary_code' => $bName, 'boundary_type' => $bType,
                'created_at' => $created_at, 'upload_status' => 'PASS',
                'validation_status' => 'VALIDATED', 'load_status'=>'', 'user'=> Auth::user()->name,
                'count'=>0,'validation_result'=>'']
        );
        $details = $this->dataload_utilities->get_db_details();
        if (!$file_validation || $structure_validation !== 'Validated') {

            $error = array();
            if (!$file_validation)
                $error[] = "File type must be kml";
            else
                if ($structure_validation == 'Failed'){
                    $error[] = "Invalid file";
                }
                else {
                    $error[] = "Invalid structure for tag " .$structure_validation."";
                }
                $this->dataload_utilities->update_user_log($details->id,'validation_status','FAILED');

            $validator = $error;
            return Redirect::to('boundaries/boundary_loader')->withErrors($validator);
        }
        $this->boundary_msgs['overall_status'] = '&nbsp;&nbsp;&nbsp;<br/><b> Pass </b>';
        $file = Input::file('boundaryCsvFile');
        $bType = $r->get('selBoundaryType');
        $bName = $r->get('selBoundaryName');

        $this->primary_input_boundary = $bName;

        $load_result = $this->load($file, $this->primary_input_boundary, $this->boundary_msgs,$details);

        $this->boundary_msgs = $load_result['msg'];

        if ($load_result['status'] == 'PASS') {
            $this->boundary_msgs['overall_status'] = 'Pass';
            $this->boundary_msgs['job_code'] = $details->id;
        } else {
            $this->boundary_msgs['overall_status_reason'] = 'during data insertion';
        }
        $this->dataload_utilities->update_user_log($details->id,'load_status',$load_result['status']);


        Session::put('boundary_msgs', $this->boundary_msgs);

        return Redirect::to('boundaries/boundary_loader');
    }

    public function store(Request $r)
    {
        $id = $r->get('id');
        if ($id){
            $data = DB::table('boundaries')->where('job_code', '=', $id)->orderBy('job_code', 'desc')->get();
        }
        else
            $data = Boundary::all();
        return view('boundaries.viewBoundaries')->with('data', $data);
    }
}
