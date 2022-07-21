const publishIcons = document.querySelectorAll(
    ".pubSrvs .srvs .srv"
  ),
  pubSections = document.querySelectorAll(
    "section.togglerContent"
  );

//   main functionality
publishIcons.forEach((icon) =>
  icon.addEventListener("click", () => {
    const activeSection = getActiveSect(icon);

    if (activeSection) {
      hideAll();
      activeSection.classList.remove("invisible");
    }
  })
);

// untility functions

const hideAll = () => {
  pubSections.forEach((sect) =>
    sect.classList.add("invisible")
  );
};

const getActiveSect = (icon) => {
  return document.querySelector(
    `section.togglerContent[data-section="${icon.dataset.section}"]`
  );
};
//# sourceMappingURL=pubTogger.js.map
