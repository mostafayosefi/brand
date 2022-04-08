"use strict";
$ = jQuery;
$(document).ready(function () {

    // owl-other-services
    $('.owl-other-services').owlCarousel({
        loop: true,
        margin: 30,
        center: false,
        rtl: true,
        dots: true,
        nav: true,
        autoplay: true,
        autoWidth: false,
        autoplayHoverPause: true,
        smartSpeed: 750,
        navText: ["<i class='far fa-chevron-right'></i>", "<i class='far fa-chevron-left'></i>"],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1.3
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            },
            1200: {
                items: 3.5
            },
        }
    });


    // owl-customer
    $('.owl-customer').owlCarousel({
        loop: true,
        margin: 1,
        center: false,
        rtl: true,
        dots: false,
        nav: false,
        autoplay: true,
        autoWidth: false,
        autoplayHoverPause: true,
        smartSpeed: 750,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 2
            },
            768: {
                items: 3
            },
            991: {
                items: 4
            },
            1200: {
                items: 5
            },
        }
    });


    // all-chtab
    $('.all-chtab').owlCarousel({
        loop: false,
        margin: 35,
        center: false,
        rtl: true,
        dots: false,
        nav: false,
        autoplay: false,
        autoWidth: true,
        autoplayHoverPause: true,
        smartSpeed: 750,
    });


    // contact map
    try {
        var map = L.map('contact-map').setView([35.70889, 51.37673], 16);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var greenIcon = L.icon({
            iconUrl: 'http://sabt-ag.ir/wp-content/themes/mizan/assets/img/marker-icon-2x.png',
            iconSize: [25, 41], // size of the icon
            iconAnchor: [25, 41], // point of the icon which will correspond to marker's location
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });

        L.marker([35.70889, 51.37673], {
            icon: greenIcon
        }).addTo(map);

    } catch {

    }

    // find H tag in Blog title
    var i = 1
    var topics = []
    var links = []
    //get topics and adding id to them
    $('#find-h h2').each(function (index, topic) {
        $(this).attr('id', i)
        i++
        topics.push($(this).text())
    })
    //generating links as list items(li)
    $.each(topics, function (index, topic) {
        links.push("<li><i class='fas fa-chevron-left'></i><a href='#" + (index + 1) + "'>" + topic + "</a></li>")
    })
    //adding li`s to ul
    $('#menu').append(links.join(''))


    // responsive menu
    $(".responsive-menu").click(function (e) {
        $(".menu-ul").toggleClass("open");
        e.stopPropagation();
    })

    $("body").click(function () {
        $(".menu-ul").removeClass("open");
    })

    $(".menu-ul").click(function (e) {
        e.stopPropagation();
    })

    if (window.matchMedia("(max-width: 990px)").matches) {
        $(".subMenus > a").click(function (e) {
            e.preventDefault();
        })

        $(".subMenus").click(function () {
            $(".subMenus ul").addClass("hide-subMenus");
            //$(".hide-subMenus").removeAttr("style");
            $(this).find("ul").fadeToggle();
        })
    }

    //nav fix
    $(window).scroll(function () {
        var heightScrolled = $(window).scrollTop();
        var full = $(window).height();
        var defaultHeight = 50;
        var size = (full * defaultHeight) / 100;
        if (heightScrolled < size) {
            $('#home-header').removeClass('animate__fadeInDown');
            // $('#home-header').addClass('animate__fadeInUp');
            $('#home-header').removeClass("sticky");
        } else {
            $('#home-header').addClass("sticky");
            $('#home-header').addClass('animate__animated');
            $('#home-header').addClass('animate__fadeInDown');
            // $('#home-header').removeClass('animate__fadeInUp');
        }
    });
	
    // home tab
    $('.chTab').click(function (e) {
        e.preventDefault();
        $('.chTab').removeClass('tab-header-active');
        $(this).addClass('tab-header-active');
        $('.tab--content').find('.tab-content-ch').hide();
        $('.tab-content-' + $(this).attr('data-t')).fadeIn(300);
    });


    // home faq
    $('.acc-btn').click(function () {
        if ($(this).next().is(":hidden")) {
            $('.acc-content').slideUp('selected');
            $(this).next().slideDown('selected');
        } else {
            $(this).next().slideUp('selected');
        };
    });

    // Replay Comment
    $("body").on("click", ".replay-comment", function (e) {
        e.preventDefault();
        var name = $(this).attr("data-name");
        var id = $(this).attr("data-id");
        $("form.comment-box-in .replay-text").removeClass("d-none");
        $("form.comment-box-in .replay-text .replay-name b").html(name);
        $("form.comment-box-in input[name=comment_parent]").remove();
        $("form.comment-box-in").append('<input type="hidden" name="comment_parent" value="' + id + '"/>');

        $('html, body').animate({
            scrollTop: $('form.comment-box-in').offset().top
        }, 200);
    });

    // close replay
    $("body").on("click", ".close-replay-comment", function (e) {
        e.preventDefault();
        $("form.comment-box-in input[name=comment_parent]").remove();
        $("form.comment-box-in .replay-text").addClass("d-none");
        $("form.comment-box-in .replay-text .replay-name b").html("");
    });

});
