'use strict';

var $body = $("body");

$(document).ready(function () {

  $("a[href*='http://']:not([href*='" + location.hostname + "']),[href*='https://']:not([href*='" + location.hostname + "'])").attr('target', '_blank').addClass('blank');


  $('a[href^="#"]').on('click', function () {
    var href = $(this).attr('href');
    var position = $(href).offset().top;
    $('html, body').animate({
      'scrollTop': position
    }, 500);
    return false;
  })

  $('.gallery-mons').isotope({
    itemSelector: '.js-filter-items',
    masonry: {
      columnWidth: '.width2'
    }
  });

  $('.js-gallery').isotope({
    itemSelector: '.js-filter-items'
  });

  var $gallery = $('.js-gallery , .gallery-mons').isotope();

  $('.js-filtering').on('click', 'li', function () {
    var filterValue = $(this).attr('data-filter');
    $gallery.isotope({
      filter: filterValue
    });
  });

  $('.js-filtering').on('change', function () {
    var filterValue = this.value;
    filterValue = filterFns[filterValue] || filterValue;
    $gallery.isotope({
      filter: filterValue
    });
  })

  var filterFns = {
    ium: function () {
      var name = $(this).find('.name').text();
      return name.match(/ium$/);
    }
  };


  $('.js-filtering').on('click', 'li', function () {
    $(this).addClass('is-active').siblings().removeClass('is-active');
  });

  $('.filters-select').on('change', function () {
    var filterValue = this.value;
    filterValue = filterFns[filterValue] || filterValue;
    $gallery.isotope({
      filter: filterValue
    });
  });

  $(function () {
    $('.p-skill__slideWrap div .p-skill__txt').matchHeight();
    $('.blog__list .blog__item .blog__body').matchHeight();
  });

});


document.addEventListener('DOMContentLoaded', function () {

  {
    const el = document.querySelectorAll('.inview');
    const els = Array.prototype.slice.call(el);

    const cb = function (entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-anim');
        } else {}
      });
    }

    const options = {
      root: null,
      rootMargin: '-20% 0px',
      threshold: 0
    };
    const io = new IntersectionObserver(cb, options);
    els.forEach(el => io.observe(el));
  }

  {
    const el = document.querySelectorAll('.js-first-view');
    const els = Array.prototype.slice.call(el);
    const header = document.getElementById('js-header');

    const options = {
      root: null,
      rootMargin: '-50% 0px',
      threshold: 0
    };
    const observer = new IntersectionObserver(callback, options);
    els.forEach((el) => {
      observer.observe(el);
    });

    function callback(entries) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          header.classList.add('is-active');
        } else {
          header.classList.remove('is-active');
        }
      });
    }

  }

  {
    const el = document.querySelectorAll('.animate-heading');
    const els = Array.prototype.slice.call(el);

    const cb = function (entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {

          entry.target.classList.add('inview');
          // setTimeout(() => {
          // }, 600);
        } else {
          // entry.target.classList.remove('inview');
        }
      });
    }

    const options = {
      root: null,
    };

    const io = new IntersectionObserver(cb, options);
    els.forEach(el => io.observe(el));

    for (let el of els) {
      const chars = el.innerHTML.trim().split("");

      el.innerHTML = chars.reduce((acc, curr) => {
        curr = curr.replace(/\s+/, '&nbsp;');
        return `${acc}<span class="char">${curr}</span>`;
      }, "");
    }
  }
});
