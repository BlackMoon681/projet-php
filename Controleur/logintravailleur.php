<?php  
require_once('../model/connection.php');

if(isset($_POST['username'])) {
  $uname=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT * FROM loginformt WHERE user='".$uname."' AND pass='".$password."' limit 1";
  $result=mysqli_query($link,$sql);
  if(mysqli_num_rows($result)==1){
  session_start();
  header("location: ../View/Travailleur.php");
  }
  else {                 echo "<script>alert('Please Enter Correct User Name and Password'); window.location.href='../index.php';</script>";

  exit(); 
}
}



?>