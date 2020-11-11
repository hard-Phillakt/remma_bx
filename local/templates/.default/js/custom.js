

$(document).ready(function () {
    function topLinePosition() {
        var scrollTop = $(document).scrollTop(),
            headerbottomTop = $(".header-bottom").offset().top;

        if (scrollTop >= headerbottomTop) {
            $(".hb-content").addClass("sticky");
            $(".hb-content").addClass("animated fadeInDown");
        } else {
            $(".hb-content").removeClass("sticky");
            $(".hb-content").removeClass("animated fadeInDown");
        }
    }

    if ($(window).width() > 1024) {
        // header fixed -----------------------------------
        topLinePosition();
        $(window).scroll(function () {
            topLinePosition();
        });

        // close fast view window -----------------------------------
        $(".close-btn, .popup_mask").on("click", function () {
            $("body").removeClass("noscroll");
            $(".fast_elem_wrapper .close-btn").hide();
            $(".product_card_fast").removeClass("fast-in");
            $(".popup_mask").fadeOut(100);
            $(".add_el").html("");
        });
    } else {
        // open mobile menu catalog
        $(document).on("click", ".open_list", function () {
            var id = $(this).attr("data-id");
            $(this).toggleClass("active");
            $("#" + id).slideToggle();
        });

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll > 10) {
                $(".header").addClass("fixed");
            } else {
                $(".header").removeClass("fixed");
            }
        });

        // region open search title -----------------------------------

        $(document).on("click", ".search-link", function (e) {
            e.preventDefault();
            $("#search_in").toggleClass("open-in");
            $("#title-search-input").focus();
            $(".hamburger").removeClass("is-active");
            $("body").removeClass("noscroll menu-in");
            Closed = false;
        });
        // endregion

        // region open mobile menu

        var Closed = false;

        $(".hamburger").click(function () {
            if (Closed == true) {
                $(".hamburger").removeClass("is-active");
                $("body").removeClass("noscroll menu-in");
                Closed = false;
            } else {
                $(".hamburger").addClass("is-active");
                $("body").addClass("noscroll menu-in");
                Closed = true;
            }
        });
        // endregion
    }







    $('.main-banner').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.bestsellers').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })




















});