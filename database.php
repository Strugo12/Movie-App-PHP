<?php 

session_start();
error_reporting(0);
 $db = mysqli_connect('localhost', 'root', '', 'movieforia');
if(!$db){
  die('Connection failed!');
}
?>