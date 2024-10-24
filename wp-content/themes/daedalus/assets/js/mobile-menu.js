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


// get link and button elements
const navLinks = document.querySelectorAll(".wp-block-navigation-submenu > a");

const chevrons = document.getElementsByClassName("wp-block-navigation__submenu-icon");
const chevron = chevrons[0];

console.log(navLinks);

// listen for click event on submenu link and open-close menu
navLinks[0].addEventListener("click", function(e) {
    e.preventDefault();

    let chevronAttribute = chevron.getAttribute("aria-expanded");

    if (chevronAttribute === "false") {
        chevron.setAttribute("aria-expanded", "true");
    }
    
    if (chevronAttribute === "true") {
        chevron.setAttribute("aria-expanded", "false");
    }
});

// listen for click event on chevron and open-close menu. added because of bug; not sure why this fixes the bug but it does :)
chevron.addEventListener("click", function(e) {
    e.stopPropagation();

    let chevronAttribute2 = chevron.getAttribute("aria-expanded");

    if (chevronAttribute2 === "false") {
        chevron.setAttribute("aria-expanded", "true");
    }
    
    if (chevronAttribute2 === "true") {
        chevron.setAttribute("aria-expanded", "false");
    }
}, true);