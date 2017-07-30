{{--@extends('layouts.app')--}}

@extends('_template')

@section('content')
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>


<div id="navbar" class="collapse navbar-collapse">

</div>

<section class="content-header">
    <div class="container">
    <h1>
        {{ $page_title or 'Safety & Security'}}
        <small>{{ $page_description or 'Your safety matters to us'  }}</small>
    </h1>
    </div>
    <!-- You can dynamically generate breadcrumbs here -->
</section>
<section class="content">
    <div class="container">
        <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4 class="box-title">Report an issue</h4>
                    </div>
                    <div class="panel-body">
                        <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">As Registered User</a></li>
                                  <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Anonymously</a></li>
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
                                            <label for="inputIdeaAddress" class="col-sm-2 control-label">Address: </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputIdeaAddress" placeholder="Enter Address" value="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label for="inputIdeaDescription" class="col-sm-2 control-label">Description: </label>
                                              <div class="col-sm-10">
                                                  <textarea class="form-control" rows="3" id="inputIdeaDescription"
                                                            placeholder="Tell us more about your idea.."></textarea>
                                              </div>
                                          </div>
                                          <div class="form-group" style="margin-left: 17%;">
                                              <button class="btn btn-default">Show in Map</button>
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
                                </div>
                                <!-- /.tab-content -->
                              </div>
                    </div>
                </div>
            </div>
        <div class="col-md-5">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Security </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <div id="area-example"></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
    </div>
</section>
<section class="content">
    <div class="container">
        <div id="map" class="map" style="height:500px;">
</div>
    </div></section>
<link rel="stylesheet" href="https://openlayers.org/en/v4.1.1/css/ol.css" type="text/css">
<!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
<script src="https://openlayers.org/en/v4.1.1/build/ol.js"></script>
<script type="text/javascript">
    var map = new ol.Map({
        layers: [
              new ol.layer.Tile({
                source: new ol.source.OSM()
              })
            ],
    //    layers: [],
        target: 'map',
        controls: ol.control.defaults({
            attributionOptions: /** @type {olx.control.AttributionOptions} */ ({
                collapsible: false
            })
        }),
        view: new ol.View({
            center: ol.proj.transform([144.692311, -37.866540], 'EPSG:4326', 'EPSG:3857'),
            zoom: 13
        })


    });
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

