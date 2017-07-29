@extends('_template')

@section('content')

    <div id="navbar" class="collapse navbar-collapse">

    </div>

    <section class="content-header">
        <h1>
            {{ $page_title or 'My Smart Community Dashboard'}}
            <small>{{ $page_description or 'Overall summary of My Smart Community App' }}</small>
        </h1>
        <!-- You can dynamically generate breadcrumbs here -->
    </section>

    <section class="content">
        <div class="container width100">
            <div class="row">
                <div class="col-md-10" style="width: 95%">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
