@extends('layouts.HeaderID')

@section('main')
   
<script src="/qgis/js/qgis2web_expressions.js"></script>
<script src="/qgis/js/leaflet.js"></script>
<script src="/qgis/js/leaflet.rotatedMarker.js"></script>
<script src="/qgis/js/leaflet.pattern.js"></script>
<script src="/qgis/js/leaflet-hash.js"></script>
<script src="/qgis/js/Autolinker.min.js"></script>
<script src="/qgis/js/rbush.min.js"></script>
<script src="/qgis/js/labelgun.min.js"></script>
<script src="/qgis/js/labels.js"></script>
<script src="/qgis/data/kebunbogor_1.js"></script>

<style>
    .card {
            width: 300px; /* Adjust card width as needed */
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            margin: 20px auto;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-image img {
            width: 100%;
            height: 200px; /* Adjust image height as needed */
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-info {
            font-size: 14px;
            line-height: 1.5;
        }

    /* CSS untuk kontainer peta */
    #map-container {
        position: relative; /* Pastikan kontainer peta berada dalam alur dokumen */
        z-index: 99; /* Z-index yang lebih rendah dari header */
        /* Tambahan properti styling lainnya */
    }

    /* CSS untuk peta */
    #map {
    width: 100%; /* Gunakan lebar penuh */
    height: 400px; /* Sesuaikan tinggi peta sesuai kebutuhan */
}

.blog_item_img img {
    width: 100%; /* Gunakan lebar penuh */
    height: auto; /* Biarkan tinggi gambar menyesuaikan */
}
    
</style>
<div class="slider-area ">
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="/assets/img/hero/contact_hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Single Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post"> 
                    <div class="blog_item_img">
                        <?php             
                        $imageSrc = 'data:image/png;base64,'. $post["gambar"];
                        ?>
                        <img src="{{ $imageSrc }}" alt="">                                
                    </div>
                    <div class="blog_details">
                        <h2>{{ $post["judul"] ? $post["judul"] : '' }}</h2>
                        <p class="excert">
                            @php
                            $paragraphs = explode("\n", $post["detail_wisata"]);
                            foreach ($paragraphs as $paragraph) {
                                echo "<p>$paragraph</p>";
                            }
                            @endphp
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" style="z-index: 1;">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget" >
                        <div class="single_sidebar_widget" >
                            <div id="map-container" >  
                                <div id="map" data-lan="{{ $post['lan'] }}" data-long="{{ $post['long'] }}"></div>

                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->

<script>
    var map = L.map('map', {
        zoomControl: true,
        maxZoom: 28,
        minZoom: 1
    }).fitBounds([[-6.621504250860399, 106.73140381314676], [-6.556330467375253, 106.8278509049287]]);
    var hash = new L.Hash(map);
    map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
    var autolinker = new Autolinker({ truncate: { length: 30, location: 'smart' } });

    function removeEmptyRowsFromPopupContent(content, feature) {
        var tempDiv = document.createElement('div');
        tempDiv.innerHTML = content;
        var rows = tempDiv.querySelectorAll('tr');
        for (var i = 0; i < rows.length; i++) {
            var td = rows[i].querySelector('td.visible-with-data');
            var key = td ? td.id : '';
            if (td && td.classList.contains('visible-with-data') && feature.properties[key] == null) {
                rows[i].parentNode.removeChild(rows[i]);
            }
        }
        return tempDiv.innerHTML;
    }

    var bounds_group = new L.featureGroup([]);

    function setBounds() {}

    map.createPane('pane_OpenStreetMap_0');
    map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
    var layer_OpenStreetMap_0 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        pane: 'pane_OpenStreetMap_0',
        opacity: 1.0,
        attribution: '',
        minZoom: 1,
        maxZoom: 28,
        minNativeZoom: 0,
        maxNativeZoom: 19
    });
    layer_OpenStreetMap_0;
    map.addLayer(layer_OpenStreetMap_0);

    function pop_kebunbogor_1(feature, layer) {
        var popupContent = '<div class="card">\
            <div class="card-content">\
                <h2 class="card-title">Informasi Lokasi</h2>\
                <div class="card-info">\
                    <p><strong>Nama Kebun:</strong> ' + (feature.properties['nama_kebun'] !== null ? feature.properties['nama_kebun'] : 'Tidak tersedia') + '</p>\
                    <p><strong>Alamat Kebun:</strong> ' + (feature.properties['almt_kebun'] !== null ? feature.properties['almt_kebun'] : 'Tidak tersedia') + '</p>\
                    <p><strong>Pemilik:</strong> ' + (feature.properties['pemilik'] !== null ? feature.properties['pemilik'] : 'Tidak tersedia') + '</p>\
                    <p><strong>No. HP:</strong> ' + (feature.properties['no_hp'] !== null ? feature.properties['no_hp'] : 'Tidak tersedia') + '</p>\
                    <p><strong>Email:</strong> ' + (feature.properties['email'] !== null ? feature.properties['email'] : 'Tidak tersedia') + '</p>\
                    <p><strong>URL:</strong> ' + (feature.properties['url_poto'] !== null ? '<a href="' + feature.properties['url_poto'] + '" target="_blank">' + feature.properties['url_poto'] + '</a>' : 'Tidak tersedia') + '</p>\
                </div>\
            </div>\
        </div>';
        layer.bindPopup(popupContent, { maxHeight: 400 });
        var popup = layer.getPopup();
        var content = popup.getContent();
        var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
        popup.setContent(updatedContent);
    }

    function style_kebunbogor_1_0() {
        return {
            pane: 'pane_kebunbogor_1',
            radius: 8.0,
            opacity: 1,
            color: 'rgba(61,128,53,1.0)',
            dashArray: '',
            lineCap: 'butt',
            lineJoin: 'miter',
            weight: 2.0,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(84,176,74,1.0)',
            interactive: true,
        }
    }

    map.createPane('pane_kebunbogor_1');
    map.getPane('pane_kebunbogor_1').style.zIndex = 401;
    map.getPane('pane_kebunbogor_1').style['mix-blend-mode'] = 'normal';
    var layer_kebunbogor_1 = new L.geoJson(json_kebunbogor_1, {
        attribution: '',
        interactive: true,
        dataVar: 'json_kebunbogor_1',
        layerName: 'layer_kebunbogor_1',
        pane: 'pane_kebunbogor_1',
        onEachFeature: pop_kebunbogor_1,
        pointToLayer: function (feature, latlng) {
            var context = {
                feature: feature,
                variables: {}
            };
            return L.circleMarker(latlng, style_kebunbogor_1_0(feature));
        },
    });
    bounds_group.addLayer(layer_kebunbogor_1);
    map.addLayer(layer_kebunbogor_1);
    setBounds();
    var lan = document.getElementById('map').getAttribute('data-lan');
    var long = document.getElementById('map').getAttribute('data-long');

// Set tampilan peta dengan lan dan long
map.setView([lan, long], 15);
</script>
   
@endsection
