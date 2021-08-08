if ($("#map .google-maps").length) {
    var directionsService = new google.maps.DirectionsService();
    var directionsDisplay = new google.maps.DirectionsRenderer();
    var targetLocation = new google.maps.LatLng("41.118555", "28.2743889");

    var myOptions = {
        center: targetLocation,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 13,
        scrollwheel: false,
        streetViewControl: false,
        mapTypeControl: false,
        disableDoubleClickZoom: true,
        styles: [
            {
                featureType: "all",
                stylers: [
                    {saturation: -100}
                ]
            }
        ]
    }

    var map = new google.maps.Map($("#map .google-maps")[0], myOptions);
    directionsDisplay.setMap(map);

    var marker = new google.maps.Marker({
        position: targetLocation,
        map: map,
        icon: "marker.png",
        visible: true
    });
}