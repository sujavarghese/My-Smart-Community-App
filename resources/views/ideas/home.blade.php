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
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">All Ideas</h3>

                    <div class="box-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tbody><tr>
                        <th class="col-sm-2">Name</th>
                        <th class="col-sm-2">Idea</th>
                        <th class="col-sm-2">Category</th>
                        <th class="col-sm-2">Up Votes</th>
                        <th class="col-sm-2">Down Votes</th>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">John Doe</td>
                        <td class="col-sm-2">Test Title</td>
                        <td class="col-sm-2">Test Category</td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-up label label-info pull-left">961</span>
                        </td>
                        <td class="col-sm-2">
                            <span class="fa fa-thumbs-down label label-info pull-left">190</span>
                        </td>
                      </tr>
                    </tbody></table>
                  </div>
                <!-- /.box-body -->
                </div>
                <div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div>
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

