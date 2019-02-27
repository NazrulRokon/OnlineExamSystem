

// Firstname Validation
$("#regFirstname").click(function(){
    $('#regFirstnameMsg').text('Should be between 4 to 15 character.');
    });
$("#regFirstname").blur(function(){
    $('#regFirstnameMsg').text('');
});
$("#regFirstname").keyup(function(){
    var firstNameLength = $(this).val().length;
    if(firstNameLength>=4 && firstNameLength <= 15)
        $('#regFirstnameMsg').text('');
    else
        $('#regFirstnameMsg').text('Should be between 4 to 15 character.');
});

// Lastname Validation
$("#regLastname").click(function(){
    $('#regLastnameMsg').text('Should be between 4 to 15 character.');
});
$("#regLastname").blur(function(){
    $('#regLastnameMsg').text('');
});
$("#regLastname").keyup(function(){
    var firstNameLength = $(this).val().length;
    if(firstNameLength>=4 && firstNameLength <= 15)
        $('#regLastnameMsg').text('');
    else
        $('#regLastnameMsg').text('Should be between 4 to 15 character.');
});

// Username Validation
$("#registerUsername").click(function(){
    $('#registerUsernameMsg').text('Should be between 4 to 15 character.');
});
$("#registerUsername").blur(function(){
    $('#registerUsernameMsg').text('');
});
$("#registerUsername").keyup(function(){
    var firstNameLength = $(this).val().length;
    if(firstNameLength>=4 && firstNameLength <= 15)
        $('#registerUsernameMsg').text('');
    else
        $('#registerUsernameMsg').text('Should be between 8 to 30 character.');
});


//Regular Expression for email Validation
function validattionRegEx(regEmail) {
    var regEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regEx.test(regEmail);
}

function validateEmail() {
    var errorMsg = $("#regEmailMsg");
    var regEmail = $("#regEmail").val();
    errorMsg.text("");

    if (!validattionRegEx(regEmail)) {
        errorMsg.text(" Invalid Email Address !");
        errorMsg.css("color", "red");
    }
}
$("#regEmail").click(function(){
    $("#regEmailMsg").text("Please enter your email address");
    $("#regEmailMsg").css("color", "black");
});

$("#regEmail").blur(function(){
    $("#regEmailMsg").text("");
});

$("#regEmail").keyup(function(){
    validateEmail()
});


//Password Validation
function validatePassword() {
    var regPass = document.getElementById("regPass");
    var regConfPass = document.getElementById("regConfPass");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
    regPass.onclick = function() {
        document.getElementById("message").style.display = "block";
    }

// When the user clicks outside of the password field, hide the message box
    regPass.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

// When the user starts to type something inside the password field
    regPass.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(regPass.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(regPass.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(regPass.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if(regPass.value.length >= 8 && regPass.value.length <= 30) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }
}


//Password Mismatch- Check--

$("#regConfPass").click(function () {
    $('#regConfPassMsg').text('Confirm your password.');
});
$("#regConfPass").blur(function () {
    $('#regConfPassMsg').text('');
});
$("#regConfPass").keyup(function () {
    $('#regPass, #regConfPass').on('keyup', function () {
        if ($('#regPass').val() == $('#regConfPass').val()) {
            $('#regConfPassMsg').html('Passwords Matched').css('color', 'green');
        } else
            $('#regConfPassMsg').html('Passwords do Not Matched').css('color', 'red');
    });
});


