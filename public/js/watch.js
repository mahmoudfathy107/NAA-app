const params = new Proxy(
  new URLSearchParams(window.location.search),
  {
    get: (searchParams, prop) => searchParams.get(prop),
  }
);
// Get the value of "some_key" in eg "https://example.com/?some_key=some_value"
let progName = params.progName;
let ep = params.ep;

/*
  set active episodes
*/
document
  .querySelector(`.vidSect .vids .box:nth-child(${ep})`)
  .classList.add("active");

/*
  set video background
*/

let vidBG;

switch (progName) {
  case "Alam-Mwazy":
  case "Crime-Fantasy":
  case "Hakmt-El Mahkma":
    vidBG = "drama video BG-01";
    break;

  case "Kids-Songs":
  case "Ghita":
    vidBG = "kids-01";
    break;

  case "Nazly-wel-mwahb":
    vidBG = "talent video BG-01";
    break;

  case "ElRawy-Family":
    vidBG = "islamophopia-01";
    break;

  case "RoQeta":
    vidBG = "fashion-01";
    break;

  case "Khaltbeta":
    vidBG = "video BG-01";
    break;

  default:
    vidBG = "video BG-01";
    break;
}

document.querySelector(
  "body > section"
).style.cssText = `background-image: url("../assets/images/watch/${vidBG}.webp")`;

// utility functions

const setEngName = () => {
  document.querySelector(
    '[data-ref="progName"]'
  ).textContent = progName;
};

const setArName = () => {
  let textName;

  switch (progName) {
    case "Alam-Mwazy":
      textName = "عالم موازى";
      break;

    case "Crime-Fantasy":
      textName = "فانتازيا الجريمة";
      break;

    case "Hakmt-El Mahkma":
      textName = "حكمت المحكمة";
      break;

    case "Kids-Songs":
      textName = "أغانى الاطفال";
      break;

    case "Ghita":
      textName = "غتيا";
      break;

    case "Nazly-wel-mwahb":
      textName = "ناظلى و المواهب";
      break;

    case "ElRawy-Family":
      textName = "عائلة الراوى";
      break;

    case "RoQeta":
      textName = "روقتيا";
      break;

    case "Khaltbeta":
      textName = "خلطبيتا بالصلصة";
      break;
  }

  console.log(textName);

  document.querySelector(
    '[data-ref="progName"]'
  ).textContent = textName;
};

/*
	set video info
*/

if (localStorage.getItem("lang") === "ar") setArName();
else setEngName();

document.querySelector('[data-ref="ep"]').textContent = ep;

document.getElementById("en").onclick = setEngName;
document.getElementById("ar").onclick = setArName;
//# sourceMappingURL=watch.js.map
