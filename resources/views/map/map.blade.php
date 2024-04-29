
<script src="qgis/js/qgis2web_expressions.js"></script>
<script src="qgis/js/leaflet.js"></script>
<script src="qgis/js/leaflet.rotatedMarker.js"></script>
<script src="qgis/js/leaflet.pattern.js"></script>
<script src="qgis/js/leaflet-hash.js"></script>
<script src="qgis/js/Autolinker.min.js"></script>
<script src="qgis/js/rbush.min.js"></script>
<script src="qgis/js/labelgun.min.js"></script>
<script src="qgis/js/labels.js"></script>
<script src="qgis/data/kebunpg_1.js"></script>

<style>
    #map {
        width: 200px;
        height: 177px;
    }
    </style>
<script>
var map = L.map('map', {
    zoomControl:true, maxZoom:28, minZoom:1
}).fitBounds([[-6.639288796768369,106.76178218447967],[-6.571759215911486,106.86171884138668]]);
var hash = new L.Hash(map);
map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
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
function setBounds() {
}
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
function pop_kebunpg_1(feature, layer) {
    var popupContent = '<table>\
            <tr>\
                <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">' + (feature.properties['nama_kebun'] !== null ? autolinker.link(feature.properties['nama_kebun'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">' + (feature.properties['almt_kebun'] !== null ? autolinker.link(feature.properties['almt_kebun'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">' + (feature.properties['pemilik'] !== null ? autolinker.link(feature.properties['pemilik'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">' + (feature.properties['no_hp'] !== null ? autolinker.link(feature.properties['no_hp'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">' + (feature.properties['email'] !== null ? autolinker.link(feature.properties['email'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">' + (feature.properties['url'] !== null ? autolinker.link(feature.properties['url'].toLocaleString()) : '') + '</td>\
            </tr>\
        </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
    var popup = layer.getPopup();
    var content = popup.getContent();
    var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
    popup.setContent(updatedContent);
}

function style_kebunpg_1_0() {
    return {
        pane: 'pane_kebunpg_1',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(35,249,16,1.0)',
        interactive: true,
    }
}
map.createPane('pane_kebunpg_1');
map.getPane('pane_kebunpg_1').style.zIndex = 401;
map.getPane('pane_kebunpg_1').style['mix-blend-mode'] = 'normal';
var layer_kebunpg_1 = new L.geoJson(json_kebunpg_1, {
    attribution: '',
    interactive: true,
    dataVar: 'json_kebunpg_1',
    layerName: 'layer_kebunpg_1',
    pane: 'pane_kebunpg_1',
    onEachFeature: pop_kebunpg_1,
    style: style_kebunpg_1_0,
});
bounds_group.addLayer(layer_kebunpg_1);
map.addLayer(layer_kebunpg_1);
setBounds();
</script>