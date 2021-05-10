<?php
	include("database.php");
	$name=$_POST['Fname'];
	$name=ucfirst("$name");
	$lastname=$_POST['Lname'];
	$lastname=ucfirst("$lastname");
	$mail=$_POST['Mail'];
	$username=$_POST['Username'];
	$username=ucfirst("$username");
    $password=$_POST['Password'];
    $password2=$_POST['Password2'];
    $question=$_POST['question'];
    $answer=$_POST['answer'];
	$new=new mysqli('localhost', 'root', '', 'gameforia');
	if($password!=$password2){
		echo '<script type="text/javascript">'; 
		echo 'alert("Sorry... Two passwords do not match!");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';
		}			
	else {
			$sql ="INSERT INTO users (name, lname, mail, username, password, question, answer) VALUES ('$name', '$lastname','$mail', '$username', '$password', '$question' , '$answer')";
			if($new->query($sql)){
				$username_check = "SELECT * FROM users WHERE username='$username'";
				$username_result = mysqli_query($db, $username_check);
				$user = mysqli_fetch_array($username_result);
				$_SESSION['id'] = $user['id'];
				echo '<script type="text/javascript">'; 
				echo 'alert("You have registered successfully!");'; 
				echo 'window.location.href = "index.php";';
				echo '</script>';
			}
				
		}
?>