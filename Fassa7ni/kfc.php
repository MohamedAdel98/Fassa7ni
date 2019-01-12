<!DOCTYPE html>
<html>
<head>
	<title>Fassa7ni</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="new.css">
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:700,800|Cinzel:400,900|Lora:400i"rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">



<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


  <style >
  	.carousel {
  max-height: 700px;
  overflow: hidden;

  .item img {
    width: 100%;
    height: 50px;
  }
}


.thumbnail {
    padding:0px;
}
.panel {
  position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
  position:absolute;
  top:11px;left:-16px;
  right:100%;
  width:0;
  height:0;
  display:block;
  content:" ";
  border-color:transparent;
  border-style:solid solid outset;
  pointer-events:none;
}
.panel>.panel-heading:after{
  border-width:7px;
  border-right-color:#f7f7f7;
  margin-top:1px;
  margin-left:2px;
}
.panel>.panel-heading:before{
  border-right-color:#ddd;
  border-width:8px;
}

  </style>
</head>
<body data-spy="scroll" style="background-color: #FFD030">
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
	<li class="active" ><a href="MainPage.php">Home</a></li>
	<li><a href="MainPage.php" >About Us</a></li>
	<li><a href="MainPage.php">Contact Us</a></li></ul>
  <ul class="nav navbar-nav navbar-right">
    <?php 
        session_start();  
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
</div>
</nav>

<div class="jumbotron" >
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
    <div class="item active">
      <img src="http://static5.uk.businessinsider.com/image/573f1862dd0895a0188b4614-4032-3024/img_4738.jpg" width="100%" alt="...">
      <div class="carousel-caption">
        <div class="container">
        	
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://www.4usky.com/data/out/51/164445509-kfc-wallpapers.jpg" alt="...">
      <div class="carousel-caption">
        <div class="container">
        	
        </div>
      </div>
    </div>
    <div class="item">
      <img src="https://burgerlad.com/wp-content/uploads/2016/06/Promo.jpg" width="100%" alt="...">
      <div class="carousel-caption">
       <div class="container">
        	
        </div>
      </div>
    </div>
    <div class="item">
      <img src="https://photoawards.com/submit/upload/2016/large/8-143385-17_IPA_Shirish-Sen_KFC_IPA2017.jpg" width="100%" alt="..." height="50%">
      <div class="carousel-caption">
       <div class="container">
        	
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

<div style="width: 100%; height: 20em; background-color: #000000" id="f" >
	<div class="container" style="margin-left: 13%; padding-top: 5%; ">
	<div class="row">
		<div class=" col-sm-6">
			<h1 style="color: #A11101; font-family: cinzel; font-weight: 900">KFC</h1>
		</div>
		<div class=" col-sm-3">
		</div>
		<div class=" col-sm-3">
			<h6 style="color: #FFD030;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
		</div>
		</div>
		<div class="row">
		<div class=" col-md-6 " style="color:white">
			<p>Fried Chicken Joint</p>
			<p>Masr Lel Taameer, Sheraton Al Matar, Qism El-Nozha, Cairo Governorate</p>
		</div></div>
		<div class="row">
		<div class=" col-md-6">
			<a href="https://www.google.com/maps/place/KFC/@30.1090811,31.3737986,17z/data=!3m1!4b1!4m5!3m4!1s0x145816683c60547d:0x756a8083d6005f94!8m2!3d30.1090811!4d31.3759873" style="color: #FFD030; font-family:Abhaya;font-size: 2em; ">location</a>

		</div>
<div class=" col-md-3"></div>
<div class=" col-md-3">
<h5 style="color: #C60000"><i class="fas fa-comment"></i>        <i class="fas fa-heart"></i></h5></h5>	
</div>
	</div>	
	</div>
</div>
</div>

<div style="width: 100%; height: 50em; background-color: #FFFFFF" id="f" >
	<div class="container" style="margin-left: 13%; padding-top: 5%; ">
	<div class="row">
		<div class=" col-sm-2">
			<p style="font-family: cinzel; font-size: 2.5em; color: black;font-weight: 900;">Comments:</p>
		</div>
	</div>
	<div class="row">
		<div class=" col-sm-2">
        <div class="container">
   <form action = "insert_comment.php" method="POST" id="comment_form" >
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id"/>
      <input type="hidden" name="place" id = "place" value="kfc" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment">
    
     <div class="form-group">
     <?php 
        $con = mysqli_connect('localhost','root','') or die(mysqli_error());  
        mysqli_select_db($con,'fassa7ni') or die("cannot select DB");  
        $query = mysqli_query($con,"SELECT * FROM comments WHERE place_name = 'kfc'");
        $numrows = mysqli_num_rows($query);  
        if($numrows != 0)
        {  
          while($row = mysqli_fetch_assoc($query))  
          {
            $name=$row['user_id'];
            $comment=$row['comment'];
            ?>
            <div class="container row col-sm-5 panel panel-default panel-heading" id="comment_content" class="form-control">
            <strong>
               <?php
              echo $name;
              ?>
            </strong><br/>
            </div>
            <div class="container row col-sm-5 panel panel-default panel-body" id="comment_content" class="form-control">
              <?php
              echo $comment;
              ?>
            </div>
            <?php
              echo "<br/>";

          }
        }
      ?>
    </div>
   </div>
    </div>
		</div>
	</div>
</div>
</div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></body>
</html>