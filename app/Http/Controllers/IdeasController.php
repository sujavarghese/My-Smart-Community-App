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
        $response = array(
            'sam_names' => $this->dataload_utilities->get_default_sams(),
        );

        return view('ideas.create')->with('response', $response);
    }

    public function volunteering_business_enablers(Request $r)
    {
        /**
         * Form validation
         */
        $response = array(
            'sam_names' => $this->dataload_utilities->get_default_sams(),
        );

        return view('ideas.volunteering')->with('response', $response);
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
