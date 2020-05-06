const swiper = new Swiper('.swiper-container', {
    autoplay: {
        delay: 6000,
        disableOnInteraction: true
    },
    speed: 600,
    effect: 'fade',
    loop: true,
    // on: {
    //     slideChange: function () {
    //       jQuery('.topview__title').css('opacity', '0');
    //       realIndex = this.realIndex + 1;
    //       jQuery('.topview__title-' + realIndex).css('opacity', '1');
    //     },
    // },
});