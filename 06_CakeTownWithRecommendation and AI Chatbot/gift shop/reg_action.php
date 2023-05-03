<?php

session_start();

$username=$_POST['username'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$confirmp=$_POST['confirmp'];

$conn=mysqli_connect("localhost","root","","project");

$query="insert into register values('$username','$email','$address','$phone','$password','$confirmp')";

$select_query="select * from register where username='$name' || email='$email'";

$result=mysqli_query($conn,$select_query);

$num=mysqli_num_rows($result);
if($num == 0)
{
    mysqli_query($conn,$query);
    header('location:reglogin.php');

}
else
{
    header('location:reglogin.php');
} 

?>