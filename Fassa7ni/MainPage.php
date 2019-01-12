<?php
    session_start();  
?>

<html>
<head>
	<title>Fassa7ni</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:700,800|Cinzel:400,900|Lora:400i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="MainPage.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <meta name="keywords" content="fassa7ni, 5ragni, fun places">

</head>
<body data-spy="scroll">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
 <div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		<a href="MainPage.php" class="navbar-brand">Fassa7ni</a>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
	<li class="active" ><a href="#">Home</a></li>
	<li><a href="#aboutus" >About Us</a></li>
	<li><a href="#Contact Us">Contact Us</a></li>
   </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php
      	if(isset($_SESSION['sess_user']))
	    { 
	      echo $_SESSION["sess_user"];
	      echo '<a href="login.php" ><span>Logout</span></a></li>';
	    }
	  	else
	    {
	      echo '<li><a href="signup.php" >Sign up <i class="fa fa-user-plus"></i></a></li>
				<li><a href="login.php">Login <i class="fa fa-user"></i></a></li>';
	    }
  	?>
	
     </ul>
</div>
</div>
</div>
</nav>

<div class="jumbotron" >
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://pixel.parall.ax/parallax-agency/image/upload/w_1100,h_675,c_fill/expose/iconinc/images/template3.jpg" width="100%" alt="...">
      <div class="carousel-caption">
        <div class="container">
        	<h1>Fassa7ni</h1>
             <p>Find The Best Places</p>
             <p> to eat, drink, shop, or visit in any city in the world.</p>
            <p>  Access over 75 million short tips from local experts.</p><br>
            <hr>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://static.asiawebdirect.com/m/bangkok/portals/bangkok-com/homepage/top10-shopping-malls/pagePropertiesImage/bangkok-best-shopping-malls.jpg.jpg" alt="...">
      <div class="carousel-caption">
        <div class="container">
        	<h1>Fassa7ni</h1>
             <p>Find The Best Places</p>
             <p> to eat, drink, shop, or visit in any city in the world.</p>
            <p>  Access over 75 million short tips from local experts.</p><br>
            <hr>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="https://c1.staticflickr.com/8/7612/16941549150_107e975676_b.jpg" width="100%" alt="...">
      <div class="carousel-caption">
       <div class="container">
        	<h1>Fassa7ni</h1>
             <p>Find The Best Places</p>
             <p> to eat, drink, shop, or visit in any city in the world.</p>
            <p>  Access over 75 million short tips from local experts.</p><br>
            <hr>
        </div>
      </div>
    </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>





<!--Sec-->

<div class="row">
		<div class=" col-sm-12">
<div style="width: 100%; height: 20em;" id="f">
	<div class="container" style="margin-left: 13%; padding-top: 5%; ">
	<div class="row">
		<div class=" col-md-2 col-xs-6">
			<div class="thumbnail">
			<img src="food.png" class="img-circle">
			<a href="food.php">Food</a>
			</div>
		</div>
		<div class=" col-md-2 col-xs-6">
			<div class="thumbnail">
			<img src="coffee.png" class="img-circle"  >
			<a href="#" style="text-align: auto;">Coffee</a>
		</div>
		</div>
		<div class=" col-md-2 col-xs-6">
			<div class="thumbnail">
			<img src="nightlife.png" class="img-circle">
			<a href="#">Nightlife</a>
		</div>
		</div>
		<div class=" col-md-2 col-xs-6">
			<div class="thumbnail" >
			<img src="fun.png" class="img-circle">
			<a href="#">Fun</a>
		</div>
		</div>
		<div class="col-md-2 col-xs-6">
			<div class="thumbnail">
			<img src="shopping.png" class="img-circle">
			<a href="#">Shopping</a>
		</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

<!--about us-->
<div class="row">
		<div class=" col-sm-12">
<div style="width: 100%; height: 50em;     background-color: white; padding-top: 5%;" id="aboutus" >
	<div class="container" >
	<h2> About Us<i class="fas fa-empty-set"></i></h2>
	<h5>The people behind Fassa7ni:</h5>
	<br>
	<div class="row">
		<div class=" col-md-3 col-xs-6">
			<div class="thumbnail">
			<img src="1.png" class="img-circle">
			<h3>Name</h3>
            <h3>Job Title</h3>
			</div>
		</div>
		<div class=" col-md-3 col-xs-6">
			<div class="thumbnail">
			<img src="2.png" class="img-circle"  >
			<h3>Name</h3>
            <h3>Job Title</h3>
		</div>
		</div>
		<div class=" col-md-3 col-xs-6">
			<div class="thumbnail">
			<img src="3.png" class="img-circle">
			<h3>Name</h3>
            <h3>Job Title</h3>
		</div>
		</div>
		<div class=" col-md-3 col-xs-6">
			<div class="thumbnail" >
			<img src="4.png" class="img-circle">
		<h3>Name</h3>
            <h3>Job Title</h3>

		</div>
		</div>
		
	</div>
	<h6><b>Fassa7ni is a website that gives the user a suggestion to the places that are near the location
of the user or the user can search about another location.
These places include: breakfast, launch, and dinner restaurants, night life and things to do.
Every place has information like
location, comments, rating of users, contact information and some pictures of the place.</h6>
	</div>

</div>

</div>
</div>
<footer>
<div style="width: 100%; height: 20em;     background-color: black; padding-top: 1%;" id="Contact Us" >
	<div class="container"  >
	<h1> Contact Us<i class="fas fa-empty-set"></i></h1>
	<div class="row">
		<div class=" col-md-3 col-xs-6">
			<a href="new.html">Home</a><br>
			<a href="#aboutus">About us</a>
		</div>
		<div class=" col-md-3 col-xs-6">
			<h3 style="color: white">Fields</h3>
			<a href="food.php">Food</a><br>
			<a href="#">Coffee</a><br>
			<a href="#">Nightlife</a><br>
			<a href="#">Fun</a><br>
			<a href="#">Shopping</a><br>
		</div>
		<div class=" col-md-3 col-xs-6">
			<h3 style="color: white">Contact us</h3>
			<a href="#">FaceBook</a><br>
			<a href="#">Twitter</a><br>
			<a href="#">Instgram</a><br>
		</div>
	</div>

</div>
</div>
</footer>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>



