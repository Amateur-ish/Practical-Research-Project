const desigModule = document.getElementById("desig-autom");
const moduleTitle = document.getElementById("moduleTitle");

function desigAutomatic() {
    let str = moduleTitle.value.toLowerCase();
    let result = str.replace(/ /g, "-");
    desigModule.value = result;
    console.log(result);
}

moduleTitle.oninput = desigAutomatic;
