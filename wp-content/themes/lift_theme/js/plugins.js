/*========== NAVBAR TRANSPARENT TO SOLID ==========*/
jQuery(document).ready(function ($) {
  //when document(DOM) loads completely
  checkScroll(); //check if page is scrolled
  $(window).scroll(checkScroll); //get scroll position of window
});

function checkScroll() {
  //check if page is scrolled
  if (jQuery(window).scrollTop() >= 100) {
    //if window is scrolled 300px or more
    jQuery(".navbar").addClass("solid"); //add class 'solid' to element with class 'navbar'
  } else {
    //if page is not scrolled 300px from top
    jQuery(".navbar").removeClass("solid"); //remove class 'solid' from navbar element
  }
}

/*========== ADD SOLID CLASS TO NAVBAR WHEN TOGGLED ==========*/

jQuery(document).ready(function () {
  checkScroll();
  jQuery(window).scroll(checkScroll);
  jQuery(".navbar-toggler").click(function () {
    if (!jQuery(".navbar").hasClass("solid-toggle")) {
      if (jQuery(window).scrollTop() <= 100) {
        jQuery(".navbar").toggleClass("solid-toggle");
      }
    }
  });
});

/*========== CLOSE MOBILE MENU ON CLICK & SMOOTH SCROLL TO LINK a[href^="#"] ==========*/
(function ($) {
  $(document).on("click", 'a[href^="#"]', function (event) {
    event.preventDefault();
    $(".navbar-toggler").addClass("collapsed");
    $("#navbarResponsive").removeClass("show");

    setTimeout(function () {
      $("nav.navbar").removeClass("solid-toggle");
    }, 300);

    $("html, body").animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top,
      },
      1000
    );
  });
})(jQuery);

/*========== BOUNCING DOWN ARROW ==========*/
(function ($) {
  $(document).ready(function () {
    $(window).scroll(function () {
      $(".arrow").css("opacity", 1 - $(window).scrollTop() / 250);
    });
  });
})(jQuery);

/*========== LIGHTBOX IMAGE GALLERY ==========*/
(function ($) {
  $(document).ready(function () {
    lightbox.option({
      resizeDuration: 600,
      wrapAround: true,
      imageFadeDuration: 500,
    });
  });
})(jQuery);

/*========== MEET THE TEAM CAROUSEL ==========*/
(function ($) {
  $(document).ready(function () {
    //when document(DOM) loads completely
    $("#team-carousel").owlCarousel({
      //owlCarousel settings
      autoplay: true, //set to false to turn off autoplay and only use nav
      autoplayHoverPause: true, //set to false to prevent pausing on hover
      loop: true, //set to false to stop carousel after all slides shown
      nav: true,
      dots: true,
      autoplayTimeout: 5000, //time between transitions
      smartSpeed: 1200, //transition speed
      dotsSpeed: 1000, //transition speed when using dots/buttons

      responsive: {
        //set number of items shown per screen width
        0: {
          items: 1, //0px width and up display 1 item
        },
        768: {
          items: 2, //768px width and up display 2 items
        },
        992: {
          items: 3, //992px width and up display 3 items
        },
      },
    });
  });
})(jQuery);

/*========== CLIENTS CAROUSEL ==========*/
(function ($) {
  $(document).ready(function () {
    //when document(DOM) loads completely
    $("#clients-carousel").owlCarousel({
      //owlCarousel settings
      autoplay: true, //set to false to turn off autoplay and only use nav
      nav: true,
      autoplayHoverPause: true, //set to false to prevent pausing on hover
      loop: true, //set to false to stop carousel after all slides shown
      autoplayTimeout: 5000, //time between transitions
      smartSpeed: 1600, //transition speed
      dotsSpeed: 1000, //transition speed when using dots/buttons
      responsive: {
        //set number of items shown per screen width
        0: {
          items: 1, //0px width and up display 1 item
        },
        768: {
          items: 2, //768px width and up display 2 items
        },
      },
    });
  });
})(jQuery);

/*========== TOP SCROLL BUTTON ==========*/
(function ($) {
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
        $(".top-scroll").fadeIn();
      } else {
        $(".top-scroll").fadeOut();
      }
    });
  });
})(jQuery);

/*========== MAKE ALL ANIMATION "FADEINUP" ON MOBILE ==========*/
(function ($) {
  $(document).ready(function () {
    if ($(window).width() < 768) {
      $("div").attr("data-animation", "animate__animated animate__fadeInUp");
    }
  });
})(jQuery);

/*========== WAYPOINTS ANIMATION DELAY ==========*/
//Original Resource: https://www.oxygenna.com/tutorials/scroll-animations-using-waypoints-js-animate-css
(function ($) {
  $(function () {
    // a self calling function
    function onScrollInit(items, trigger) {
      // a custom made function
      items.each(function () {
        //for every element in items run function
        var osElement = $(this), //set osElement to the current
          osAnimationClass = osElement.attr("data-animation"), //get value of attribute data-animation type
          osAnimationDelay = osElement.attr("data-delay"); //get value of attribute data-delay time

        osElement.css({
          //change css of element
          "-webkit-animation-delay": osAnimationDelay, //for safari browsers
          "-moz-animation-delay": osAnimationDelay, //for mozilla browsers
          "animation-delay": osAnimationDelay, //normal
        });

        var osTrigger = trigger ? trigger : osElement; //if trigger is present, set it to osTrigger. Else set osElement to osTrigger

        osTrigger.waypoint(
          function () {
            //scroll upwards and downwards
            osElement.addClass("animated").addClass(osAnimationClass); //add animated and the data-animation class to the element.
          },
          {
            triggerOnce: true, //only once this animation should happen
            offset: "99%", // animation should happen when the element is 70% below from the top of the browser window
          }
        );
      });
    }

    onScrollInit($(".os-animation")); //function call with only items
    onScrollInit(
      $(".staggered-animation"),
      $(".staggered-animation-container")
    ); //function call with items and trigger
  });
})(jQuery);
