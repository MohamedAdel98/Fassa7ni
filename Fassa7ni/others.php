<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <title>Food</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
        <meta name="viewport" content="initial-scale=1.0, 
          width=device-width" />
        <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" 
          type="text/javascript" charset="utf-8"></script>
        <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" 
          type="text/javascript" charset="utf-8"></script>
        <script src="http://js.api.here.com/v3/3.0/mapsjs-ui.js" 
          type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" charset="UTF-8"
          src="http://js.api.here.com/v3/3.0/mapsjs-places.js"></script>
        <link rel="stylesheet" type="text/css" 
          href="http://js.api.here.com/v3/3.0/mapsjs-ui.css" />
        <style>            
            html,body
            {
                width: 100%;
                height: 100%;
                margin: 0px;
            }
            #map
            {
                float: right;
                width: 100%;
                height: 100%;
            }
            #geolocation
            {
                position: absolute;
                top: 100px;
                right: 7px;
                width: auto;
                height: 20px;
                background-color: #1f262a;
                border-radius: 22px;
                color: #fff;
                padding: 6px;
                cursor:pointer;
            }
            #geolocation:hover
            {
                color:#1f262a;
                background-color: white;
                border:1px solid #1f262a;
            }
            .active
            {
                color:#1f262a !important;
                background-color: white !important;
                border:1px solid #1f262a !important; 
            }
           
            .mBtn
            {
                margin-bottom: -10px;
            }
        </style>
    </head>
    <body>
         <div id="map"/></div>
            <div id="geolocation"></div>      
            <script type="text/javascript" charset="utf-8">
                    // Instantiate the Platform class with authentication and
            // authorization credentials:
            var platform = new H.service.Platform({
              app_id: 'CWGHKlh0iigfJYeZI2VV',
              app_code: 'P7EKB_u2IpYWSfFo_AW9Qw'
            });

            // Instantiate a map inside the DOM element with id map. The
            // map center is in San Francisco, the zoom level is 10:
            var map = new H.Map(document.getElementById('map'),
              platform.createDefaultLayers().normal.map, {
              center: {lat: 30.095346, lng: 31.374735},
              zoom: 14
              });
            
            // Create a group object to hold map markers:
            var group = new H.map.Group();

            // Create the default UI components:
            var ui = H.ui.UI.createDefault(map, platform.createDefaultLayers());

            // Add the group object to the map:
            map.addObject(group);

            // Obtain a Search object through which to submit search
            // requests:
            var search = new H.places.Search(platform.getPlacesService()),
              searchResult, error;
            var place = document.getElementById('loc');
            var product = document.getElementById('pro').value;
            // Define search parameters:
            var params = {
            // Plain text search for places with the word "hotel"
            // associated with them:
              'q': product,
            //  Search in the Chinatown district in San Francisco:
              'at': '30.095346,31.374735'
            };

            // Define a callback function to handle data on success:
            function onResult(data) {
              addPlacesToMap(data.results);
            }

            // Define a callback function to handle errors:
            function onError(data) {
              error = data;
            }

            // This function adds markers to the map, indicating each of
            // the located places:
            function addPlacesToMap(result) {
              group.addObjects(result.items.map(function (place) {
              var marker = new H.map.Marker({lat: place.position[0],
                lng: place.position[1]})
              return marker;
              }));
              function showMessage(){
            var message = document.getElementById("pro").value;
            display_message.innerHTML= message;
            }
            }

            // Run a search request with parameters, headers (empty), and
            // callback functions:
            search.request(params, {}, onResult, onError);

          </script>
    </body>
</html>