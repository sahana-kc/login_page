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
                                     <p><b>USER LOGIN FORM </b></p>
                                     <p>Please fill in your credentials to continue </p>
                                     <form id="login">
                                     <div class="form-group">
                                         <input class="form-control" type="text" name="Enter Email id" id="user_email" placeholder="Enter Your Email" >
                                         <span id="user_email-err" class="text-danger"> </span>
                                         <br> 
                                      </div>
                                      <div class="form-group">
                                           <input class="form-control" type="password" name="Password" id="password" placeholder="Enter Your Password" >
                                           <span id="password-err" class="text-danger"> </span>
                                        </div>
                                    <div class="text-left">
                                          <input type="checkbox"> <label> Keep me signed in </label></div>
                                          <br> 
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-success" onclick="validateForm()" value="LOGIN">
                                         <br> 
                                    </div>
                                    <label> Dont't have an account? 
                                        <a href="registration.php"> Sign up now </a> 
                                     </label>
                                     <label> Forgot Password? 
                                        <a href="resetpassword.php"> Click to reset </a> 
                                        <br>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </center>

            <script>
               // $("#user_email").on('keyup',function(){
                 //   if($("#user_email").val()==''){
                   //     $("#email-err").text('Email is Required');
                    //}
                    //else {
                      //  $("#email-err").text('');
                    //}
                //});


               
               // $("#password").on('keyup',function(){
                 //   if($("#password").val()==''){
                   //     $("#password-err").text('Password is Required');
                    //}
                    //else {
                     //   $("#password-err").text('');
                    //}
                //});

                
                function printError(elemId,hintMsg) {
                           document.getElementById(elemId).innerHTML=hintMsg;
                }

                function validateForm() {
                    event.preventDefault();
                          var email = document.getElementById('user_email').value;
                          var password = document.getElementById('password').value;
                          var emailErr = passwordErr =  true;

                          //validate email
                    if(email=="") {
                                printError("user_email-err","please enter your email");
                    } else {
                          var regex = /^\S+@\S+\.\S+$/;
                        if(regex.test(email)==false) {
                        printError("user_email-err","please enter a valid email");
                    } else {
                        printError("user_email-err", "");
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

                return false;
                          console.log(user_email+password);
                }

            </script>

    </body>
</html>