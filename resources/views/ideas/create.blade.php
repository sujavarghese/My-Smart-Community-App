{{--@extends('layouts.app')--}}

@extends('_template')

@section('content')


<div id="navbar" class="collapse navbar-collapse">

</div>

<section class="content-header">
    <div class="container">
    <h1>
        {{ $page_title or 'Ideas Platform'}}
        <small>{{ $page_description or 'Share your ideas' }}</small>
    </h1>
    </div>
    <!-- You can dynamically generate breadcrumbs here -->
</section>
<section class="content">
    <div class="container">
        <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="box-title">Share your ideas with us</h4>
                    </div>
                    <div class="panel-body">
                        <div>
                            <div class="box-header with-border">
                              <h3 class="box-title">New ideas</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
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
                    </div>
                </div>            
            </div>
                           
        <div class="col-md-5">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Top rated ideas</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="{{ asset("/images/user1.jpg")}}" alt="User Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Two lane road on Dunnings Road connecting the Point cook road
                          <span class="fa fa-thumbs-up label label-info pull-right">961</span>
                          <span class="fa fa-thumbs-down label label-info pull-right">190</span>
                        </a>
                        <span class="product-description">
                              
                            </span>
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
                        <img src="{{ asset("/images/user2.jpg")}}" alt="User Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Community Bus for public commute.
                          <span class="fa fa-thumbs-up label label-info pull-right">754</span>
                          <span class="fa fa-thumbs-down label label-info pull-right">70</span>
                        </a>
                        <span class="product-description">
                              
                            </span>
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
                        <img src="{{ asset("/images/user3.jpg")}}" alt="User Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">Social initiative to create runners for active well-being
                            <span class="fa fa-thumbs-up label label-info pull-right">359</span>
                            <span class="fa fa-thumbs-down label label-info pull-right">116</span>
                        </a>
                        <span class="product-description">
                              
                            </span>
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
                        <img src="{{ asset("/images/user4.jpg")}}" alt="User Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">School bus to reduce congestion around schools.
                          <span class="fa fa-thumbs-up label label-info pull-right">320</span>
                          <span class="fa fa-thumbs-down label label-info pull-right">17</span>
                        </a>
                        <span class="product-description">
                              
                            </span>
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
              <a href="/ideas" class="uppercase">View All Ideas</a>
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

