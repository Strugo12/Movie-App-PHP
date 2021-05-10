<?php   
$connect = mysqli_connect("localhost", "root", "", "movieforia"); 
if(isset($_POST["user_name"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["user_name"]);
 $query = "SELECT * FROM users WHERE username = '".$username."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}

if(isset($_POST["user_mail"]))
{
 $mail = mysqli_real_escape_string($connect, $_POST["user_mail"]);
 $query_mail = "SELECT * FROM users WHERE mail = '".$mail."'";
 $result_mail = mysqli_query($connect, $query_mail);
 echo mysqli_num_rows($result_mail);
}

if(isset($_POST["pw_username"]))
{
    $username = mysqli_real_escape_string($connect, $_POST["pw_username"]);
    $question= "SELECT question FROM users WHERE username = '".$username."'";
    $result = mysqli_query($connect, $question);
    $row = mysqli_fetch_array($result);
    if($row){
    $done=$row['question'];
    echo $done;
    }
    else{
        echo '';
    }
}
?>