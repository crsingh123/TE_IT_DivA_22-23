<?php

session_start();

//codeeeeeeeeeee

$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$conn=mysqli_connect("localhost","root","","project");

$query="insert into contact values('$email','$phone','$subject','$message')";

$result=mysqli_query($conn,$query);

if($result)
{
    
    echo "Your Query has been sent successfully";
    echo "</br>";
    echo "We will contact you soon!";

}
else
{
 header('location:contactform.php');
 
} 
?> 
