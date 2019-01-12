<?php
    $fname = $lname = $password = $confirm_password = $email = "";
    $fnameErr = $lnameErr = $passwordErr = $confirm_passwordErr = $emailErr = "";
    $valid = true;
    function test_input($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST['firstname']))
        {
            $fnameErr = "Provide Your First Name";
            $valid = false;
        }
        else
        {
            $fname = test_input($_POST['firstname']);
            if(!preg_match("/^([a-zA-Z' ]+)$/",$fname))
            {
                $fnameErr = "Only characters allowed";
                $valid = false;
            }
        }   
        if(empty($_POST['lastname']))
        {
            $lnameErr = "Provide Your Last Name";
            $valid = false;
        }
        else
        {
            $lname = test_input($_POST['lastname']);
            if(!preg_match("/^([a-zA-Z' ]+)$/",$lname))
            {
                $lnameErr = "Only characters allowed";
                $valid = false;
            }
        }   
        if(empty($_POST['email']))
        {
            $emailErr = "Provide Your Email";
            $valid = false;
        }
        else
        {
            $email = test_input($_POST['email']);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $emailErr = "Invalid Email Format";
                $valid = false;
            }
        }
        if(empty($_POST['password']))
        {
            $passwordErr = "Provide Your Password";
            $valid = false;
        }
        else
        {
            $password = test_input($_POST['password']);
            if(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,30}$/', $password))
            {
                $passwordErr = "Your Password must contain at least one lowercase char, at least one uppercase char, at least one digit, at least one special sign of @#-_$%^&+=§!?, at least 8 characters and at most 30 characters. <br/> example : Fassahni_user12";
                $valid = false;
            }
        }
        if(empty($_POST['confirm_password']))
        {
            $confirm_passwordErr = "Confirm Your Password";
            $valid = false;
        }
        else
        {
            $confirm_password = test_input($_POST['confirm_password']);
            if($password === $confirm_password)
            {
                echo "";
            }
            else
            {
                $confirm_passwordErr = "Password dosen't match";
                $valid = false;
            }
        }
    }
?>
<html>
    <head>
       <link href="signup.css" rel="stylesheet" id="bootstrap-css">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:700,800|Cinzel:400,900|Lora:400i" rel="stylesheet">
        <style>
            .error
            {
                color:red;
            }
            input{
                background-color: transparent;
            }
            -webkit-input-placeholder { /* Chrome */
  color: red;
}
        </style>

    </head>
    <body style="background-color: black;">
        <div class="container" style="margin-top: 5%">
            <div class="row">
                <h3 class="col-sm-offset-3 col-sm-6" style="text-align: center; color: #FFD030; font-family:Lora ; font-weight: 900; font-size: 3em; padding-bottom: 2%;">Signup</h3>
            </div>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-2">
                </div>
                <div class="col-sm-6">
                    <form action="insert.php" method="post" accept-charset="utf-8" class="form" role="form">
                        <div class="row">
                            <div class="col-xs-6 col-md-6" >
                                <input type="text" name="firstname" style="background-color: transparent; " class="form-control input-lg" placeholder="First Name"    />
                                <span class = "error"><?php echo $fnameErr;?></span>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <input type="text"  name="lastname" style="background-color: transparent; " class="form-control input-lg" placeholder="Last Name" />
                                <span class = "error"><?php echo $lnameErr;?></span>
                            </div>
                        </div>
                        <input type="text" name="email" style="background-color: transparent; " class="form-control input-lg" placeholder="Your Email"  />
                        <span class = "error"><?php echo $emailErr;?></span>
                        <input type="password" name="password" style="background-color: transparent; " class="form-control input-lg" placeholder="Password"  />
                        <span class = "error"><?php echo $passwordErr;?></span>
                        <input type="password" name="confirm_password" style="background-color: transparent; " class="form-control input-lg" placeholder="Confirm Password"  />
                        <span class = "error"><?php echo $confirm_passwordErr;?></span><br/>    
                            <label style="color: #FFD030;font-family: lora; font-size: 1.5em;">Birth Date</label>
                            <div class="row">
                                <div class="col-xs-4 col-md-4">
                                    <select name="month" style="background-color: transparent; " class="form-control input-lg">
                                        <option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option>
                                        <option value="04">Apr</option><option value="05">May</option><option value="06">Jun</option>
                                        <option value="07">Jul</option><option value="08">Aug</option><option value="09">Sep</option>
                                        <option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
                                    </select>
                                </div>
                                <div class="col-xs-4 col-md-4">
                                    <select name="day" style="background-color: transparent; " class = "form-control input-lg">
                                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                        <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
                                        <option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                                        <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
                                        <option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="21">21</option>
                                        <option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
                                        <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option>
                                        <option value="30">30</option><option value="31">31</option>
                                    </select>                        
                                </div>
                                <div class="col-xs-4 col-md-4">
                                    <select name="year" style="background-color: transparent; " class = "form-control input-lg">
                                        <option value="2001" >2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option>
                                        <option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option>
                                        <option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                    </select>
                                </div>
                            </div>
                            <label style="color: #FFD030;font-family: lora; font-size: 1.5em;">Gender : </label>
                            <label class="radio-inline" style="color: white;font-family: Abhaya;">
                                <input type="radio" name="gender" value="M" id=male checked />Male
                            </label>
                            <label class="radio-inline" style="color: white;font-family: Abhaya;">
                                <input type="radio" name="gender" value="F" id=female />Female
                            </label>
                            <br />
                        <span class="help-block" ><p style="color: white; font-family: Abhaya;">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</p></span>
                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" style="background-color:#FFD030;color: black;border-color: transparent; ">Create my account</button>
                    </form>          
                </div>
              </div>
            </div>
        </div>
    </body>
</html>