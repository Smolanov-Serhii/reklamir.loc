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

    if ($('.banner').length) {
        var BannerCarusel = new Swiper(".banner .swiper-container", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: 'true',
            speed: 1000,
            navigation: {
                nextEl: ".banner .banner__next",
                prevEl: ".banner .banner__prev",
            },
            autoplay: {
                delay: 5000,
            },
        });
    }


});

