(function ($) {
    "use strict";

    // Buscador emergente
    var searchPopup = function () {
        $('#header-nav').on('click', '.search-button', function () {
            $('.search-popup').toggleClass('is-visible');
        });

        $('#header-nav').on('click', '.btn-close-search', function () {
            $('.search-popup').toggleClass('is-visible');
        });

        $(".search-popup-trigger").on("click", function (event) {
            event.preventDefault();
            $(".search-popup").addClass("is-visible");
            setTimeout(function () {
                $("#search-popup").focus();
            }, 350);
        });

        $(".search-popup").on("click", function (event) {
            if ($(event.target).is(".search-popup-close, .search-popup-close svg, .search-popup-close path, .search-popup")) {
                event.preventDefault();
                $(this).removeClass("is-visible");
            }
        });

        $(document).keyup(function (event) {
            if (event.which === 27) $(".search-popup").removeClass("is-visible");
        });
    };

    // Inicializa SwiperJS
    var initSwipers = function () {
        new Swiper(".product-swiper", {
            spaceBetween: 20,
            navigation: {
                nextEl: ".product-slider-button-next",
                prevEl: ".product-slider-button-prev",
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                660: { slidesPerView: 3 },
                980: { slidesPerView: 4 },
                1500: { slidesPerView: 5 }
            }
        });
    };

    $(document).ready(function () {
        searchPopup();
        initSwipers();

        // Preloader
        window.addEventListener("load", function () {
            document.getElementById("preloader").classList.add("hide-preloader");
        });
    });

})(jQuery);
