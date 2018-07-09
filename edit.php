<?php
$email = $_GET['id'];
include("includes/connect.php");
$cast = "select * from student where email='$email'";
$res = mysqli_query($connect, $cast);




$data = mysqli_fetch_array($res);
?>
<!doctype HTML>
<html>
    <head>
        <title>
            Edit
        </title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container"> 
            <div class="row">
                <h1 class="text-center" >
                    Update Phase
                </h1>

            </div>
            <form method="POST" action="u_process.php?email=<?php echo $email;?> ">
                 <div class="form-group">
                    <label  class="col-md-4 control-label"> First Name :</label>
                    <div class="col-md-8">
                        <input type="text" name="first" value="<?php echo $data['fname']; ?>" class="form-control" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Last Name :</label>
                    <div class="col-md-8">
                        <input type="text" name="last" value="<?php echo $data['lname']; ?>" class="form-control" required/>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-md-4 control-label"> Mobile No:</label>
                    <div class="col-md-8">
                        <input type="number" name="phone" value="<?php echo $data['phone']; ?>" class="form-control" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">  Password :</label>
                    <div class="col-md-8">
                        <input type="password" name="password" value="<?php echo $data['password']; ?>"class="form-control"/>                            
                    </div>
                </div>                        
                
                <div class="form-group">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4"> 
                        <input type="submit" name="Update" value="Update" class="btn btn-danger form-control"/>
                    </div>
                </div> 


            </form>

        </div>
    </body>
</html>
