// ==========fixed header when user scroll more than 45 px======
$(document).ready(function () {
  // console.log("Document is ready"); // Check if document is ready

  $(window).scroll(function () {
    // console.log("Window is scrolling"); // Check if scroll event is triggered

    if ($(this).scrollTop() > 0) {
      // console.log("ScrollTop is greater than 180"); // Check condition
      // $('#navigation').addClass('fixed-top');
      $("#navigation").addClass("fixed-top");
      // $('.corousel__section').css('margin-top', '200px');
    } else {
      // console.log("ScrollTop is less than or equal to 120"); // Check condition
      $("#navigation").removeClass("fixed-top");
      // $('.corousel__section').css('margin-top', '0');
    }
  });
});

$(document).ready(function () {
  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    if (scrollTop > 102) {
      $(".mobile__menu").addClass("mobile__menu__bg");
    } else {
      $(".mobile__menu").removeClass("mobile__menu__bg");
    }
  });
});
// ====================owl corousel==========
$(document).ready(function () {
  $(".locations").owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    // nav:true,
    autoplayTimeout: 7000,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});
$(document).ready(function () {
  $(".cab__testimonial__carousel").owlCarousel({
    loop: true,
    margin: 15,
    dots: false, // Set this to false to remove dots
    // nav: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
});

$(document).ready(function () {
  $(".car__category__corousel").owlCarousel({
    loop: true,
    margin: 15,
    dots: false, // Set this to false to remove dots
    // nav: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
});
$(document).ready(function () {
  $(".read__more").click(function () {
    // Toggle visibility of inclusion__exclusion__container
    var container = $(this)
      .closest(".specific__car__card")
      .find(".inclusion__exclusion__container");
    container.slideToggle();

    // Toggle text of the button
    $(this)
      .find(".read__more")
      .text(function (i, text) {
        return text === "View Less" ? "View More" : "View Less";
      });
  });
});
$(document).ready(function () {
  $(".fa-angle-down, .fa-angle-up").click(function () {
    // Toggle visibility of the summary content
    $(this)
      .closest(
        ".departure__card, .booking__review__container, .passengers__details"
      )
      .find(".summary-content")
      .slideToggle();
    // Toggle the icon class
    $(this).toggleClass("fa-angle-down fa-angle-up");
  });
});
$(document).ready(function () {
  $(".booking__summery").click(function () {
    // Toggle visibility of the summary content
    $(this).closest(".container").find(".summary-content").slideToggle();

    // Toggle the icon class
    var icon = $(this).find("i");
    if (icon.hasClass("fa-angle-down")) {
      icon.removeClass("fa-angle-down").addClass("fa-angle-up");
    } else {
      icon.removeClass("fa-angle-up").addClass("fa-angle-down");
    }
  });
});

// adding new mobile number
$(document).ready(function () {
  let mobileNumberCount = 1;
  $("#addMobileNumberBtn").click(function () {
    mobileNumberCount++;
    $("#additionalMobileNumbers").after(`
            <div class="col-md-4 form-group">
            <input type="text" class="form-control input" id="mobno${mobileNumberCount}" name="mobno" required>
                            <label for="mobno" class="user__label">Enter Mobile number ${mobileNumberCount}*</label>
            </div>
        `);
  });
});
{
  /* <input type="text" class="form-control" id="mobno${mobileNumberCount}" placeholder="Enter Mobile number ${mobileNumberCount}*"> */
}

// adding active class on click to car categories
$(document).ready(function () {
  // Add 'active' class to the first span by default
  $(".car__category__list .btn").first().addClass("active");

  // Handle click events
  $(".car__category__list .btn").on("click", function () {
    // Remove 'active' class from all spans
    $(".car__category__list .btn").removeClass("active");

    // Add 'active' class to the clicked span
    $(this).addClass("active");
  });
});

// find height
// $(document).ready(function () {
//     alert($('.fixed-bottom-bar').height());
// });

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function () {
  // Toggle offcanvas menu
  $(".toggle-btn").click(function () {
    $("#offcanvas").toggleClass("show");
    $(".open-icon, .close-icon").toggle(); // Toggle visibility of SVG icons
    // Toggle offcanvas-open class on mobile__menu
    $(".mobile__menu").toggleClass("offcanvas-open");
    // Prevent body scrolling
    $("body").toggleClass("no-scroll");
  });

  // Close offcanvas when close button is clicked
  $(".close-btn").click(function () {
    $("#offcanvas").removeClass("show");
    $(".open-icon, .close-icon").toggle(); // Toggle visibility of SVG icons

    // Remove offcanvas-open class from mobile__menu
    $(".mobile__menu").removeClass("offcanvas-open");

    // Allow body scrolling
    $("body").removeClass("no-scroll");
  });
  // Close offcanvas when clicking outside of it
  $(document).click(function (event) {
    if (!$(event.target).closest("#offcanvas, .toggle-btn").length) {
      $("#offcanvas").removeClass("show");
      $(".open-icon, .close-icon").hide(); // Hide close icon
      $(".open-icon").show(); // Show open icon

      // Remove offcanvas-open class from mobile__menu
      $(".mobile__menu").removeClass("offcanvas-open");

      // Allow body scrolling
      $("body").removeClass("no-scroll");
    }
  });
});
// ho hidebr tag in mobile device
document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth <= 767) {
    var brElement = document.querySelector(".mobile-hide");
    if (brElement) {
      brElement.parentNode.removeChild(brElement);
    }
  }
});

