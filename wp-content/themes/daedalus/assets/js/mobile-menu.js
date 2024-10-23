// add empty div next to mobile modal
const mobileModal = document.getElementById("modal-1");
const opacityLayer = document.createElement("div");
mobileModal.parentNode.insertBefore(opacityLayer, mobileModal.nextSibling);

// get mobile open and close icons
const openIcons = document.getElementsByClassName("wp-block-navigation__responsive-container-open");
const openIcon = openIcons[0];

const closeIcons = document.getElementsByClassName("wp-block-navigation__responsive-container-close");
const closeIcon = closeIcons[0];


// trigger opacity layer on clicking open modal; remove on close when clicking close menu or opacity layer.
openIcon.addEventListener("click", function() {
    opacityLayer.classList.add("modal-background");
});

closeIcon.addEventListener("click", function() {
    opacityLayer.classList.remove("modal-background");
});

opacityLayer.addEventListener("click", function() {
    opacityLayer.classList.remove("modal-background");
});

const chevrons = document.getElementsByClassName("wp-block-navigation__submenu-icon");
const chevron = chevrons[0];

const navLink = document.querySelector(".wp-block-navigation-submenu a");



navLink.addEventListener("click", function(e) {
    e.preventDefault();

    let chevronAttribute = chevron.getAttribute("aria-expanded");
    console.log(chevronAttribute);

    chevron.setAttribute("aria-expanded", "true");

    // if (chevronAttribute !== false) {
    //     chevron.setAttribute("aria-expanded", "false");
    // } else {
    //     chevron.setAttribute("aria-expanded", "true");
    // }
});