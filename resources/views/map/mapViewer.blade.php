{{--@extends('layouts.app')--}}

@extends('_template')

@section('content')


<div id="navbar" class="collapse navbar-collapse">

</div>
<div style="background-image: url('/images/Shoal-Bay-Resort-Banners2-28.jpg'); background-size: cover;background-repeat: no-repeat;background-position: center center;">
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
    <div class="container map-buttons">
        <button data-layer='tourism' type="button" class="btn btn-primary">Tourist Places</button>
        <button data-layer='libraries' type="button" class="btn btn-success">Libraries</button>
        <button data-layer='kindergartens' type="button" class="btn btn-info">Kindergartens</button>
        <button data-layer='communitycentres' type="button" class="btn btn-danger">Communitycentres</button>
        <button data-layer='maternalchild' type="button" class="btn btn-warning">Maternal & Child Health</button>
        <button data-layer='sportsfields' type="button" class="btn bg-maroon">Sportsfields</button>
        <!--<button data-layer='buildings_and_amenity' type="button" class="btn bg-purple">Buildings & Amenity</button>-->
        <button data-layer='emergency_markers' type="button" class="btn bg-orange">Emergency Markers</button>
        <!--<button data-layer='public_transport' type="button" class="btn bg-olive">Public Transport</button>-->
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