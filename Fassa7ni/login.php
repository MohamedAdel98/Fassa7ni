<!doctype html>  
<html>  
<head>
<!--<link href="login.css" rel="stylesheet" id="bootstrap-css">-->
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<script type="text/javascript" src="ajax.js"></script>
</head>
<body style="background-color: black;" onload="process()">
    <div class="container" style="margin-top: 15%; margin-right: auto;width: 40%; height: 20em;" >
        <div class="jumbtron">
          <h1 style="text-align: center;color:#FFD030; padding-bottom: 1.5%; ">LogIn <i class="fas fa-sign-in-alt"></i></h1>
            <form class="form-signin" action = "" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input name = "email" style="background-color: transparent; margin-bottom: 1.5%;" type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                <div id="emailError"></div><br/>
                <input name = "password" style="background-color: transparent;" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox"  value="remember-me" > <span style="color: white;">Remember me</span>
                    </label>
                </div>
                <input type="submit" style="background-color: #FFD030; color:black; margin-bottom: 1.5%" value="Login" name="submit" class="btn btn-lg btn-primary btn-block btn-signin"/>  
            </form><!-- /form -->
            <a href="#" class="forgot-password" style="color: #FFFFFF;">
                Forgot the password?
            </a>
        </div>
    </div>
  </body>
<?php  
  if(isset($_POST["submit"]))
  {    
    if(!empty($_POST['email']) && !empty($_POST['password'])) 
    {  
      $user = $_POST['email'];  
      $pass = $_POST['password'];  
      $con = mysqli_connect('localhost','root','') or die(mysqli_error());  
      mysqli_select_db($con,'fassa7ni') or die("cannot select DB");  
      $query = mysqli_query($con,"SELECT * FROM user WHERE email = '".$user."' AND password = '".$pass."'");  
      $numrows = mysqli_num_rows($query);  
      if($numrows != 0)  
      {  
        while($row = mysqli_fetch_assoc($query))  
        {  
          $dbusername = $row['email'];  
          $dbpassword = $row['password'];  
        }
        if($user == $dbusername && $pass == $dbpassword)  
        {  
          session_start();  
          $_SESSION['sess_user'] = $user;  
          /* Redirect browser */  
          header("Location: MainPage.php");  
        }  
      } 
      else 
      {  
        echo "Invalid username or password!";  
      }  
  } 
  else 
  {  
    echo "All fields are required!";  
  }  
}  
?>   
</html>