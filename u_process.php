<?php

$f=$_POST['first'];
$l=$_POST['last'];
$e=$_POST['email'];
$ph=$_POST['phone'];
$p=$_POST['password'];

include("includes/connect.php");

$heart="UPDATE student SET fname='$f',lname='$l',email='$e',phone='$ph',password='$p' WHERE email=$e";

if(mysqli_query($connect,$heart))
{
    header("location:admin.php");
}
else
{
    echo "some error occoured";
}
?>