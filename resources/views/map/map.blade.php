<!DOCTYPE html>
<html>
    <head>
        <title>rudrone</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://cdn.socket.io/socket.io-1.2.0.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
        <script src="http://chancejs.com/chance.min.js"></script>

        <script>
            // var socket = io('http://87.255.27.119:40024');
            
            // $(document).ready(function(){
                
            //     t=setInterval( function() {
            //         var random_coordinates = chance.coordinates();
            //                 //console.log(random_coordinates);
            //                 socket.emit( 'data_send', {coordinates: random_coordinates} );
            //             }, 3000);
                
            // });
        </script>
        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js">
        </script>
        <script type="text/javascript">
            var map;
            function initialize() {
                var mapOptions = {
                    center: { lat: 53.19421246, lng: 45.17611766},
                    zoom: 3
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


                // var flightPlanCoordinates = [
                //     <?php
                //         //$locations = DB::table('locations')->get();
                //         //foreach($locations as $location) :
                //     ?>
                //     new google.maps.LatLng(<? // $location->lat; ?>, <? // $location->lon; ?>),
                //     <?php //endforeach; ?>
                // ];
                // var flightPath = new google.maps.Polyline({
                //     path: flightPlanCoordinates,
                //     geodesic: true,
                //     strokeColor: '#ff0000',
                //     strokeOpacity: 0.8,
                //     strokeWeight: 5
                // });

                //flightPath.setMap(map);

                <?php //foreach($locations as $location) : ?> 
                // var image = 'images/1438338337_location.png';   
                // markerLatlng = new google.maps.LatLng(<? // $location->lat; ?>, <? //$location->lon; ?>),
                // marker = new google.maps.Marker({
                //     position: markerLatlng,
                //     map: map,
                //     title: '<? //$location->id; ?>',
                //     icon: image
                // });    
                <?php //endforeach; ?>    

            }
            google.maps.event.addDomListener(window, 'load', initialize);
            google.maps.event.addDomListener(window, "resize", function() {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center); 
            });
        </script>

        <style>
            html, body, #map-canvas { height: 100%; margin: 0; padding: 0; font-family: 'Lato';}
            .left-sidebar { background: #313131; height: 100%; padding: 15px; }
            .left-sidebar a {color: #fff;}
        </style>
    </head>
    <body>
        <div class="container-fluid" style="height: 100%;">
            <div class="row" style="height: 100%;">
                <div class="col-xs-3 col-md-3 left-sidebar" style="text-align: center; display: table-cell; vertical-align: middle; color: #ffffff;">
                    
                </div>
                <div class="col-xs-9 col-md-9" style="height: 100%; padding: 0px;">
                    <div id="map-canvas"></div>
                </div>
            </div>
        </div>
    </body>
</html>
