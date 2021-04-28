(function ($) {
    jQuery(document).ready(function ($) {
        const swiper = new Swiper('.home_slider .swiper-container', {
            navigation: {
                nextEl: '.home_slider .swiper_next',
                prevEl: '.home_slider .swiper_prev',
            }
        });

        const swiper_second = new Swiper('.home_testiomonials .swiper-container', {
            navigation: {
                nextEl: '.home_testiomonials .swiper_next',
                prevEl: '.home_testiomonials .swiper_prev',
            },
            pagination: {
                el: '.home_testiomonials .swiper-pagination',
            },
        });

        function aos_delay(elem) {
            let delay = 0;
            for (let i = 0; i < elem.length; i++) {
                $(elem[i]).attr('data-aos-delay', delay);
                delay += 300;
            }
        }
        aos_delay($('.home_under_banner .bottom'));
        aos_delay($('.supported_formats .wrap'));
        aos_delay($('.formats_blocks .wrap'));




        $('.burger').on('click', function () {
            $(this).toggleClass('active');
            $('header ul').toggleClass('active');
        });
        $(window).scroll(function () {
            if ($(window).scrollTop() > 50) {
                $("header").addClass("scrolled");
            } else if ($(window).scrollTop() < 50) {
                $("header").removeClass("scrolled");
            }
        });
        AOS.init({
            disable: function () {
                var maxWidth = 800;
                return window.innerWidth < maxWidth;
            },
            duration: 1000,
            offset: 120,
            once: true,
            startEvent: 'DOMContentLoaded'
        });
    });
})(jQuery);
