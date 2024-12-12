const password = document.getElementById("password");
const passwordRe = document.getElementById("passwordRe");
const buttonRegister = document.getElementById("signUp");

function repeatPassword() {
    if (password.value ===  passwordRe.value) {
        passwordRe.style.borderBottom = "1px solid #757575";
        password.style.borderBottom = "1px solid #757575";
        buttonRegister.disabled = false;
    }
    else {
        password.style.borderBottom = "2px solid red";
        passwordRe.style.borderBottom = "2px solid red";
        buttonRegister.disabled = true;
    }
}

password.onblur = repeatPassword;
passwordRe.onblur = repeatPassword;