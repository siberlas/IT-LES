jQuery(function ($) {
    "use strict";
    // Author Code Here

    var owlPricing;
    var ratio = 2;

    // Window Load
    $(window).load(function () {
        // Preloader
        $('.preloader').addClass('animated fadeOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $('.preloader').hide();
            $('.parallax, header').addClass('animated fadeIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $('.intro-tables').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
            });
        });

        // Header Init
        if ($(window).height() > $(window).width()) {
            var ratio = $('.parallax').width() / $('.parallax').height();
            $('.parallax img').css('height', ($(window).height()) + 'px');
            $('.parallax img').css('width', $('.parallax').height() * ratio + 'px');
        }

        $('header').height($(window).height() + 80);
        $('section .cut').each(function () {
            if ($(this).hasClass('cut-top'))
                $(this).css('border-right-width', $(this).parent().width() + "px");
            else if ($(this).hasClass('cut-bottom'))
                $(this).css('border-left-width', $(this).parent().width() + "px");
        });

        // Sliders Init
        $('.owl-schedule').owlCarousel({
            singleItem: true,
            pagination: true
        });
        $('.owl-testimonials').owlCarousel({
            singleItem: true,
            pagination: true
        });
        $('.owl-twitter').owlCarousel({
            singleItem: true,
            pagination: true
        });
        // Typing Intro Init
        $(".typed").typewriter({
            speed: 60
        });

        // Popup Form Init
        var i = 0;
        var interval = 0.15;
        $('.popup-form .dropdown-menu li').each(function () {
            $(this).css('animation-delay', i + "s");
            i += interval;
        });
        $('.popup-form .dropdown-menu li a').click(function (event) {
            event.preventDefault();
            $(this).parent().parent().prev('button').html($(this).html());
        });

    });

    // Window Resize
    $(window).resize(function () {
        $('header').height($(window).height());
    });

    // Pricing Box Click Event
    $('.pricing .box-main').click(function () {
        $('.pricing .box-main').removeClass('active');
        $('.pricing .box-second').removeClass('active');
        $(this).addClass('active');
        $(this).next($('.box-second')).addClass('active');
        $('#pricing').css("background-image", "url(" + $(this).data('img') + ")");
        $('#pricing').css("background-size", "cover");
    });


    function centerModal() {
        $(this).css('display', 'block');
        var $dialog = $(this).find(".modal-dialog"),
            offset = ($(window).height() - $dialog.height()) / 2,
            bottomMargin = parseInt($dialog.css('marginBottom'), 10);

        // Make sure you don't hide the top part of the modal w/ a negative margin
        // if it's longer than the screen height, and keep the margin equal to
        // the bottom margin of the modal
        if (offset < bottomMargin) offset = bottomMargin;
        $dialog.css("margin-top", offset);
    }

    $('.modal').on('show.bs.modal', centerModal);

    $('.modal-popup .close-link').click(function (event) {
        event.preventDefault();
        $('#modal1').modal('hide');
    });

    $(window).on("resize", function () {
        $('.modal:visible').each(centerModal);
    });
});
