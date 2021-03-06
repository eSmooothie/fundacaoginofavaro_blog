let map;

function initMap() {
    var myLoc = new google.maps.LatLng(-8.8742, 125.7275 ); // location
    var mapOptions = {
        zoom: 8,
        center: myLoc,
        disableDefaultUI: true,
    }

    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    const drawingManager = new google.maps.drawing.DrawingManager({
        drawingMode: google.maps.drawing.OverlayType.MARKER,
        drawingControl: true,
        drawingControlOptions: {
        position: google.maps.ControlPosition.TOP_CENTER,
        drawingModes: [
            google.maps.drawing.OverlayType.MARKER,
        ],
        },
        circleOptions: {
        fillColor: "#ffff00",
        fillOpacity: 1,
        strokeWeight: 5,
        clickable: false,
        editable: true,
        zIndex: 1,
        },
    });

    drawingManager.setMap(map);
}