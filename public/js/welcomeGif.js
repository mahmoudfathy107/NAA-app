/*
	video delays
*/

document.getElementById("gif").addEventListener(
  "ended",
  (e) => {
    // console.log("ended");
    setTimeout(() => {
      document.getElementById("gif").play();
    }, 2000);
  },
  false
);
//# sourceMappingURL=welcomeGif.js.map
