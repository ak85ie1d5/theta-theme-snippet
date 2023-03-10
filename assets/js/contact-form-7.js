// Show or hide fields depending on the selected object
function toogle() {
    if (inputObject.options.selectedIndex === 2) {
        for (let i = 0; i < inputComplement.length; i++) {
            inputComplement[i].style.display = "block"
        }
    } else {
        for (let i = 0; i < inputComplement.length; i++) {
            inputComplement[i].style.display = "none"
        }
    }
}

let inputObject = document.getElementById("menu-854");
let inputComplement = document.getElementsByClassName("display-on-menu-854-2")

document.addEventListener("DOMContentLoaded", toogle, false);
inputObject.addEventListener('click', toogle, false);
