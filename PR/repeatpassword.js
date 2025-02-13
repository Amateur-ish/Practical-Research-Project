const password = document.getElementById("password");
const passwordRe = document.getElementById("passwordRe");
const buttonRegister = document.getElementById("signUp");
const pSecurOutput = document.getElementById("securityCheck");
const pRepeatOutput = document.getElementById("repeatCheck");
const specialCharacters = "~!@#$%^&*()_+{}:<>?\'/,./;'[]|" + '"';
const capitalizeCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

function repeatPassword() {
    if (password.value ===  passwordRe.value) {
        passwordRe.style.borderBottom = "1px solid #757575";
        password.style.borderBottom = "1px solid #757575";
        buttonRegister.disabled = false;
        pRepeatOutput.textContent = ""
    }
    else {
        password.style.borderBottom = "2px solid red";
        passwordRe.style.borderBottom = "2px solid red";
        pRepeatOutput.textContent = "It must be the exact same password!"
        buttonRegister.disabled = true;
    }
}

function isSpecANDCap(str) {
    let isSpec = false;
    let isCap = false;
    for(i=0; i < specialCharacters.length; i++) {
        if(str.includes(specialCharacters.charAt(i))) {
            isSpec = true;
            break;
        }
    }
    for(i=0; i < capitalizeCharacters.length; i++) {
        if(str.includes(capitalizeCharacters.charAt(i))) {
            isCap = true;
            break;
        }
    }
    if (isSpec && isCap) {
        return true;
    }
    return false;
}

function securityPassCheck() {
    const pass = password.value.split("");
    if (password.value.trim().length < 8) {
        password.style.borderBottom = "2px solid red";
        buttonRegister.disabled = true;
        pSecurOutput.textContent = "Passsword must require 8 characters (White spaces are not counted.)"
        return;
    }
    if (!isSpecANDCap(pass)) {
        password.style.borderBottom = "2px solid red";
        buttonRegister.disabled = true;
        pSecurOutput.textContent = "Password must contain ATLEAST one special character and one Capital letter."
        return;
    }
    passwordRe.style.borderBottom = "1px solid #757575";
    password.style.borderBottom = "1px solid #757575";
    buttonRegister.disabled = false;
    pSecurOutput.textContent = ""
}

function userNameRestr() {
    // const pass = password.value.split("")

}


password.oninput = repeatPassword;
password.oninput = securityPassCheck;
passwordRe.oninput = repeatPassword;