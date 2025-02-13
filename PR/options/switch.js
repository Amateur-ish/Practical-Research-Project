const cardGroup = document.querySelector('.mvment');
const arrowLeft = document.getElementById("arrowLeft");
const arrowRight = document.getElementById("arrowRight");
let currentPos = 0;


function slideCardLeft() {
    currentPos += 500
    cardGroup.style.left = currentPos + "px";
}

function slideCardRight() {
    currentPos -= 500
    console.log("TEST")
    cardGroup.style.left = currentPos +"px";
}

console.log("hi hi hi")

/* htmlCard.addEventListener("click", urlSwitchHTML);
jsCard.addEventListener("click", urlSwitchJS);
cssCard.addEventListener("click", urlSwitchCSS); */
arrowLeft.addEventListener("click", slideCardLeft);
arrowRight.addEventListener("click", slideCardRight);