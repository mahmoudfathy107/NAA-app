const rctButton = document.querySelectorAll(".specBtn.rct");

rctButton.forEach((react) => {
  react.addEventListener("click", (e) => {
    react.previousElementSibling.classList.toggle("show");

    Array.from(
      react.previousElementSibling.children
    ).forEach((circle) => {
      circle.addEventListener("click", () => {
        react.previousElementSibling.classList.remove(
          "show"
        );
      });
    });
  });
});
//# sourceMappingURL=reactBtns.js.map
