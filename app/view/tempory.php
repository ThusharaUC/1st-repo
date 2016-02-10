<?php
/*
// create the form object 
$clonefish = new clonefish( 'loginform', 'test.php', 'POST' );

// setup codepage so your data will be handled 
// perfectly by the appropriate string functions 
$clonefish->codepage         = 'utf-8';
$clonefish->multibytesupport = 'multibyteutf8';

// add the form elements (fields) pre-filled with 
// values from $_POST 
$clonefish->addElements( $config, $_POST, get_magic_quotes_gpc() );

// validate the form if the form has been submitted 
if ( count( $_POST ) && $clonefish->validate() ) {
    // form is valid, go and store values in database, etc.
    // $clonefish->getElementValues() provides a
    // normalized value array.
}
else
    // if the form wasn't submitted yet or the validation
    // had failed, show the form (automatically
    // including error messages)
    echo
        "<html><body>" .
        $clonefish->getHTML() .
        "</body></html>";

*/?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        #map_canvas {height:60%;width:25%}
    </style>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
        var map;
        var markersArray = [];

        function initMap()
        {
            var latlng = new google.maps.LatLng(41, 29);
            var myOptions = {
                zoom: 7,
                center: {lat: 7.9500, lng: 81.0000},
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

            // add a click event handler to the map object
            google.maps.event.addListener(map, "click", function(event)
            {
                // place a marker
                placeMarker(event.latLng);

                // display the lat/lng in your form's lat/lng fields
                document.getElementById("latFld").value = event.latLng.lat();
                document.getElementById("lngFld").value = event.latLng.lng();
            });
        }
        function placeMarker(location) {
            // first remove all markers if there are any
            deleteOverlays();

            var marker = new google.maps.Marker({
                position: location,
                map: map
            });

            // add marker in markers array
            markersArray.push(marker);

            //map.setCenter(location);
        }

        // Deletes all markers in the array by removing references to them
        function deleteOverlays() {
            if (markersArray) {
                for (i in markersArray) {
                    markersArray[i].setMap(null);
                }
                markersArray.length = 0;
            }
        }
    </script>
</head>

<div onload="initMap()">
<div id="map_canvas"></div>
<input type="text" id="latFld">
<input type="text" id="lngFld">
</div>
</html>