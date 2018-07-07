<?php
include("includes/connect.php");
$hs = "select * from student";

$res = mysqli_query($connect, $hs);
?>
<!Doctype HTML>
<html>
    <head> 
        <title> 
            Admin Panel
        </title
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            td{
                text-align: center;
                color: #ffffff;
                background-color: #ff951e;
                    
                    
            }
            td:hover{
                background-color: #09f606;
            }
            
            th{
                text-align:  center;
                color: #0a00ff;
            }
            body{
                
            }
        </style>
    </head>
    <body>
        <div class="container">

            <div class="row">
                <h1 style="text-align: center">
                    Details
                </h1>
            </div>
             <div class="pull-right" style="margin-right:5%;">
                 <a href="insert.html">
                     <i class="glyphicon glyphicon-plus" style="color:#ff000a;">
                         
                     </i>
                      Add a User
                 </a>
             </div> 
                <div class="col-md-2">

                </div>  
                <div class="col-md-8">
                    <table width="100%" border="1" >
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile No.</th>
                            <th>Password</th>
                            <th>Action</th>

                        </tr>
                        <?php
                        while ($data = mysqli_fetch_assoc($res)) {
                            ?>
                            <tr>
                             <td><?php echo $data['fname']; ?></td> 
                                <td><?php echo $data['lname']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['phone']; ?></td>
                                <td><?php echo $data['password']; ?></td>
                                <td><a href="edit.php?id=<?php echo $data['email']; ?>" title="Edit"><i class="glyphicon glyphicon-pencil" style="color: #000000"></i></a>|<a href="delete.php?id=<?php echo $data['email']; ?> " title="Delete"><i class="glyphicon glyphicon-remove"></i></a>
                            </tr>	
                            <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="col-md-2">

                </div> 
            </div>
            <!--//inside data the name of column sholud be same as from database column-->
        </div>
    </div>

</body>

</html>