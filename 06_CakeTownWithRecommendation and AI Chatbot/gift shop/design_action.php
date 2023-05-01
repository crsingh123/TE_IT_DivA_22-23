<?php

session_start();
$slct1=$_POST['slct1'];
$slct2=$_POST['slct2'];
$slct3=$_POST['slct3'];

$conn=mysqli_connect("localhost","root","","project");

$query="insert into design values('$slct1','$slct2','$slct3')";

$result=mysqli_query($conn,$query);

if($result)
{

 header('location:thanks.php');

}
else
{
 echo "record already exists";
} 


?>