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



const modalSwiper = new Swiper('.js-modal-slider', {
  slidesPerView: 'auto',
  centeredSlides: true,
  effect: 'fade',
  navigation: {
    prevEl: '.js-modal--btnPrev',
    nextEl: '.js-modal--btnNext',
  },
  pagination: {
    el: '.js-modal--pagi',
    type: 'fraction',
		renderFraction: function (currentClass, totalClass) {
			return 'Image ' + ' <span class="' + currentClass + '"></span>' + ' of ' + '<span class="' + totalClass + '"></span>';
		}
  },
});

$('.js-modal-open').on('click', function () {
  var index = $(this).index();
  modalSwiper.slideTo(index);
  $('.l-modal').fadeIn();
   $('body').addClass('is-lock');
})


$('.js-modal-close').on('click', function () {


  $('.l-modal').fadeOut();
  $('body').removeClass('is-lock');

});
