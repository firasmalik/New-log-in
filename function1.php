<?php
session_start();
if(isset($_POST['submit']))
{
  //die(var_dump($_POST));
  $username= $_POST['uid'];
  $password = $_POST['pwd'];
  $_SESSION ['username']=$username;
  $_SESSION ['password']=$password;



   if(isset($_SESSION['username']) && $_SESSION['password']==true)
    {
     header("Location:logsuccess.php");
    }
//empty fields
    if(empty($username) || empty($password))
    {
     header ("Location:index1.php");
    }

}
?>