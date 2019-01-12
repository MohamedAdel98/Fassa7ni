<?PHP
	include ("config.php");
	include ("signup.php");
	if($valid == true)
	{
		$sql = "INSERT INTO user (firstname, lastname, password, email, gender, day, month, year) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[password]', '$_POST[email]', '$_POST[gender]', '$_POST[day]', '$_POST[month]', '$_POST[year]')";
		if(! mysqli_query($con,$sql))
		{
			echo "Error ".mysqli_error($con);
		}
		else
		{
			echo '<script>
				window.location = "login.php";
				</script>';
		}
	}
	else
	{
		$valid = true;
	}
?>