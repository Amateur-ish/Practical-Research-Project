const htmlCard = document.querySelector('.html-card');
const jsCard = document.querySelector('.js-card');
const cssCard= document.querySelector('.css-card');

function urlSwitchHTML() {
    window.location.href = "/pr/HTML-content/html-page-1.php";
}
function urlSwitchCSS() {
    window.location.href = "/pr/CSS-content/css-page-1.php";
}
function urlSwitchJS() {
    window.location.href = "/pr/JS-content/page-content/js-page.php";
}

console.log("hi hi hi")

htmlCard.addEventListener("click", urlSwitchHTML);
jsCard.addEventListener("click", urlSwitchJS);
cssCard.addEventListener("click", urlSwitchCSS);
