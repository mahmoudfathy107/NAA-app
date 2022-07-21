const gallerySects = document.querySelectorAll(
  ".graphers .imgGallery"
);

document
  .querySelectorAll(".graphers .phooo")
  .forEach((grapher) => {
    grapher.addEventListener("click", () => {
      gallerySects.forEach((sect) => {
        if (
          sect.dataset.grapher === grapher.dataset.grapher
        ) {
          gallerySects.forEach((sec) =>
            sec.classList.add("invisible")
          );
          sect.classList.remove("invisible");
        }
      });
    });
  });
//# sourceMappingURL=toggleGraphers.js.map
