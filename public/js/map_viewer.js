var image = new ol.style.Circle({
    radius: 5,
    fill: null,
    stroke: new ol.style.Stroke({color: 'red', width: 1})
});

var styles = {
    'Point': new ol.style.Style({
        image: image
    }),
    'LineString': new ol.style.Style({
        stroke: new ol.style.Stroke({
            color: 'green',
            width: 1
        })
    }),
    'MultiLineString': new ol.style.Style({
        stroke: new ol.style.Stroke({
            color: 'green',
            width: 1
        })
    }),
    'MultiPoint': new ol.style.Style({
        image: image
    }),
    'MultiPolygon': new ol.style.Style({
        stroke: new ol.style.Stroke({
            color: 'yellow',
            width: 1
        }),
        fill: new ol.style.Fill({
            color: 'rgba(255, 255, 0, 0.1)'
        })
    }),
    'Polygon': new ol.style.Style({
        stroke: new ol.style.Stroke({
            color: 'blue',
            lineDash: [4],
            width: 3
        }),
        fill: new ol.style.Fill({
            color: 'rgba(0, 0, 255, 0.1)'
        })
    }),
    'GeometryCollection': new ol.style.Style({
        stroke: new ol.style.Stroke({
            color: 'magenta',
            width: 2
        }),
        fill: new ol.style.Fill({
            color: 'magenta'
        }),
        image: new ol.style.Circle({
            radius: 10,
            fill: null,
            stroke: new ol.style.Stroke({
                color: 'magenta'
            })
        })
    }),
    'Circle': new ol.style.Style({
        stroke: new ol.style.Stroke({
            color: 'red',
            width: 2
        }),
        fill: new ol.style.Fill({
            color: 'rgba(255,0,0,0.2)'
        })
    })
};

var styleFunction = function (feature) {
    return styles[feature.getGeometry().getType()];
};

var tourism = 'http://data.gov.au/dataset/2c34e50b-633f-4408-9ccf-d3cd403eb05f/resource/2701e838-8d20-47b7-a929-87f18e1fd59e/download/tourism.json';
var libraries = 'http://data.gov.au/dataset/3edf7196-48a9-4bf0-87ce-29b323ae5de9/resource/1dd4c3b0-22cd-4ce8-aa5d-826b8eb06adc/download/libraries.json';
var kindergartens = 'http://data.gov.au/dataset/d60670b5-fb17-47b9-8ba7-47114dda15cf/resource/028f7651-2456-46c0-a821-114f4148be11/download/kindergarten.json';
var communitycentres = 'http://data.gov.au/dataset/9340244e-1b42-4bbb-acc3-88288899d8ba/resource/80e51b60-28ea-41f9-9c39-7cfc4b22e435/download/communitycentres.json';
var maternalchild = 'http://data.gov.au/dataset/42f5dcf2-c81f-4ceb-a831-b62523d4773e/resource/90484eaf-8ab6-4b4c-bfed-627dcc6f0d61/download/maternalchild.json';
var sportsfields = 'http://data.gov.au/dataset/cd0b0867-3cde-4800-81f7-a890cf723f6a/resource/c6f14bb3-4ce7-4637-a388-7b98a0e5e594/download/sportsfields.json';
var buildings_and_amenity = 'http://data.gov.au/geoserver/wyndham-city-buildings-and-amenity/wfs?request=GetFeature&typeName=1ac84b6c_aef0_445f_a8da_0f19d0796181&outputFormat=json';
var emergency_markers = 'http://data-esta000.opendata.arcgis.com/datasets/df294d0463b44efd85f5e66f90825451_0.geojson';
var public_transport = 'http://data-logancity.opendata.arcgis.com/datasets/369762ab80df42d69769d9460a016f2e_158.geojson';

var tourism_layer = new ol.layer.Vector({
    source: new ol.source.Vector({

        url: tourism,
        format: new ol.format.GeoJSON({

            defaultDataProjection: 'EPSG:4326',
            projection: 'EPSG:3857'

        })

    }),
    style: styleFunction
});

