document.addEventListener("contextmenu", (e) => {
  e.preventDefault();
  const contextMenu = document.getElementById("ctxmenu");

  // set menu coordinates
  menuCoordinates(contextMenu, e);

  // prevent duplication
  contextMenu.classList.add("visible");
});

const createHtmlMenu = () => {
  let menu = document.createElement("div");
  menu.id = "ctxmenu";

  if (localStorage.getItem("lang") === "en")
    menu.innerHTML =
      "<div><a class='item'>Scroll Top</a><a class='item'>Scroll Bottom</a></div><div><a href='/' class='item'>Home Page</a><a href='../_channels.html' class='item'>NAA Channels</a><a href='../_shows.html' class='item'>Shows Page</a><a href='../_offices.html' class='item'>Offices Page</a><a href='../_contactUs.html' class='item'>Contact Us</a><a href='../_aboutUs.html' class='item'>About Us</a><a href='../_donate.html' class='item'>Donate</a></div>";

  if (localStorage.getItem("lang") === "ar")
    menu.innerHTML =
      "<div><a class='item'>أذهب لأعلى</a><a class='item'>أذهب لأسفل</a></div><div><a href='/' class='item'>الصفحة الرئيسية</a><a href='../_channels.html' class='item'>NAA قنوات</a><a href='../_shows.html' class='item'>NAA برامج</a><a href='../_offices.html' class='item'>NAA مكتبات</a><a href='../_contactUs.html' class='item'>تواصل معنا</a><a href='../_aboutUs.html' class='item'>عنا</a><a href='../_donate.html' class='item'>تبرع</a></div>";

  document.body.appendChild(menu);

  // fire scrolling utility
  scrollingMenu(menu);

  menuEvents(menu);
};

const menuCoordinates = async (contextMenu, e) => {
  const { clientX: mouseX, clientY: mouseY } = e;
  contextMenu.style.top = `${mouseY}px`;
  contextMenu.style.left = `${mouseX}px`;
};

// copywriting production
document.addEventListener("copy", (e) => {
  navigator.clipboard.writeText(" ");
  e.preventDefault();
});

// scrolling top-bottom
const scrollingMenu = (menu) => {
  const scrollBtns = document.querySelectorAll(
    "#ctxmenu div:first-child a.item"
  );

  scrollBtns.forEach((a) => {
    a.addEventListener("click", (e) => {
      if (e.target === scrollBtns[0])
        window.scrollTo({ top: 0, behavior: "smooth" });
      else if (e.target === scrollBtns[1])
        window.scrollTo(0, document.body.scrollHeight);

      menu.classList.remove("visible");
    });
  });
};

const menuEvents = (menu) => {
  document.addEventListener("click", (e) => {
    document
      .querySelectorAll("#ctxmenu div")
      .forEach((div) => {
        if (e.target !== div)
          menu.classList.remove("visible");
      });
  });
};

createHtmlMenu();

/*
	general unitilies
*/

// abd-- talents toggle show
if (document.querySelector(".abdsect h4.specBtn"))
  document
    .querySelector(".abdsect h4.specBtn")
    .addEventListener("click", () => {
      document
        .querySelector(".abdsect .abdContent")
        .classList.toggle("invisible");
    });

// laoading page

document.addEventListener("DOMContentLoaded", () => {
  const loader = document.createElement("img"),
    loaderContainer = document.createElement("div"),
    title = document.createElement("h1"),
    hourglass = document.createElement("div");

  loaderContainer.style.cssText = `  height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center; background-color: var(--bg-clr); position: fixed;top: 0%;
  left: 0%;
  z-index: 100;`;

  loader.src = `../assets/images/all_pages/logo.webp`;
  loader.style.cssText = `
	max-width: min(15vw, 150px);
	aspect-ratio: 1.2;
  `;

  (title.textContent = `NAA World`),
    (title.style.cssText = `text-align: center`);

  hourglass.classList.add("lds-hourglass");

  document.body.style = `overflow: hidden`;

  loaderContainer.append(loader, title, hourglass);
  document.body.appendChild(loaderContainer);

  setTimeout(() => {
    document.body.style = `overflow: unset`;
    loaderContainer.remove();
  }, 3000);
});
//# sourceMappingURL=contextMenu.js.map
