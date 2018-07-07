<?php

$id=$_GET['email'];

include("includes/connect.php");

$q="delete from student where email=$id";

if(mysqli_query($connect,$q))
{
    echo "Data deleted successfully ";
}
?>