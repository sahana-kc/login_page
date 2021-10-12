<!DOCTYPE html>
<html lang="en">
    <head> 
        <title> LOGIN PAGE </title>
        <?php include "includes\header.php";?>
        <style>
             .navbar-nav{
                flex-direction: row;
            }
            .nav-item{
                padding-left: 10px !important
            }
         </style>

    </head>

    <body>
        <header> 
        <?php include "includes\landing_nav.php";?>
        </header> 
           

            <center>
                <div class="col-sm-12 col-sm-12 col-lg-4">
                    <div class="card" style="width: 25rem;">
                        <div class="card-body">
                            <div class="text-center">
                                <form>
                                    <a class="navbar-brand" href="#">   
                                        <img src="assets/images/logo.png" width="50" height="50" alt="LOGO">
                                     </a> <br>
                                     <p><b> PASSWORD RESET </b></p>
                                     <p>Please provide your email, we will send the link for password reset </p>
                                     <div class="form-group">
                                          <input class="form-control" type="text" name="Email_ID" id="email_id" placeholder="Enter Your Email">
                                          <span id="email_id-err" class="text-danger"> </span>
                                          <br>
                                     </div>
                                    <input type="submit" class="btn btn-block btn-success" value="RESET PASSWORD">
                                    <br> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>

            
            <script>
                $("#email_id").on('keyup',function(){
                    if($("#email_id").val()==''){
                        $("#email_id-err").text('Email is Required');
                    }
                    else {
                        $("#email_id-err").text('');
                    }
                });
            </script>
        </body>
    </html>