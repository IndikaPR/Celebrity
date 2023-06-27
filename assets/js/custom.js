jQuery(document).ready(function ($) {
  Fancybox.bind("[data-fancybox]");

  new Swiper("#optionsSwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    slidesPerView: 1,
    speed: 500,
    preventClicksPropagation: false,
    navigation: {
      nextEl: ".testimonials-next",
      prevEl: ".testimonials-prev",
    },
  });

  const testimonialsSwiper = new Swiper(".testimonials-section .testimonial", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".testimonials-section .swiper-pagination",
      clickable: true,
    },
  });

  const nameSwiper = new Swiper(".testimonials-section .name-swiper", {
    // direction: "horizontal",
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".testimonials-section .swiper-pagination",
      clickable: true,
    },
  });

  testimonialsSwiper.controller.control = nameSwiper;
  nameSwiper.controller.control = testimonialsSwiper;

  // Sticky Menu
  let windowWidth = $(window).width();
  if (windowWidth >= 1025) {
    $(window).scroll(function (event) {
      stickyMenu();
    });
    stickyMenu();
  }

  function stickyMenu() {
    let scroll = $(window).scrollTop();
    if (scroll > 0) {
      if (!$("header.main-header").hasClass("sticky")) {
        $("header.main-header").addClass("sticky");
      }
    } else {
      $("header.main-header").removeClass("sticky");
    }
  }
});
