{{--@extends('layouts.app')--}}

@extends('_template')

@section('content')


<div id="navbar" class="collapse navbar-collapse">

</div>
<div style="background-image: url('/images/Shoal-Bay-Resort-Banners2-28.jpg'); background-size: 1366px 100%;">
<section class="content-header">
    <div class="container">
        <h1>
            Explore
            <small>Wyndham</small>
        </h1>
    </div>
    <!-- You can dynamically generate breadcrumbs here -->
</section>
<section class="content-header">
    <div class="container">
        <div class="btn-group">
            <button type="button" class="btn btn-warning btn-flat">Landmarks</button>
            <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li data-layer='tourism'><a href="#" >Tourist Attractions</a></li>
                <li data-layer='libraries'><a href="#">Libraries</a></li>
                <li data-layer='kindergartens'><a href="#">Kindergartens</a></li>
                <li data-layer='communitycentres'><a href="#">Communitycentres</a></li>
                <li data-layer='maternalchild'><a href="#">Maternal & Child Health</a></li>
                <li data-layer='sportsfields'><a href="#">Sportsfields</a></li>
                <li data-layer='buildings_and_amenity'><a href="#">Buildings & Amenity</a></li>
                <li data-layer='emergency_markers'><a href="#">Emergency_Markers</a></li>
                <li data-layer='public_transport'><a href="#">Public Transport</a></li>
            </ul>
        </div>
        <!-- You can dynamically generate breadcrumbs here -->
    </div>
</section>
    <br>
    <br>
</div>


<div id="map" class="map">
</div>


<link rel="stylesheet" href="https://openlayers.org/en/v4.1.1/css/ol.css" type="text/css">
<!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
<script src="https://openlayers.org/en/v4.1.1/build/ol.js"></script>
<script src="{{ asset("/js/map_viewer.js")}}" type="text/javascript"></script>
@endsection