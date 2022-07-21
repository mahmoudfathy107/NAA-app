// channels hover effect

const getChNameOnHover = (e) => {
  const title = document.querySelector(
    ".content h2.center[data-text]"
  );

  title.textContent = e.target.alt;

  if (localStorage.getItem("lang") === "ar")
    title.textContent = e.target.dataset.text;
};

document
  .querySelector(".channelSlider .container .sliderItems")
  .addEventListener("mouseover", getChNameOnHover);
//# sourceMappingURL=channels.js.map
