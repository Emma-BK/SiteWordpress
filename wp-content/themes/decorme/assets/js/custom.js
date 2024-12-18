(function($) {
  'use strict';

    $( document ).ready(function() {

        // ScrollUp
        $(window).on('scroll', function () {
          if ($(this).scrollTop() > 200) {
            $('.scrollingUp').addClass('is-active');
          } else {
            $('.scrollingUp').removeClass('is-active');
          }
        });
        $('.scrollingUp').on('click', function () {
          $("html, body").animate({
            scrollTop: 0
          }, 600);
          return false;
        });

        // Sticky Header
        if ($(".is-sticky-on").length > 0) {
          $(window).on('scroll', function() {
            if ($(window).scrollTop() >= 250) {
                $('.is-sticky-on').addClass('is-sticky-menu');
            }
            else {
                $('.is-sticky-on').removeClass('is-sticky-menu');
            }
          });
        }

       

		 // Home Slider ( .home-slider-one )
        if ($(".home-slider").length > 0) {
          var $owlHome = $('.home-slider');
          $owlHome.owlCarousel({
              rtl: $("html").attr("dir") == 'rtl' ? true : false,
              items: 1,
              autoplay: true,
              autoplayTimeout: 10000,
              margin: 0,
              loop: true,
              dots: true,
              nav: true,
              navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
              singleItem: true,
              transitionStyle: "fade",
              responsive: {
                  0: {
                      nav: false
                  },
                  575: {
                      nav: $(".slider-section").hasClass('') == 'home-slider-one' ? true : false
                  },
                  992: {
                      nav: $(".slider-section").hasClass('') == 'home-slider-one' ? true : false
                  }
              }
          });
          $owlHome.owlCarousel();
          $owlHome.on('translate.owl.carousel', function (event) {
              var data_anim = $("[data-animation]");
              data_anim.each(function() {
                  var anim_name = $(this).data('animation');
                  $(this).removeClass('animated ' + anim_name).css('opacity', '0');
              });
          });
          $("[data-delay]").each(function() {
              var anim_del = $(this).data('delay');
              $(this).css('animation-delay', anim_del);
          });
          $("[data-duration]").each(function() {
              var anim_dur = $(this).data('duration');
              $(this).css('animation-duration', anim_dur);
          });
          $owlHome.on('translated.owl.carousel', function() {
              var data_anim = $owlHome.find('.owl-item.active').find("[data-animation]");
              data_anim.each(function() {
                  var anim_name = $(this).data('animation');
                  $(this).addClass('animated ' + anim_name).css('opacity', '1');
              });
          });
        }
		

        // Social Effects
        var ping = new Audio("");
        var timelines = {};
        document.querySelectorAll('.widget_social').forEach(item => {
            var $circles = item.querySelectorAll('.circle');
            $circles.forEach($circle=>{
              $circle.setAttribute('id', 'test'+Math.floor(Math.random() * 101));
              var tl = new mojs.Timeline();
              const circle = new mojs.Html({
                  el: '#'+$circle.getAttribute('id'),
                  left: "50%",
                  top: "50%",
                  scale: {
                      1: 0
                  },
                  duration: 500,
                  easing: "cubic.out"
              }).then({
                  scale: {
                      0: 1,
                      duration: 500
                  }
              });

              const burst = new mojs.Burst({
                  parent: '#'+$circle.getAttribute('id'),
                  radius: {
                      0: 200
                  },
                  count: 7,
                  children: {
                      fill: "var(--bs-primary)",
                      radius: 10,
                      duration: 2000
                  }
              });
              tl.add(circle, burst);
              timelines[$circle.getAttribute('id')] = tl;

              $($circle).hover(function() {
                  var tl = timelines[$(this).attr('id')];
                  tl.replay();
              });

            });
        });

        $(".widget .widget-title").html(function(){
            var text= $(this).text().trim().split(" ");
            var last = text.pop();
            return text.join(" ") + (text.length > 0 ? " <span class='text-primary'>" + last + "</span>" : last);
        });
        document.querySelectorAll('.home-slider-five .main-content h5').forEach(button => button.innerHTML = '<div><span>' + button.textContent.trim().split('').join('</span><span>') + '</span></div>');
        
    });
}(jQuery));

const title = document.querySelector('.section-404');
if (typeof(title) != 'undefined' && title != null) {
  title.onmousemove = function(e) {
      let x = e.pageX - window.innerWidth/2;
      let y = e.pageY - window.innerHeight/2;

      let rad = Math.atan2(y, x).toFixed(2); 
      let length = Math.round(Math.sqrt((Math.pow(x,2))+(Math.pow(y,2)))/10); 

      let x_shadow = Math.round(length * Math.cos(rad));
      let y_shadow = Math.round(length * Math.sin(rad));

      title.style.setProperty('--x-shadow', - x_shadow + 'px')
      title.style.setProperty('--y-shadow', - y_shadow + 'px')
  }
}

let elements = document.querySelectorAll('.footer-main .widget li > a');
if (typeof(elements) != 'undefined' && elements != null) {
  elements.forEach(element => {
      let innerText = element.innerText;
      element.innerHTML = '';
      let textContainer = document.createElement('div');
      textContainer.classList.add('block');
      for (let letter of innerText) {
          let span = document.createElement('span');
          span.innerText = letter.trim() === '' ? '\xa0' : letter;
          span.classList.add('letter');
          textContainer.appendChild(span);
      }
      element.appendChild(textContainer);
      element.appendChild(textContainer.cloneNode(true));
  });
  // for presentation purpose
  setTimeout(() => {
      elements.forEach(element => {
          element.classList.add('play');
      })
  }, 600);
  elements.forEach(element => {
      element.addEventListener('mouseover', () => {
          element.classList.remove('play');
      });
  });
}