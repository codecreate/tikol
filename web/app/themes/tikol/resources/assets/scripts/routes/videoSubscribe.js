export default {
  init() {
    $('.slider').slick({
      dots: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      // mobileFirst: true,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          infinite: true,
        },
      }, {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          dots: true,
        },
      }, {
        breakpoint: 300,
        settings: 'unslick',
      }],
    })
  },
  finalize() {
      // JavaScript to be fired on the video subscribe after the init JS
  },
};
  