<?PHP
	include ("config.php");
		$sql = "INSERT INTO comments (comment, user_id, place_name) VALUES ('$_POST[comment_content]','$_POST[comment_name]', '$_POST[place]')";
		if(! mysqli_query($con,$sql))
		{
			echo "Error ".mysqli_error($con);
		}
		else
		{
			echo '<script>
				window.location = "MainPage.php";
				</script>';
		}
?>