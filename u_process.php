<?php

$f=$_POST['first'];
$l=$_POST['last'];
$e=$_GET['email'];
$ph=$_POST['phone'];
$p=$_POST['password'];

include("includes/connect.php");

$h="UPDATE student SET fname='$f',lname='$l',phone='$ph',password='$p' WHERE email='$e';";
if(mysqli_query($connect,$h))
{
   header("location:index.php");
}
else
{
    echo " error occoured while updating into database";
}
?>
