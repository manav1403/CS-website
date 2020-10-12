function initialize() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(get_dir);
    }
}
function get_dir(position) {
    if ((navigator.platform.indexOf("iPhone") != -1)
        || (navigator.platform.indexOf("iPod") != -1)
        || (navigator.platform.indexOf("iPad") != -1)) {
        $(".direction-link").attr("href", "maps://www.google.com/maps/dir/" + position.coords.latitude +
            "," + position.coords.longitude + "/Indian+Institute+of+Technology+Jodhpur,+NH+65,+Nagaur+Road," +
            "+Dist+Jodhpur,+Karwar,+Rajasthan+342037/@23.6259304,70.4746297");
    }
    else {
        $(".direction-link").attr("href", "https://www.google.com/maps/dir/" + position.coords.latitude +
            "," + position.coords.longitude + "/Indian+Institute+of+Technology+Jodhpur,+NH+65,+Nagaur+Road," +
            "+Dist+Jodhpur,+Karwar,+Rajasthan+342037/@23.6259304,70.4746297");
    }
}
function handlePermission() {
    navigator.permissions.query({name:'geolocation'}).then(function(result) {
        if (result.state == 'granted') {
            initialize();
        } else if (result.state == 'prompt') {
            initialize();
        } else if (result.state == 'denied') {
            showError('Geolocation is not enabled. Please enable to use direction feature');
        }
    });
}

handlePermission();