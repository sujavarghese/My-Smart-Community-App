{{--@extends('layouts.app')--}}

@extends('_template')

@section('content')


<div id="navbar" class="collapse navbar-collapse">

</div>

<section class="content-header">
    <div class="container">
    <h1>
        {{ $page_title or 'Business Platform'}}
        <small>{{ $page_description or 'Let\'s collaberate'  }}</small>
    </h1>
    </div>
    <!-- You can dynamically generate breadcrumbs here -->
</section>
<section class="content">
    <div class="container">
        <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="box-title">Select your stream</h4>
                    </div>
                    <div class="panel-body">
                        <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Volunteer</a></li>
                                  <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Business</a></li>
                                  <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Work</a></li>
                                  <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                      Actions <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                                      <li role="presentation" class="divider"></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                                    </ul>
                                  </li>
                                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane active" id="tab_1">
                                      <form class="form-horizontal">
                                        <div class="box-body">
                                          <div class="form-group">
                                            <label for="inputIdeaTitle" class="col-sm-2 control-label">Title: </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputIdeaTitle" placeholder="Enter Title" value="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="inputIdeaCategory" class="col-sm-2 control-label">Category: </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputIdeaCategory" placeholder="Enter Category" value="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label for="inputIdeaDescription" class="col-sm-2 control-label">Description: </label>
                                              <div class="col-sm-10">
                                                  <textarea class="form-control" rows="3" id="inputIdeaDescription"
                                                            placeholder="Tell us more about your idea.."></textarea>
                                              </div>
                                          </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                          <button type="submit" class="btn btn-default">Clear</button>
                                          <button type="submit" class="btn btn-info pull-right">Submit</button>
                                        </div>
                                        <!-- /.box-footer -->
                                      </form>
                                  </div>
                                  <!-- /.tab-pane -->
                                  <div class="tab-pane" id="tab_2">
                                    <b>Coming Soon</b>
                                  </div>
                                  <!-- /.tab-pane -->
                                  <div class="tab-pane" id="tab_3">
                                    <b>Coming Soon</b>
                                  </div>
                                  <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                              </div>
                    </div>
                </div>
            </div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Recently Delivered Projects</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="{{ asset("/images/user4.jpg")}}" alt="User Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Multi level Car park in Williams Landing station</a>
                          <span class="fa fa-thumbs-up label label-info pull-right">961</span>
                          <span class="fa fa-thumbs-down label label-info pull-right">190</span>
                      </div>
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-facebook-vertical" style="width: 22px;"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-google-vertical" style="width: 22px;"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-instagram-vertical" style="width: 22px;"><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-social-icon btn-linkedin-vertical" style="width: 22px;"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter-vertical" style="width: 22px;"><i class="fa fa-twitter"></i></a>
                    </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{ asset("/images/user5.jpg")}}" alt="User Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Community Bus for public commute</a>
                        <span class="fa fa-thumbs-up label label-info pull-right">961</span>
                        <span class="fa fa-thumbs-down label label-info pull-right">190</span>
                      </div>
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-facebook-vertical" style="width: 22px;"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-google-vertical" style="width: 22px;"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-instagram-vertical" style="width: 22px;"><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-social-icon btn-linkedin-vertical" style="width: 22px;"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter-vertical" style="width: 22px;"><i class="fa fa-twitter"></i></a>
                    </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{ asset("/images/user6.jpg")}}" alt="User Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Remote car park with park and ride option</a>
                          <span class="fa fa-thumbs-up label label-info pull-right">961</span>
                          <span class="fa fa-thumbs-down label label-info pull-right">190</span>
                      </div>School bus to reduce congestion around schools
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-facebook-vertical" style="width: 22px;"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-google-vertical" style="width: 22px;"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-instagram-vertical" style="width: 22px;"><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-social-icon btn-linkedin-vertical" style="width: 22px;"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter-vertical" style="width: 22px;"><i class="fa fa-twitter"></i></a>
                    </div>
                    </li>
                    <!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{ asset("/images/user7.jpg")}}" alt="User Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">School bus to reduce congestion around schools</a>
                          <span class="fa fa-thumbs-up label label-info pull-right">961</span>
                          <span class="fa fa-thumbs-down label label-info pull-right">190</span>
                      </div>
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-facebook-vertical" style="width: 22px;"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-google-vertical" style="width: 22px;"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-instagram-vertical" style="width: 22px;"><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-social-icon btn-linkedin-vertical" style="width: 22px;"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter-vertical" style="width: 22px;"><i class="fa fa-twitter"></i></a>
                    </div>
                    </li>
                    <!-- /.item -->
                  </ul>
                </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="/volunteering-business-enablers" class="uppercase">View All Projects</a>
            </div>
            <!-- /.box-footer -->
          </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $( document ).ready(function() {
        function findGetParameter(parameterName) {
            var result = null,
                tmp = [];
            location.search
                .substr(1)
                .split("&")
                .forEach(function (item) {
                  tmp = item.split("=");
                  if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
                });
            return result;
        }
        var title = findGetParameter('title');
        document.getElementById("inputIdeaTitle").value = title;
    });
</script>
@endsection

