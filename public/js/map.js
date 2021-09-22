let longitude = document.currentScript.getAttribute('longitude') 
let latitude = document.currentScript.getAttribute('latitude') 
var mymap = L.map('mapid').setView([parseFloat(latitude),parseFloat(longitude)], 13);



L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZ2l1c3plcHBlIiwiYSI6ImNrdHI5c29heDBpdGYzMWtneGZ4d3Exd2UifQ.NU2_UKhgQmbHcOIYgmRivw'
}).addTo(mymap);

var oms = new OverlappingMarkerSpiderfier(mymap);
var popup = new L.Popup();

oms.addListener('click', function(marker) {
  popup.setContent(marker.desc);
  popup.setLatLng(marker.getLatLng());
  mymap.openPopup(popup);
});
oms.addListener('spiderfy', function(markers) {
  mymap.closePopup();
});


try{
    let results = document.getElementById('result-wrapper').children;
    for(result of results){
        
        let inputs = result.getElementsByTagName('input');
        let lat = inputs[0].value;
        let long = inputs[1].value;
        let title = inputs[2].value;
        let id = inputs[3].value;
        console.log(parseFloat(lat), parseFloat(long));
        if(parseFloat(lat) != 0 && parseFloat(long) != 0){
            console.log(lat);
            var marker = new L.marker([parseFloat(lat),parseFloat(long)]);
            marker.desc = `<b><a href="apartment/${id}">${title}</a></b>`;
            mymap.addLayer(marker);
            oms.addMarker(marker);
        }

    }
} catch (error) {
        let title = document.currentScript.getAttribute('title');
        var marker = L.marker([parseFloat(latitude),parseFloat(longitude)]).addTo(mymap);
        marker.bindPopup(`<b>${title}</b>`).openPopup();
}