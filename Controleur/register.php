<?php
if (isset($_POST['name'])) {

$name = $_POST['name'];

$email = $_POST['email'];
$password = $_POST['password'];
$encrypted_pwd = ($password);


require_once('../model/connection.php');
   
$sql = "INSERT INTO `client` (`name`,`email`,`password`)
 VALUES ('$name','$email','$encrypted_pwd');";
 mysqli_query($link,$sql); 
 header("location:../View/loginclient.php");}
?>