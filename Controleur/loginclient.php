<?php 
require_once('../model/connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['email']) || empty($_POST['password']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="SELECT  * from client where email='".$_POST['email']."' and password='".$_POST['password']."'";
            $result=mysqli_query($link,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['email']=$_POST['email'];
                header("location:cart/index.php?page=products");
            }
            else
            {
                echo "<script>alert('Please Enter Correct User Name and Password'); window.location.href='../index.php';</script>";
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
    
?>