if (window.innerWidth >= 992) {
  const swiper = new Swiper('.portfolio-detail__galery', {
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
  });
}

else if (window.innerWidth >= 768 && window.innerWidth < 992) {
  const swiper = new Swiper('.portfolio-detail__galery', {
      slidesPerView: 2,
      spaceBetween: 30,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
  });
}

else {
  const swiper = new Swiper('.portfolio-detail__galery', {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
  });
}