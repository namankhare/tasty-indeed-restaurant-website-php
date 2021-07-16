mapboxgl.accessToken = 'pk.eyJ1IjoibmFtYW5raGFyZSIsImEiOiJja3FmNG9hNngwZmljMnJwZWNjdzBxcHM2In0.mbRobl4AQtQ2z5WqEs31Rw';
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [76.766090, 30.762180],
        zoom: 14
        });
        map.addControl(new mapboxgl.NavigationControl());
        map.scrollZoom.disable();
        map.on('load', function () {
        map.addSource('places', {
        'type': 'geojson',
        'data': {
        'type': 'FeatureCollection',
        'features': [
        {
        'type': 'Feature',
        'properties': {
        'description':
        '<strong>Tasty Indeed Resturant</strong><p> Tasty Indeed Resturant. 12:00-6:00 xfgdhrxtjp.m.</p>',
        'icon': 'restaurant-15'
        },
        'geometry': {
        'type': 'Point',
        'coordinates': [76.766090, 30.762180]
        }
        },
        ]
        }
        });
        map.addLayer({
        'id': 'places',
        'type': 'symbol',
        'source': 'places',
        'layout': {
        'icon-image': '{icon}',
        'icon-allow-overlap': true
        }
        });
         
        map.on('mouseenter', 'places', function (e) {
        var coordinates = e.features[0].geometry.coordinates.slice();
        var description = e.features[0].properties.description;
         
        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
        coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        }
         
        new mapboxgl.Popup()
        .setLngLat(coordinates)
        .setHTML(description)
        .addTo(map);
        });
         
        map.on('mouseenter', 'places', function () {
        map.getCanvas().style.cursor = 'pointer';
        });
         
        map.on('mouseleave', 'places', function () {
        map.getCanvas().style.cursor = '';
        });
        });