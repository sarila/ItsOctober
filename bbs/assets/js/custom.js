$(".body-detail .owl-carousel").owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  autoplay: true,
  autoplayTimeout: 3000,
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

$(".partners-section .owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  autoplay: true,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});
//btnScrollToTop
mybutton = document.getElementById("myBtn");
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//sticky header
$(window).scroll(function () {
  if ($(this).scrollTop() > 120) {
    $(".nav-wrapper").addClass("fixed");
  } else {
    $(".nav-wrapper").removeClass("fixed");
  }
});

//toggle wala top ko
$(".button").first().addClass("active");

$(".button").click(function () {
  var $this = $(this);
  ($siblings = $this.parent().children()), (position = $siblings.index($this));
  console.log(position);

  $(".content div").removeClass("active").eq(position).addClass("active");

  $siblings.removeClass("active");
  $this.addClass("active");
});

// sidebar toggle
$(".sub-menu ul").hide();
$(".sub-menu a").click(function () {
  $(this).parent(".sub-menu").children("ul").slideToggle("100");
  $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});

// tooltip of business
// $(function () {
//   $('[data-toggle="tooltip"]').tooltip({ delay: { show: 500, hide: 100 } });
// });

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
