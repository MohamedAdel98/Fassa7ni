<?php
header('Content-Type: application/xml; charset=utf-8');
echo '<response>';
	$EMAIL = $_GET['email'];
    $con = mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'fassa7ni') or die("cannot select DB");  
    $query = mysqli_query($con,"SELECT * FROM user WHERE email = '".$EMAIL."'");
    $numrows = mysqli_num_rows($query);  
    if($numrows != 0)  
      	echo "Welcome ".$EMAIL;
    elseif ($EMAIL=='')
    	echo "Please enter your E-Mail!";
    else
   		echo "Sorry! ".$EMAIL." not found in Fassa7ni!";
echo '</response>';
?>