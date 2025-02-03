$(document).ready(function () {



    $(".header__burger").click(function () {
        $('.header__mobile-menu').addClass('active');
    });
    $(".header__mobile-menu-close").click(function () {
        $('.header__mobile-menu').removeClass('active');
    });

    function AosStart() {

    }
    AosStart()


    $(".faq__item").on("click", function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $('.faq__item').removeClass('active');
            $(this).addClass('active');
        }
    });

    if ($('.brands.swiper-container').length) {
        var BrabdCarusel = new Swiper(".brands.swiper-container", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: 'true',
            speed: 6000,
            autoplay: {
                delay: 1,
            },
            breakpoints: {
                240: {
                    spaceBetween: 10,
                    centeredSlides: true,
                    speed: 3000,
                    slidesPerView: 2.2,
                },
                500: {
                    spaceBetween: 20,
                    centeredSlides: true,
                    speed: 3000,
                    slidesPerView: 2.2,
                },
                640: {
                    spaceBetween: 20,
                    centeredSlides: true,
                    speed: 3000,
                    slidesPerView: 4.2,
                },
                768: {
                    spaceBetween: 20,
                    centeredSlides: true,
                    allowTouchMove: true,
                    speed: 3000,
                    slidesPerView: 5,
                },
                1024: {

                },
            }
        });
    }


});