window.addEventListener("resize", function () {
  var brElement = document.querySelector(".mobile-hide");
  if (window.innerWidth <= 767 && brElement) {
    brElement.parentNode.removeChild(brElement);
  } else if (window.innerWidth > 767 && !brElement) {
    var h2Element = document.querySelector(".testimonial-heading");
    if (h2Element) {
      var newBrElement = document.createElement("br");
      newBrElement.className = "mobile-hide";
      h2Element.innerHTML =
        h2Element.innerHTML.replace("TO TRAVEL", "") +
        '<br class="mobile-hide"> TO TRAVEL';
    }
  }
});
// whats app link on scroll
$(function () {
  $(window).scroll(function () {
    // var aTop = $('.carousel').height();
    var aTop = 300;
    if ($(this).scrollTop() >= aTop) {
      $(".whatsapp").addClass("whatsapp-link");
    } else {
      $(".whatsapp").removeClass("whatsapp-link");
    }
  });
});
// sign up form
function nextStep(step) {
  // Hide current step
  document.getElementById("form-step-" + step).classList.remove("active");
  // document.getElementById('step-' + step).classList.remove('active')
  // Show next step
  document.getElementById("form-step-" + (step + 1)).classList.add("active");
  document.getElementById("step-" + (step + 1)).classList.add("active");
}
function backStep(step) {
  // console.log("btn click");
  // Hide current step
  document.getElementById("form-step-" + step).classList.remove("active");
  document.getElementById("step-" + step).classList.remove("active");

  // Show previous step
  document.getElementById("form-step-" + (step - 1)).classList.add("active");
  document.getElementById("step-" + (step - 1)).classList.add("active");
}
// carousel play pause function

$(document).ready(function () {
  var isPlaying = true;
  $("#carouselPlayPause").click(function () {
    if (isPlaying) {
      $("#carousel").carousel("pause");
      $(this).find("i").removeClass("fa-pause").addClass("fa-play");
    } else {
      $("#carousel").carousel("cycle");
      $(this).find("i").removeClass("fa-play").addClass("fa-pause");
    }
    isPlaying = !isPlaying;
  });
  // Start the carousel
  $("#carousel").carousel({
    interval: 3000,
  });
});

// mobile nav search bar
/*  $(document).ready(function () {
           function toggleClassBasedOnScroll() {
               if ($(window).scrollTop() > 200) {
                   $('.outer__tab__container').removeClass('mobile__tab__container');
                   $('.fixed-bottom-bar .mobile-nav-link').removeClass('active');
                   $('.fixed-bottom-bar').addClass('red-bottom-bar');
                   // Directly call the function logic
                   $('#searchTab').removeClass('show active');
 
               } else {
                   $('.outer__tab__container').addClass('mobile__tab__container');
                   $('.fixed-bottom-bar .mobile-nav-link').addClass('active');
                   $('#searchTab').addClass('show active');
                   $('.fixed-bottom-bar').removeClass('red-bottom-bar');
               }
           }
           // Handle scroll event
           $(window).scroll(function () {
               toggleClassBasedOnScroll();
           });
 
           // Handle click event
           $('.outer__tab__container,.mobile-nav-link').click(function () {
               $('.outer__tab__container').removeClass('mobile__tab__container');
           });
 
           // Initial check on page load
           toggleClassBasedOnScroll();
 
       }); */
$(document).ready(function () {
  function toggleClassBasedOnScroll() {
    if ($(window).scrollTop() > 200) {
      $(".outer__tab__container").removeClass("mobile__tab__container");
      $(".fixed-bottom-bar .mobile-nav-link").removeClass("active");
      $("#searchTab").removeClass("show active");
      $(".fixed-bottom-bar").addClass("red-bottom-bar");
    } else {
      $(".outer__tab__container").addClass("mobile__tab__container");
      $(".fixed-bottom-bar .mobile-nav-link").addClass("active");
      $("#searchTab").addClass("show active");
      $(".fixed-bottom-bar").removeClass("red-bottom-bar");
    }
  }

  // Handle scroll event
  $(window).scroll(function () {
    toggleClassBasedOnScroll();
  });
  // Check the height of .outer__tab__content elements
  function checkHeightAndToggleScroll() {
    if (
      $("#searchTab").hasClass("show active") &&
      $("#searchTab.outer__tab__content").height() > 205
    ) {
      $("body").addClass("noscroll");
      $(".fixed-bottom-bar").addClass("red-bottom-bar");
    } else {
      $("body").removeClass("noscroll");
    }
  }
  // Call the function every second
  setInterval(checkHeightAndToggleScroll, 1000);
  // Handle click event
  $(".outer__tab__container,.mobile-nav-link").click(function () {
    $(".outer__tab__container").removeClass("mobile__tab__container");
  });
  // Initial check on page load
  toggleClassBasedOnScroll();
});

$(document).ready(function () {
  $(".close-tab").click(function () {
    var target = $(this).data("target");
    $(target).removeClass("show active");
    $(".fixed-bottom-bar .nav-link").removeClass("active");
  });
  $(".fixed-bottom-bar .nav-link").on("shown.bs.tab", function (e) {
    var target = $(e.target).attr("href");
    $(target).addClass("show active");
  });
});
