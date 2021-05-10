<?php
	include("database.php");
	$username=$_POST['Username'];
	$username=ucfirst("$username");
	$password = $_POST['Password'];
	$search = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result=mysqli_query($db, $search);
	$registered = mysqli_fetch_array($result);
	if(mysqli_num_rows($result)==1){
		$_SESSION['id']=$registered['id'];
		echo '<script type="text/javascript">'; 
		echo 'alert("Successfully logged in");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';
	}
	else {
		echo '<script type="text/javascript">'; 
		echo 'alert("Wrong username or password!");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';
	}
?>