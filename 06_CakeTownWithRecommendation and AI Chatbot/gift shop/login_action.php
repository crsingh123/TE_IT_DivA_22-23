<?php

session_start();

$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","","project");
$query="select * from register where username='$username' || password='$password'";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
 $_SESSION['username']="$username";
 $_SESSION["login"] = "OK";
 header('location:indexnwer.php');
}
else
{
 header('location:reglogin.php');
}

?>