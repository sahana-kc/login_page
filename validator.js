//defining a function to display error message
function printError(elemId,hintMsg) {
    document.getElementById(elemId).innerHTML=hintMsg;
}

//defining a function to validate form
function validateForm() {
    //retrieving the values of form elements
    var name = document.UserDetailsForm.userName.value;
    var email = document.contactForm.email.value;
    var mobile = document.contactForm.mobile.value;
    var country = document.contactForm.country.value;
    var gender = document.contactForm.gender.value;

    //Verifying Error var with a default values
    var userNameErr = emailErr = mobileErr = countryErr = genderErr = true;

    //validate name
    if(name=="") {
        printError("userNameErr","please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(name)==false) {
            printError("userNameErr","please enter a valid name");
        } else {
            printError("userNameErr", "");
            userNameErr = false;
        }
    }

    //validate email
    if(email=="") {
        printError("userNameErr","please enter your email");
    } else {
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email)==false) {
            printError("userEmailErr","please enter a valid email");
        } else {
            printError("userEmailErr", "");
            userEmailErr = false;
        }
    }

    //validate mobile
    if(mobile=="") {
        printError("userMobileErr","please enter your mobile");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile)==false) {
            printError("userMobileErr","please enter a valid mobile no");
        } else {
            printError("userMobileErr", "");
            userMobileErr = false;
        }
    }

    //validate country
    if(country=="Select") {
        printError("CountryErr","please select your country");
    } else {
            printError("countryErr", "");
            countryErr = false;
        }
    }

    //validate gender
    if(gender==""){
        printError("genderErr", "please select your gender");
    } else {
        printError("genderErr", "");
        genderErr =  false;
    }

    //prevent the form from being submitted if there are any errors
    if((nameErr || emailErr || mobileErr || countryErr || genderErr) == true) {
        return false;
    } else {
        //creating a string from input data for preview
        var dataPreview = "you've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Country: " + country + "\n" +
                          "Gender: " + gender + "\n" ;
                          if(hobbies.length){
                              dataPreview += "Hobbies:" + hobbies.join(". ");
                          }

                          //displaying input data in a dialog box before sub,itting the form
                          alert(dataPreview);
    }
}