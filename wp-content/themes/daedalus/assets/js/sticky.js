const header = document.querySelector(".page-header");
const toggleClass = "sticky-styles";
window.addEventListener("scroll", () => {
  const currentScroll = window.scrollY;
  if (currentScroll > 75) {
    header.classList.add(toggleClass);
  } else {
    header.classList.remove(toggleClass);
  }
});