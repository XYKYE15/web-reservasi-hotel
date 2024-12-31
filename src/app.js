// fluid section swiper
var swiper = new Swiper(".swiper-container", {
  slidesPerView: 1,
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
});

// testimonial swiper
var swiper = new Swiper(".swiper-testimonial", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  SlidePerView: 3,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
  autoplay: {
    pauseOnMouseEnter: true,
    pauseOnFocus: true,

    delay: 2500,
    disableOnInteraction: false,
  },
});
