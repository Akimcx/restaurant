const bestSellers = document.querySelectorAll(".figure-wrap.bg-image");

bestSellers.forEach((bestSeller) => {
  const bg = bestSeller.getAttribute("data-image-src");
  css(bestSeller, {
    background: `url(${bg}) center center / cover no-repeat`,
  });
  //   bestSeller.style.background = background;
  //   console.log(bestSeller.style);
});

function css(element, style) {
  for (const property in style) element.style[property] = style[property];
}

const links = document.querySelectorAll(".header__navbar-link");
links.forEach((link) => {
  link.addEventListener("click", (e) => {
    if (e.target === link) return;
    console.log(link);
    const selected = document.querySelector(".header__navbar-link.selected");
    selected.classList.remove("selected");
    link.classList.add(selected);
  });
});
