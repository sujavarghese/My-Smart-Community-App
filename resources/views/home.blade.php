@extends('_template')

@section('content')
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
@include('_slider')

<section class="content-header">
    <form action="/ideas/create" method="get" class="sidebar-form" style="border: 1px solid #dddddd;">
        <div class="input-group" style="display:block;">
            <input type="text" name="title" class="form-control" placeholder="Got new ideas?" style="background-color: #ffffff;">
        </div>
    </form>
</section>

<section class="content">
    <div class="container width100">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua">
                                <i class="fa fa-lightbulb-o"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Ideas</span>

                                <span class="info-box-number">
                                    52
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-at"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jobs</span>
                                <span class="info-box-number">
                                    27

                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-4">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Volunteers</span>
                                <span class="info-box-number">
                                    999

                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="box box-warning" style="height: 485px;">
                            <div class="box-header with-border">
                                <h3 class="box-title">Trending Ideas</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-margin">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Idea</th>
                                                <th>Category</th>
                                                <th>Votes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="even">
                                                <td class="">Sarah</td>
                                                <td class="">Two lane road on Dunnings Road connecting the Point cook road.</td>
                                                <td class="">Infrastructure</td>
                                                <td><span class="pull-right badge bg-blue">428</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Alexader</td>
                                                <td class="">Community Bus for public commute.</td>
                                                <td class="">Transportation</td>
                                                <td><span class="pull-right badge bg-blue">370</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Karthick</td>
                                                <td class="">Social initiative to create runners for active well-being.</td>
                                                <td class="">Well Being</td>
                                                <td><span class="pull-right badge bg-blue">315</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Cibin</td>
                                                <td class="">School bus to reduce congestion around schools.</td>
                                                <td class="">Traffic</td>
                                                <td><span class="pull-right badge bg-blue">249</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Suja</td>
                                                <td class="">CCTV cameras in public playgrounds and Shopping centers.</td>
                                                <td class="">Safety & Security</td>
                                                <td><span class="pull-right badge bg-blue">201</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Senthil</td>
                                                <td class="">Multi level Car park in Williams Landing station.</td>
                                                <td class="">Inftasructure</td>
                                                <td><span class="pull-right badge bg-blue">191</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">David</td>
                                                <td class="">Remote car park with park and ride option.</td>
                                                <td class="">Technology</td>
                                                <td><span class="pull-right badge bg-blue">189</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">Hayden</td>
                                                <td class="">Plant more trees in remote areas.</td>
                                                <td class="">Sustainability</td>
                                                <td><span class="pull-right badge bg-blue">163</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="javascript:void(0)" class="uppercase">View All Ideas</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box box-danger" style="height: 485px;">
                            <div class="box-header with-border">
                                <h3 class="box-title">Latest Members</h3>

                                <div class="box-tools pull-right">
                                    <span class="label label-danger">8 New Members</span>
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix">
                                    <li>
                                        <img src="{{ asset("/images/user1.jpg")}}">
                                        <a class="users-list-name" href="#">Alexander Pierce</a>
                                        <span class="users-list-date">Today</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/images/user2.jpg")}}">
                                        <a class="users-list-name" href="#">Norman</a>
                                        <span class="users-list-date">Yesterday</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/images/user3.jpg")}}">
                                        <a class="users-list-name" href="#">Jane</a>
                                        <span class="users-list-date">12 Jan</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/images/user4.jpg")}}">
                                        <a class="users-list-name" href="#">John</a>
                                        <span class="users-list-date">12 Jan</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/images/user5.jpg")}}">
                                        <a class="users-list-name" href="#">Alexander</a>
                                        <span class="users-list-date">13 Jan</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/images/user6.jpg")}}">
                                        <a class="users-list-name" href="#">Sarah</a>
                                        <span class="users-list-date">14 Jan</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/images/user7.jpg")}}">
                                        <a class="users-list-name" href="#">Nora</a>
                                        <span class="users-list-date">15 Jan</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset("/images/user8.jpg")}}">
                                        <a class="users-list-name" href="#">Nadia</a>
                                        <span class="users-list-date">15 Jan</span>
                                    </li>
                                </ul>
                                <!-- /.users-list -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                <a href="/volunteering-business-enablers" class="uppercase">View All Users</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-success" style="height: 485px;">
                            <div class="box-header with-border">
                                <h3 class="box-title">Government Bridge</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="chart-responsive">
                                            <canvas id="pieChart" height="155" width="205" style="width: 205px; height: 155px;"></canvas>
                                        </div>
                                        <!-- ./chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-4">
                                        <ul class="chart-legend clearfix">
                                            <li><i class="fa fa-circle-o text-red"> Voted</i></li>
                                            <li><i class="fa fa-circle-o text-blue"> Under Analysis</i></li>
                                            <li><i class="fa fa-circle-o text-green"></i> Funded</li>
                                            <li><i class="fa fa-circle-o text-yellow"></i> Projects in progress</li>
                                            <li><i class="fa fa-circle-o text-grey"></i> Delivered</li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->
                            <!-- /.footer -->
                        </div>
                    </div>
                         <div class="col-md-6">
                        <div class="box box-default" style="height: 485px;">
                            <div class="box-header with-border">
                                <h3 class="box-title">Security</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="chart">
                                  <div id="area-example"></div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <!-- /.footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    Morris.Area({
      element: 'area-example',
      data: [
        { y: '2006', a: 0, b: 0 },
        { y: '2007', a: 6,  b: 16 },
        { y: '2008', a: 15,  b: 40 },
        { y: '2009', a: 25,  b: 45 },
        { y: '2010', a: 30,  b: 40 },
        { y: '2011', a: 55,  b: 65 },
        { y: '2012', a: 80, b: 90 }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Resolved issues', 'Reported issues']
    });
</script>
@endsection
