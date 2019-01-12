<?php
    session_start();  
?>

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
            .form-control 
            {
                display: inline;
                width: auto;
                height: auto;
                margin-top: 10px;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555;
                background-color: #fff;
                background-image: none;
                border: 1px solid #ccc;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
                -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            }
            
            html,body
            {
                width: 100%;
                height: 100%;
                margin: 0px;
            }
            #map
            {
                float: right;
                width: 50%;
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
            figure {
                float: left;
                width: 570px;
                height: 200px;
                margin: 0;
                padding: 0;
                background: #fff;
                overflow: hidden;
            }
            figure:hover+span {
                bottom: -36px;
                opacity: 1;
            }



            /* Zoom In #1 */
            .hover01 figure img {
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover01 figure:hover img {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            /* Zoom In #2 */
            .hover02 figure img {
                width: 300px;
                height: auto;
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover02 figure:hover img {
                width: 350px;
            }

            /* Zoom Out #1 */
            .hover03 figure img {
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover03 figure:hover img {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            /* Zoom Out #2 */
            .hover04 figure img {
                width: 400px;
                height: auto;
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover04 figure:hover img {
                width: 300px;
            }

            /* Slide */
            .hover05 figure img {
                margin-left: 30px;
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover05 figure:hover img {
                margin-left: 0;
            }

            /* Rotate */
            .hover06 figure img {
                -webkit-transform: rotate(15deg) scale(1.4);
                transform: rotate(15deg) scale(1.4);
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover06 figure:hover img {
                -webkit-transform: rotate(0) scale(1);
                transform: rotate(0) scale(1);
            }

            /* Blur */
            .hover07 figure img {
                -webkit-filter: blur(3px);
                filter: blur(3px);
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover07 figure:hover img {
                -webkit-filter: blur(0);
                filter: blur(0);
            }

            /* Gray Scale */
            .hover08 figure img {
                -webkit-filter: grayscale(100%);
                filter: grayscale(100%);
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover08 figure:hover img {
                -webkit-filter: grayscale(0);
                filter: grayscale(0);
            }

            /* Sepia */
            .hover09 figure img {
                -webkit-filter: sepia(100%);
                filter: sepia(100%);
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover09 figure:hover img {
                -webkit-filter: sepia(0);
                filter: sepia(0);
            }

            /* Blur + Gray Scale */
            .hover10 figure img {
                -webkit-filter: grayscale(0) blur(0);
                filter: grayscale(0) blur(0);
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover10 figure:hover img {
                -webkit-filter: grayscale(100%) blur(3px);
                filter: grayscale(100%) blur(3px);
            }

            /* Opacity #1 */
            .hover11 figure img {
                opacity: 1;
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover11 figure:hover img {
                opacity: .5;
            }

            /* Opacity #2 */
            .hover12 figure {
                background: #1abc9c;
            }
            .hover12 figure img {
                opacity: 1;
                -webkit-transition: .3s ease-in-out;
                transition: .3s ease-in-out;
            }
            .hover12 figure:hover img {
                opacity: .5;
            }

            /* Flashing */
            .hover13 figure:hover img {
                opacity: 1;
                -webkit-animation: flash 1.5s;
                animation: flash 1.5s;
            }
            @-webkit-keyframes flash {
                0% {
                    opacity: .4;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes flash {
                0% {
                    opacity: .4;
                }
                100% {
                    opacity: 1;
                }
            }

            /* Shine */
            .hover14 figure {
                position: relative;
            }
            .hover14 figure::before {
                position: absolute;
                top: 0;
                left: -75%;
                z-index: 2;
                display: block;
                content: '';
                width: 50%;
                height: 100%;
                background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
                background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
                -webkit-transform: skewX(-25deg);
                transform: skewX(-25deg);
            }
            .hover14 figure:hover::before {
                -webkit-animation: shine .75s;
                animation: shine .75s;
            }
            @-webkit-keyframes shine {
                100% {
                    left: 125%;
                }
            }
            @keyframes shine {
                100% {
                    left: 125%;
                }
            }

            /* Circle */
            .hover15 figure {
                position: relative;
            }
            .hover15 figure::before {
                position: absolute;
                top: 50%;
                left: 50%;
                z-index: 2;
                display: block;
                content: '';
                width: 0;
                height: 0;
                background: rgba(255,255,255,.2);
                border-radius: 100%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                opacity: 0;
            }
            .hover15 figure:hover::before {
                -webkit-animation: circle .75s;
                animation: circle .75s;
            }
            @-webkit-keyframes circle {
                0% {
                    opacity: 1;
                }
                40% {
                    opacity: 1;
                }
                100% {
                    width: 200%;
                    height: 200%;
                    opacity: 0;
                }
            }
            @keyframes circle {
                0% {
                    opacity: 1;
                }
                40% {
                    opacity: 1;
                }
                100% {
                    width: 200%;
                    height: 200%;
                    opacity: 0;
                }
            }
        </style>
         <link rel="stylesheet" type="text/css" href="MainPage.css">
        <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:700,800|Cinzel:400,900|Lora:400i" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding-top: 0px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="MainPage.php" style="font-weight: 900;">Fassa7ni</a>
                            <span class="form-inline">
                                <span class="form-group">
                                    <select class="form-control">
                                        <option value="" selected disabled hidden>I'am looking for.."</option>
                                        <option>Food</option>
                                        <option>Coffee</option>
                                        <option>NightLife</option>
                                        <option>Fun</option>
                                        <option>Shopping</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button type="submit" class="btn btn-default mBtn" style="background-color: black;">Submit</button>
                                </span>
                            </span>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right">
               <!-- <ul class="nav navbar-nav toright">-->
                            <?php 
                                if(isset($_SESSION['sess_user']))
                                { 
                                  echo $_SESSION["sess_user"];
                                  echo '<a href="login.php"><span>Logout</span></a></li>';
                                }
                                else
                                {
                                  echo '<li><a href="signup.php">Sign up <i class="fa fa-user-plus"></i></a></li>
                                        <li><a href="login.php">Login <i class="fa fa-user"></i></a></li>';
                                }
                            ?>
                </ul>
                </div>
            </div>
        </nav>
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

            // Define search parameters:
            var params = {
            // Plain text search for places with the word "hotel"
            // associated with them:
              'q': 'food',
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
            }

            // Run a search request with parameters, headers (empty), and
            // callback functions:
            search.request(params, {}, onResult, onError);

          </script>
        <div class="hover column hover13">
            <figure style="cursor:pointer;cursor:hand"><img width="570px" height="180px" src="P1.jpeg" alt="Page1" onclick="window.location.href = 'https://www.google.com/maps/place/Senzo+Cafe+Pizzeria/@30.108318,31.3752783,17z/data=!3m1!4b1!4m5!3m4!1s0x14583e26ffffffff:0x21eb8e61eaba8577!8m2!3d30.108318!4d31.377467'"></figure>
            <figure style="cursor:pointer;cursor:hand"><img width="570px" height="180px" src="P2.jpeg" alt="Page2" onclick="window.location.href = 'mcdonalds.html'"></figure>
            <figure style="cursor:pointer;cursor:hand"><img width="570px" height="160px" src="33.jpeg" alt="Page3" onclick="window.location.href = 'kfc.php'"></figure>
        </div>
    </body>
</html>