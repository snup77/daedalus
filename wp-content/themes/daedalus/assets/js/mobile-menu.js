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
    // console.log("test 2");
});

closeIcon.addEventListener("click", function() {
    // console.log("test-3");
    opacityLayer.classList.remove("modal-background");
});

opacityLayer.addEventListener("click", function() {
    opacityLayer.classList.remove("modal-background");
});
