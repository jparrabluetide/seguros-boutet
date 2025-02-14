export default class Carousels {
  constructor() {
    this.carousel1 = '.carousel1';
    this.carousel2 = '.carousel2';
  }

  carousel1Init() {
    new Swiper(this.carousel1, {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      slidesPerView: 1,
      spaceBetween: 15,
      pagination: {
        el: '.swiper-pagination-carousel1',
        clickable: true
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      }
    })
  }

  carousel2Init() {
    new Swiper(this.carousel2, {
      loop: true,
      /*
      autoplay: {
        delay: 5000,
      },
      */
      slidesPerView: 1,
      spaceBetween: 15,
      pagination: {
        el: '.swiper-pagination-carousel2',
        clickable: true
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 15,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
      }
    })
  }
}
