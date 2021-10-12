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
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                            <div class="text-center">
                                <form>
                                    <a class="navbar-brand" href="#">   
                                        <img src="assets/images/logo.png" width="50" height="50" alt="LOGO">
                                     </a> <br>
                                     <p><b>USER REGISTRATION FORM </b></p>
                                     <p>Please fill in your credentials to continue </p>
                                       <div>
                                         <input class="form-control" type="text" name="Name" id="user_name" placeholder="Enter Your Name">
                                         <span id="Name-err" class="text-danger"> </span>
                                         <br> 
                                       </div>
                                       <div>
                                         <input class="form-control" type="text" name="Phone_No" id="phoneno" placeholder="Enter Your Phone No">
                                         <span id="phoneno-err" class="text-danger"> </span>
                                         <br> 
                                       </div>
                                        <div>
                                         <input class="form-control" type="text" name="Email_ID" id="user_email" placeholder="Enter Your Email">
                                         <span id="email-err" class="text-danger"> </span>
                                         <br> 
                                        </div>
                                        <div>
                                         <input class="form-control" type="password" name="Password" id="password" placeholder="Enter Your Password">
                                         <span id="password-err" class="text-danger"> </span>
                                         <br> 
                                       </div>
                                       <div>
                                          <input class="form-control" type="password" name="confirm_Password" id="confirmpassword"placeholder="Confirm Your Password">
                                          <span id="confirmpassword-err" class="text-danger"> </span>
                                           <br> 
                                       </div>
                                   
                                        <input type="submit" class="btn btn-block btn-success" onclick="validateForm()" value="SIGN UP">
                                        <br> <br>
                                   
                                    <label> Already have an account? 
                                        <a href="index.php"> login </a> 
                                     </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>

            
            <script>
                /* $("#user_name").on('keyup',function(){
                    if($("#user_name").val()==''){
                       $("#Name-err").text('Name is Required');
                 }
                    else {
                        $("#Name-err").text('');
                    }
                });
                
                $("#phoneno").on('keyup',function(){
                    if($("#phoneno").val()==''){
                        $("#phoneno-err").text('Phone No is Required');
                    }
                    else {
                        $("#phoneno-err").text('');
                    }
                });

                $("#user_email").on('keyup',function(){
                    if($("#user_email").val()==''){
                        $("#email-err").text('Email is Required');
                    }
                    else {
                        $("#email-err").text('');
                    }
                });

                $("#password").on('keyup',function(){
                    if($("#password").val()==''){
                        $("#password-err").text('Password is Required');
                    }
                    else {
                        $("#password-err").text('');
                    }
                });

                $("#confirmpassword").on('keyup',function(){
                    if($("#confirmpassword").val()==''){
                        $("#confirmpassword-err").text('Confirm Password is Required');
                    }
                    else {
                        $("#confirmpassword-err").text('');
                    }
                }); */

                 
                function printError(elemId,hintMsg) {
                           document.getElementById(elemId).innerHTML=hintMsg;
                }

                function validateForm() {
                    event.preventDefault();
                          var name = document.getElementById('user_name').value;
                          var email = document.getElementById('user_email').value;
                          var password = document.getElementById('password').value;
                          var mobile = document.getElementById('phoneno').value;
                          var confirm = document.getElementById('confirmpassword').value;

                          var emailErr = passwordErr = user_nameErr = phoneErr = confirmpasswordErr = true;



                           //validate name
                            if(name=="") {
                                printError("Name-err","please enter your name");
                            } else {
                                var regex = /^[a-zA-Z\s]+$/;
                                if(regex.test(name)==false) {
                                    printError("Name-err","please enter a valid name");
                                } else {
                                    printError("Name-err", "");
                                    user_nameEerr = false;
                                }
                            }

                             //validate mobile
                            if(mobile=="") {
                                printError("phoneno-err","please enter your mobile");
                            } else {
                                var regex = /^[1-9]\d{9}$/;
                                if(regex.test(mobile)==false) {
                                    printError("phoneno-err","please enter a valid mobile no");
                                } else {
                                    printError("phoneno-err", "");
                                    phonenoErr = false;
                                }
                            }

                            //validate email
                            if(email=="") {
                                        printError("email-err","please enter your email");
                            } else {
                                var regex = /^\S+@\S+\.\S+$/;
                                if(regex.test(email)==false) {
                                printError("email-err","please enter a valid email");
                            } else {
                                printError("email-err", "");
                                user_emailErr = false;
                            }
                        }

                        //validate password
                        if(password==""){
                        printError("password-err", "please enter your password");
                        } else {
                                printError("password-err", "");
                                passwordErr =  false;
                            }

                                //console.log(user_email+password);
                            

                           //validate password
                           if(confirm==""){
                        printError("confirmpassword-err", "please enter your password");
                        } else {
                                printError("confirmpassword-err", "");
                                confirmpasswordErr =  false;
                            }
                          return false;
                        }
                
                       
                 
                                //console.log(user_email+password);
                        
            </script>
        </body>
    </html>