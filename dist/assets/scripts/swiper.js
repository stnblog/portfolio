"use strict";

function _readOnlyError(name) { throw new TypeError("\"" + name + "\" is read-only"); }

var elmIndexSwiper = document.querySelectorAll('.js-index-slider');
var elmIndexBtnP = document.querySelectorAll('.js-slider-btnPrev');
var elmIndexBtnN = document.querySelectorAll('.js-slider-btnNext');

if (elmIndexSwiper.length > 0) {
  for (var i = 0; i < elmIndexSwiper.length; i++) {
    elmIndexSwiper[i].className += i;
    elmIndexBtnP[i].className += i;
    elmIndexBtnN[i].className += i;
    var swiper = new Swiper('.js-index-slider' + i, {
      slidesPerView: 'auto',
      grabCursor: true,
      touchEventsTarget: true,
      navigation: {
        prevEl: '.js-slider-btnPrev' + i,
        nextEl: '.js-slider-btnNext' + i
      }
    });
  }
}

var skillSwiper = null;

var createSwiper = function createSwiper() {
  var skillSwiperOption = {
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
  new Swiper('.p-skill__slider', skillSwiperOption), _readOnlyError("skillSwiper");
  skillSwiper.on('slideChange', function () {
    $body.attr("data-skillBg", skillSwiper.realIndex + 1);
  });
};

createSwiper();