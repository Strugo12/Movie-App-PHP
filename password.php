<?php 
    include("database.php");
    $mail=$_POST['mail'];
    $username=$_POST['password_username'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $answer=$_POST['question'];

$sql_username = "SELECT * FROM users WHERE username='$username'";
$sql_mail = "SELECT * FROM users WHERE mail='$mail'";
$res_username = mysqli_query($db, $sql_username);
$res_mail = mysqli_query($db, $sql_mail);

if($password1!=$password2){
    echo '<script type="text/javascript">'; 
    echo 'alert("Passwords are not the same");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
  }
  else if (mysqli_num_rows($res_username) == 0) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Wrong username");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';		
    }
    else if (mysqli_num_rows($res_mail) == 0) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Wrong mail adress");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';		
    }
    else{
    $sql_question = "SELECT * FROM users WHERE username='$username' AND answer='$answer'";
    $res_question = mysqli_query($db, $sql_question);
    if (mysqli_num_rows($res_question) == 0) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Wrong answer to the security question");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';	
        }
        else {
            $sql= "UPDATE users SET password='$password1' WHERE username='$username'";
            if ($db->query($sql) === TRUE) {
              echo '<script type="text/javascript">'; 
              echo 'alert("Successfully changed passsword");'; 
              echo 'window.location.href = "index.php";';
              echo '</script>';	
              } 
    }
}
?>