$(function () {
  $(".main-contents-list-wrap").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    lazyLoad: "progressive",
    swipe: true,
    draggable: true,
    responsive: [
      {
        breakpoint: 1140,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },

      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });
  $(".article__thumbnail").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    fade: true,
    swipe: true,
    lazyLoad: "progressive",
    touchMove: true,
    focusOnSelect: true,
    swipe: true,
    draggable: true,
  });
});