var libraries_layer = new ol.layer.Vector({
    source: new ol.source.Vector({

        url: libraries,
        format: new ol.format.GeoJSON({

            defaultDataProjection: 'EPSG:4326',
            projection: 'EPSG:3857'

        })

    }),
    style: styleFunction
});

var kindergartens_layer = new ol.layer.Vector({
    source: new ol.source.Vector({

        url: kindergartens,
        format: new ol.format.GeoJSON({

            defaultDataProjection: 'EPSG:4326',
            projection: 'EPSG:3857'

        })

    }),
    style: styleFunction
});

var communitycentres_layer = new ol.layer.Vector({
    source: new ol.source.Vector({

        url: communitycentres,
        format: new ol.format.GeoJSON({

            defaultDataProjection: 'EPSG:4326',
            projection: 'EPSG:3857'

        })

    }),
    style: styleFunction
});

var maternalchild_layer = new ol.layer.Vector({
    source: new ol.source.Vector({

        url: maternalchild,
        format: new ol.format.GeoJSON({

            defaultDataProjection: 'EPSG:4326',
            projection: 'EPSG:3857'

        })

    }),
    style: styleFunction
});

var sportsfields_layer = new ol.layer.Vector({
    source: new ol.source.Vector({

        url: sportsfields,
        format: new ol.format.GeoJSON({

            defaultDataProjection: 'EPSG:4326',
            projection: 'EPSG:3857'

        })

    }),
    style: styleFunction
});

var buildings_and_amenity_layer = new ol.layer.Vector({
    source: new ol.source.Vector({

        url: buildings_and_amenity,
        format: new ol.format.GeoJSON({

            defaultDataProjection: 'EPSG:4326',
            projection: 'EPSG:3857'

        })

    }),
    style: styleFunction
});

var emergency_markers_layer = new ol.layer.Vector({
    source: new ol.source.Vector({

        url: emergency_markers,
        format: new ol.format.GeoJSON({

            defaultDataProjection: 'EPSG:4326',
            projection: 'EPSG:3857'

        })

    }),
    style: styleFunction
});

var public_transport_layer = new ol.layer.Vector({
    source: new ol.source.Vector({

        url: public_transport,
        format: new ol.format.GeoJSON({

            defaultDataProjection: 'EPSG:4326',
            projection: 'EPSG:3857'

        })

    }),
    style: styleFunction
});

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
        center: ol.proj.transform([144.670241, -37.897925], 'EPSG:4326', 'EPSG:3857'),
        zoom: 7
    })


});
layerName = ''
$(".dropdown-menu li").on("click", function () {
    map.removeLayer(tourism_layer);
    var layer = $(this).data('layer');
    if(layer == 'tourism') {
        layerName = tourism_layer;
        map.addLayer(tourism_layer);
    } else if(layer == 'libraries') {
        layerName = libraries_layer;
        map.addLayer(libraries_layer);
    } else if(layer == 'kindergartens') {
        layerName = kindergartens_layer;
        map.addLayer(kindergartens_layer);
    } else if(layer == 'communitycentres') {
        layerName = communitycentres_layer;
        map.addLayer(communitycentres_layer);
    } else if(layer == 'maternalchild') {
        layerName = maternalchild_layer;
        map.addLayer(maternalchild_layer);
    } else if(layer == 'sportsfields') {
        layerName = sportsfields_layer;
        map.addLayer(sportsfields_layer);
    } else if(layer == 'buildings_and_amenity') {
        layerName = buildings_and_amenity_layer;
        map.addLayer(buildings_and_amenity_layer);
    } else if(layer == 'emergency_markers') {
        layerName = emergency_markers_layer;
        map.addLayer(emergency_markers_layer);
    } else if(layer == 'public_transport') {
        layerName = public_transport_layer;
        map.addLayer(public_transport_layer);
    }
    
});
