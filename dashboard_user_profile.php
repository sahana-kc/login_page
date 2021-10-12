<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION["loggedin"]!==true){
    header("location:index.php");
    exit;
}

if(isset($_SESSION['id']) && !empty(trim($_SESSION['id']))){
    require_once "config.php";

    $sql ="SELECT * FROM users WHERE id = ?";

    if($statement = mysqli_prepare($connection,$sql)){
        mysqli_stmt_bind_param($statement,"i",$id);
        $id=$_SESSION['id'];

        if(mysqli_stmt_execute($statement)){
            $output = mysqli_stmt_get_result($statement);
            if(mysqli_num_rows($output)==1){
                $row = mysqli_fetch_array($output,MYSQLI_ASSOC);
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone_no'];
            }else{
                echo "Couldn't fetch information from the DB";
            }
        }else{
            echo "Something Went wrong. Please try again Later";
        }
    }
    mysqli_stmt_close($statement);
    mysqli_close($connection);
}else{
    echo "Id is missing in the session";
    exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>Login Page</title>
        <?php include "includes\header.php"; ?> 
        <style>
            .login-section-logo{
                padding-top: 20px !important;
                padding-bottom: 20px !important;
            }

            .top-spacing{
                padding-top: 10px !important;
            }

            .navbar-nav {
                flex-direction: row;
            }
            main{
                left: 0;
                display: block !important;
                right: 0;
                margin-left: 250px;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <header>
            <?php include "includes\dashboard_top_nav.php"; ?>
            <?php include "includes\dashboard_side_nav.php"; ?>
        </header>
       <main class="alignment">
            <div class="container">                
                <h5>User Profile</h5>
                <?php 
                   
                    if(isset($_SESSION['success_status'])&& $_SESSION['success_status']==true){
                        echo "<div id='session-alert' class='alert alert-success'>Updated Successfully</div>";
                    }else if(isset($_SESSION['success_status'])&& $_SESSION['success_status']==false || isset($_SESSION['update_status']) && $_SESSION['update_status']==0){
                        echo "<div id='session-alert' class='alert alert-danger'>Something Went Wrong</div>";
                    }
                
                ?>
                <form method="post" action="server.php">
                    <input type="hidden" name="operation_type" value="update_profile">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['id'] ?>">
                    <div class="form-group top-spacing">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="user_name">Your Name</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                               <input class="form-control" type="text" name="name" id="user_name" placeholder="Enter Your Name" value="<?php echo isset($name)?$name:''?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group top-spacing">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="user_phone_no">Your Phone No.</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input class="form-control" type="text" name="phone_no" id="user_phone_no" placeholder="Enter Your Phone No." value="<?php echo isset($phone)?$phone:''?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group top-spacing">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="user_email">Your Email</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input class="form-control" type="text" name="email" id="user_email" placeholder="Enter Your Email" value="<?php echo isset($email)?$email:''?>">
                            </div>
                        </div>
                       
                    </div>
                    <div class="form-group top-spacing">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="user_password">Enter a Password</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input  class="form-control" type="password" name="password" id="user_password" placeholder="Enter Your Password">
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group top-spacing">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <label for="user_password_confirmation">Confirm the Entered Password</label>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <input  class="form-control" type="password" name="password_confirm" id="user_password_confirmation" placeholder="Confirm Your Password">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-1 col-sm-12">
                            <div class="form-group">
                                <input type="submit" class="btn btn-info" style="background-color: #2221F7 !important;" value="Update">
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-12">
                            <div class="form-group">
                                <a href="#" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <br>
                
                    
                </form>
            </div>
       </main>
       <?php include "includes\\footer.php"; ?>
       <script>
            $(document).ready(function(){
                setTimeout(function(){
                    $("#session-alert").alert("close")
                },5000);
            });
           
       </script>
    </body>
</html>