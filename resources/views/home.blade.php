@extends('_template')

@section('content')
<!--Slider -->
@include('_slider')

<section class="content-header">
    <form action="/ideas" method="get" class="sidebar-form" style="border: 1px solid #dddddd;">
        <div class="input-group" style="display:block;">
            <input type="text" name="title" class="form-control" placeholder="Ideas?" style="background-color: #ffffff;">
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
                        <div class="box box-info">
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
                                                <td class="">ABC</td>
                                                <td class="">Awesome Idea</td>
                                                <td class="">Inftasructure</td>
                                                <td><span class="pull-right badge bg-blue">31</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">ABC</td>
                                                <td class="">Awesome Idea</td>
                                                <td class="">Inftasructure</td>
                                                <td><span class="pull-right badge bg-blue">31</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">ABC</td>
                                                <td class="">Awesome Idea</td>
                                                <td class="">Inftasructure</td>
                                                <td><span class="pull-right badge bg-blue">31</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">ABC</td>
                                                <td class="">Awesome Idea</td>
                                                <td class="">Inftasructure</td>
                                                <td><span class="pull-right badge bg-blue">31</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">ABC</td>
                                                <td class="">Awesome Idea</td>
                                                <td class="">Inftasructure</td>
                                                <td><span class="pull-right badge bg-blue">31</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">ABC</td>
                                                <td class="">Awesome Idea</td>
                                                <td class="">Inftasructure</td>
                                                <td><span class="pull-right badge bg-blue">31</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">ABC</td>
                                                <td class="">Awesome Idea</td>
                                                <td class="">Inftasructure</td>
                                                <td><span class="pull-right badge bg-blue">31</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">ABC</td>
                                                <td class="">Awesome Idea</td>
                                                <td class="">Inftasructure</td>
                                                <td><span class="pull-right badge bg-blue">31</span>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="">ABC</td>
                                                <td class="">Awesome Idea</td>
                                                <td class="">Inftasructure</td>
                                                <td><span class="pull-right badge bg-blue">31</span>
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
                        <div class="box box-danger">
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
                                <a href="javascript:void(0)" class="uppercase">View All Users</a>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-default">
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
                                            <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                                            <li><i class="fa fa-circle-o text-green"></i> IE</li>
                                            <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                                            <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                                            <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                                            <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                                        </ul>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer no-padding">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">United States of America
                                            <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                                    <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                                    </li>
                                    <li><a href="#">China
                                            <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                                </ul>
                            </div>
                            <!-- /.footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
