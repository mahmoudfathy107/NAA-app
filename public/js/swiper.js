var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  loop: false,
  slidesPerView: "auto",
  spaceBetween: -10,
  initialSlide: 1,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
  //   direction: "vertical",
});

var swiper = new Swiper(".narrowSwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 150,
    modifier: 1,
    slideShadows: true,
  },
  loop: false,
  slidesPerView: "auto",
  spaceBetween: -50,
  initialSlide: 2,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
});

var swiper = new Swiper(".narrowSwiper2", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 150,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: false,
  slidesPerView: "auto",
  spaceBetween: -70,
  initialSlide: 0,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
});

var swiper = new Swiper(".narrowSwiper3", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 250,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: false,
  slidesPerView: "auto",
  spaceBetween: -100,
  initialSlide: 4,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
});

var swiper = new Swiper(".pubSwiper", {
  effect: "fade",
  fadeEffect: { crossFade: true },
  autoHeight: true,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  //   grabCursor: true,
  centeredSlides: true,
  navigation: {
    nextEl: ".swiper-button-next-unique",
    prevEl: ".swiper-button-prev-unique",
  },
});

var swiper = new Swiper(".wideSwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 250,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: false,
  slidesPerView: "auto",
  spaceBetween: 5,
  initialSlide: 4,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
});
//# sourceMappingURL=swiper.js.map
