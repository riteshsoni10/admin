<?php

$first=$_POST['first'];
$last=$_POST['last'];
$em=$_POST['email'];
$ph=$_POST['phone'];
$pd=$_POST['password'];
$pd2=$_POST['password2'];

include("includes/connect.php");
                         if($pd==$pd2)
                                  {
                                  $val="insert into student values('$first','$last','$em','$ph','$pd')";
                                  }
                                 else
                                 {
                                
                                   header("location:insert.html");
                                   
                                 }
                             
                     
if(mysqli_query($connect,$val))
{
echo "Data entered successfully ";
}
else
 { echo mysqli_error();
	echo "Data failed to insert!!"; 
}

 header("location:index.php");




?>
