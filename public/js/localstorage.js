document.querySelectorAll("a[data-lang]").forEach((a) => {
  a.addEventListener("click", () => {
    window.localStorage.setItem("lang", a.id);
  });
});

if (localStorage.getItem("lang") === "ar")
  window.addEventListener("load", () => {
    Changer(currentLang);
  });

/*
  books shower
*/

document.querySelectorAll(".bookCover").forEach((book) => {
  book.addEventListener("click", () => {
    console.log(book.dataset.book);

    const url = book.dataset.book;

    createDialog(`${url}#toolbar=0`, "book1");

    document.querySelector("dialog").showModal();
  });
});

// helper functions
const attachCloseDialogEvent = (dialog, btn) => {
  document.addEventListener("click", (e) => {
    if (e.target === btn) {
      dialog.remove();
    }
  });
};

// main functions

const createDialog = (url, name) => {
  const dialog = document.createElement("dialog"),
    button = document.createElement("button"),
    book = document.createElement("iframe");

  button.textContent = "x";

  book.setAttribute("src", url),
    book.setAttribute("alt", name),
    book.classList.add("img-res"),
    book.setAttribute("loading", "lazy"),
    book.setAttribute("scrolling", "auto");

  dialog.append(button, book);

  document.body.appendChild(dialog);

  attachCloseDialogEvent(dialog, button);
};
//# sourceMappingURL=localstorage.js.map
