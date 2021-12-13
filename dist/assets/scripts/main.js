'use strict';

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

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
  });
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
  });
  var filterFns = {
    ium: function ium() {
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
    var el = document.querySelectorAll('.inview');
    var els = Array.prototype.slice.call(el);

    var cb = function cb(entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-anim');
        } else {}
      });
    };

    var options = {
      root: null,
      rootMargin: '-20% 0px',
      threshold: 0
    };
    var io = new IntersectionObserver(cb, options);
    els.forEach(function (el) {
      return io.observe(el);
    });
  }
  {
    var callback = function callback(entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          header.classList.add('is-active');
        } else {
          header.classList.remove('is-active');
        }
      });
    };

    var _el = document.querySelectorAll('.js-first-view');

    var _els = Array.prototype.slice.call(_el);

    var header = document.getElementById('js-header');
    var _options = {
      root: null,
      rootMargin: '-50% 0px',
      threshold: 0
    };
    var observer = new IntersectionObserver(callback, _options);

    _els.forEach(function (el) {
      observer.observe(el);
    });
  }
  {
    var _el2 = document.querySelectorAll('.animate-heading');

    var _els2 = Array.prototype.slice.call(_el2);

    var _cb = function _cb(entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('inview'); // setTimeout(() => {
          // }, 600);
        } else {// entry.target.classList.remove('inview');
        }
      });
    };

    var _options2 = {
      root: null
    };

    var _io = new IntersectionObserver(_cb, _options2);

    _els2.forEach(function (el) {
      return _io.observe(el);
    });

    var _iterator = _createForOfIteratorHelper(_els2),
        _step;

    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var _el3 = _step.value;

        var chars = _el3.innerHTML.trim().split("");

        _el3.innerHTML = chars.reduce(function (acc, curr) {
          curr = curr.replace(/\s+/, '&nbsp;');
          return "".concat(acc, "<span class=\"char\">").concat(curr, "</span>");
        }, "");
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }
  }
});