'use strict';
var mymap = L.map('mapid').setView([26.35773, 73.0632], 12);

let initialiseMap = function () {
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="http://cartodb.com/attributions">CartoDB</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1IjoiYWJoaW5hdnJhaSIsImEiOiJjajU3YTduZjMwdjA5MnlwaHU0bnoweDNrIn0.b43RguKtcWbMVJP6jilW6w'
            }).addTo(mymap);
}

let plotHotelList = function () {
    for (var i = 0; i < hotelList.length; i++) {
        let hotel = L.marker([hotelList[i].lat, hotelList[i].lng]).addTo(mymap);
        let hotelInfo = "<b>" + "Hotel: </b>" + hotelList[i].name + "<br> <b> Address: </b>" + hotelList[i].address + "<br> <b> Tariff: </b>" + hotelList[i].tarrif + "<br> <b> Contact: </b>" + hotelList[i].contact;
        hotel.bindTooltip(hotelInfo);
    }
};
function showHotel(hotel, hotelInfo) {
    hotel.bindTooltip(hotelInfo);
}
let plotCampus = function () {
    let permanentCampusLatLng = [26.47649, 73.122371];
    let mbmCampusLatLng = [26.27068, 73.034893];

    let permanentCampusCircle = L.circle(permanentCampusLatLng, {
        color: 'red',
        fillColor: 'green',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(mymap);
    permanentCampusCircle.bindTooltip("<b>Permanent Campus</b>");

    let mbmCampusCircle = L.circle(mbmCampusLatLng, {
        color: 'green',
        fillColor: 'red',
        fillOpacity: 0.5,
        radius: 300
    }).addTo(mymap);
    mbmCampusCircle.bindTooltip("<b>Temporarty Campus (MBM)</b> <br> Bus Journey starts here");
}

let plotTransportations = function () {
    let airportLatLng = [26.250152, 73.046908];
    let railwayStationLatLng = [26.283607, 73.023029];
    let airportIcon = L.icon({
        iconUrl: 'images/airport.png',
        iconSize: [31, 26]
    });
    let railwayIcon = L.icon({
        iconUrl: 'images/railway.png',
        iconSize: [31, 26]
    });
    let airportMarker = L.marker(airportLatLng, {icon: airportIcon}).addTo(mymap);
    let railwayStationMarker = L.marker(railwayStationLatLng, {icon: railwayIcon}).addTo(mymap);
    airportMarker.bindTooltip("Airport");
    railwayStationMarker.bindTooltip("Railway Station");
};

let latlngPicker = function () {
    var popup = L.popup();
    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }
    mymap.on('click', onMapClick);
};

let busSchedule = function () {
    let time = new Date();
    let hours="";
    if (time.getHours()<10)
        hours+="0";
    hours+=time.getHours();
    let minutes = "";
    if (time.getMinutes() <10)
        minutes+="0";
    minutes+=time.getMinutes();
    let currentTime = hours+ ":" + minutes;
    let lateNightFlag=1;
    let nextBusKarwad = mbmToKarwad[0];
    let nextBusMbm = karwadToMbm[0];
    if (time.getDay()=="6"){
        for (var i=0; i<mbmToKarwadSat.length; i++){
            if (mbmToKarwadSat[i]>currentTime){
                lateNightFlag = 0;
                break;
            }
        }
        if (lateNightFlag == 0){
            nextBusKarwad = mbmToKarwadSat[i];
        }
        else {
            nextBusKarwad = mbmToKarwadSun[0] + '(Tomorrow)';

        }
        lateNightFlag=1;
        for (var i=0; i<karwadToMbmSat.length; i++){
            if (karwadToMbmSat[i]>currentTime){
                lateNightFlag = 0;
                break;
            }
        }
        if (lateNightFlag == 0){
            nextBusMbm = karwadToMbmSat[i];
        }
        else {
            nextBusMbm = karwadToMbmSun[0] + '(Tomorrow)';
        }
    }
    else if (time.getDay()=='0'){
        for (var i=0; i<mbmToKarwadSun.length; i++){
            if (mbmToKarwadSun[i]>currentTime) {
                lateNightFlag = 0;
                break;
            }
        }
        if (lateNightFlag == 0){
            nextBusKarwad = mbmToKarwadSun[i];
        }
        else {
            nextBusKarwad = mbmToKarwad[0]+ '(Tomorrow)';

        }
        lateNightFlag=1;
        for (var i=0; i<karwadToMbmSun.length; i++){
            if (karwadToMbmSun[i]>currentTime){
                lateNightFlag = 0;
                break;
            }
        }
        if (lateNightFlag == 0){
            nextBusMbm = karwadToMbmSun[i];
        }
        else {
            nextBusMbm = karwadToMbm[0] + '(Tomorrow)';
        }
    }
    else {
        for (var i=0; i<mbmToKarwad.length; i++){
            if (mbmToKarwad[i]>currentTime) {
                lateNightFlag = 0;
                break;
            }
        }
        if (lateNightFlag == 0){
            nextBusKarwad = mbmToKarwad[i];
        }
        else {
            if(time.getDay() == '5'){
                nextBusKarwad = mbmToKarwadSat[0] + '(Tomorrow)';
            }
            else {
                nextBusKarwad = mbmToKarwad[0] + '(Tomorrow)';
            }

        }
        lateNightFlag=1;
        for (var i=0; i<karwadToMbm.length; i++){
            if (karwadToMbm[i]>currentTime){
                lateNightFlag = 0;
                break;
            }
        }
        if (lateNightFlag == 0){
            nextBusMbm = karwadToMbm[i];
        }
        else {
            if (time.getDay() == '5'){
                nextBusMbm = karwadToMbmSat[0] + '(Tomorrow)';
            }
            else {
                nextBusMbm = karwadToMbm[0] + '(Tomorrow)';
            }
        }
    }


    document.getElementById('karwadBus').innerHTML = nextBusKarwad;
    document.getElementById('mbmBus').innerHTML = nextBusMbm;
    setTimeout(busSchedule,60000);
};

let init = function () {
    initialiseMap();
    plotHotelList();
    plotCampus();
    plotTransportations();
    busSchedule();
};

init();
