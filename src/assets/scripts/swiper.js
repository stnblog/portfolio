"use strict";

const elmIndexSwiper = document.querySelectorAll('.js-index-slider');
const elmIndexBtnP = document.querySelectorAll('.js-slider-btnPrev');
const elmIndexBtnN = document.querySelectorAll('.js-slider-btnNext');

if (elmIndexSwiper.length > 0) {
  for (let i = 0; i < elmIndexSwiper.length; i++) {

    elmIndexSwiper[i].className += i;

    elmIndexBtnP[i].className += i;
    elmIndexBtnN[i].className += i;

    var swiper = new Swiper('.js-index-slider' + i, {
      slidesPerView: 'auto',
      grabCursor: true,
      touchEventsTarget: true,
      navigation: {
        prevEl: '.js-slider-btnPrev' + i,
        nextEl: '.js-slider-btnNext' + i,
      },

    });
  }
}

const skillSwiper = null;
const createSwiper = function createSwiper() {

  const skillSwiperOption = {
    slidesPerView: 1,
    loop: true,
    loopAdditionalSlides: 1,
    loopPreventsSlide: false,
    grabCursor: true,
    touchEventsTarget: true,
    spaceBetween: 20,
    centeredSlides: true,
    scrollbar: {
      el: '.p-skill__scrollbar--slide',
      hide: false,
      draggable: true,
      grabCursor: true
    },
    breakpoints: {
      767: {
        slidesPerView: 2
      },
      999: {
        slidesPerView: 3
      }
    },
    wrapperClass: "p-skill__slideWrap",
    slideClass: "p-skill__slide",
    slideActiveClass: "p-skill__slide--active"
  };
  skillSwiper = new Swiper('.p-skill__slider', skillSwiperOption);
  skillSwiper.on('slideChange', function () {
    $body.attr("data-skillBg", skillSwiper.realIndex + 1);
  });

};

createSwiper();
