<?php
session_start();
if(isset($_POST['submit']))
{
  die(var_dump($_POST));
  $username= $_POST['uid'];
  $password = $_POST['pwd'];
  $_SESSION ['username']="uid";
  $_SESSION ['password']="password";
}


if(isset($_SESSION['username']) && $_SESSION['password']==true)
 {
     header("Location:logsuccess.php");
 }
  if (isset($POST['uid'])&&isset($_POST['pwd']))
   {
   if ($_POST['uid']==$username && $_POST['pwd']==$password)
   {
    $_SESSION['username']=true;
    $_SESSION['password']=true;
    header("Location:logsuccess.php");
   }

 }

 
/*
if(empty($username) && empty($password))
   {
     header ("Location:index1.php");
   }
*/

?>