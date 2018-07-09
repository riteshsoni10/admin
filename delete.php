<?php

$id=$_GET['id'];

include("includes/connect.php");

$q="delete from student where email='$id'";

if(mysqli_query($connect,$q))
{
    echo "Data deleted successfully ";

}
else
{
echo "Data failed to delete";
}

header("location:index.php");
?>
