//-------------------------------------------------------------
//---------------------СЛАЙДЕР С ВИДЕО-------------------------
//-------------------------------------------------------------
$(document).ready(function(){
    $(function() {
        $(".slider-banner__items").responsiveSlides({
            speed: 1000,
        });
    });

    if ($('.owl-carousel-video').length>0){
        $('.owl-carousel-video').owlCarousel({
            stagePadding: 50,
            loop: true,
            lazyLoad: true,
            nav: true,
            dots: false,
            navText: ["",""],
            lazyEffect: true,
            responsiveClass: true,
            autoplay: true,
            autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    lazyEffect: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplaySpeed: 1000
                },
                340: {
                    items: 1,
                    nav: false,
                    lazyEffect: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplaySpeed: 1000
                },
                720: {
                    items: 2.1,
                    nav: true,
                    lazyEffect: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplaySpeed: 1000
                },
                1024: {
                    items: 2,
                    nav: true,
                    lazyEffect: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplaySpeed: 1000
                },
                1920: {
                    items: 2,
                    nav: true,
                    lazyEffect: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplaySpeed: 1000
                }
            }
        });
    }
    
    if($('.owl-carousel-photos').length > 0) {
        $('.owl-carousel-photos').owlCarousel({
            stagePadding: 0,
            loop: true,
            lazyLoad: true,
            nav: true,
            dots: false,
            navText: ["",""],
            lazyEffect: true,
            responsiveClass: true,
            autoplay: false,
            autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                    lazyEffect: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplaySpeed: 1000
                },
                340: {
                    items: 2,
                    nav: false,
                    lazyEffect: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplaySpeed: 1000
                },
                720: {
                    items: 3,
                    nav: true,
                    lazyEffect: true,
                    responsiveClass: true,
                    autoplay: true,
                    autoplaySpeed: 1000
                },
                1024: {
                    items: 3,
                    nav: true,
                    lazyEffect: true,
                    responsiveClass: true,
                    autoplay: false,
                    autoplaySpeed: 1000
                },
                1920: {
                    items: 3,
                    nav: true,
                    lazyEffect: true,
                    responsiveClass: true,
                    autoplay: false,
                    autoplaySpeed: 1000
                }
            }
        });
    }
});
//-------------------------------------------------------------
//---------------------ПЛАВНЫЙ СКРОЛ ДО ЯКОРЯ------------------
//-------------------------------------------------------------
$(document).ready(function() {
    $('a[data-target^="anchor"]').bind('click.smoothscroll',function () {
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top - 70;
        $('html').animate({scrollTop: destination}, 1400);

    });
});
//-------------------------------------------------------------
//---------------------ОСТАНОВКА ЮТУБА-------------------------
//-------------------------------------------------------------
$(document).ready(function () {
    $('.videoFrame').each(function(i, el) {
        var thisvid = new YT.Player($(el)[0]);
    });
});

//-------------------------------------------------------------
//--------------------ПЕРЕДАЧА ДАННЫХ О БИЛЕТЕ-----------------
//-------------------------------------------------------------
$(document).ready(function () {
    $(".banner__btn-action, .banner__btn-action-header").click(function (e) {
        var $this = $(this);
        var ticketType = $this.data('tikettype');
        $('#typeticket').val(ticketType);
    });
});
//-------------------------------------------------------------
//---------------------МОБЛЬНОЕ МЕНЮ---------------------------
//-------------------------------------------------------------
$(document).ready(function() {
    $(".toggle-nav").click(function(){
        $(".header-menu").show();
        $(".header-menu").addClass("active-menu");
        // $("body").addClass("noscroll");
    });
});
$(document).ready(function() {
    $(".close-mobile").click(function(){
        $(".active-menu").hide();
        // $("body").removeClass("noscroll");
    });
});
$(document).ready(function() {
    $('a[data-target^="anchor"]').click(function(){
        $('.active-menu').hide(500);
        // $("body").removeClass("noscroll");
    });
});
//-------------------------------------------------------------
//---------------------БАННЕР------------------------------
//-------------------------------------------------------------
//     var count = 0;
//     function change(){
//     setInterval(function() {
//         var banner = $('.container-fluid__header-banner');
//         if ( count == 0 ) {
//             banner.removeClass('slide-img-2');
//         }
//         banner.removeClass('slide-img-'+count);
//         count++;
//         banner.addClass('slide-img-'+count);
//         if ( count==3) {
//             count = 0;
//         }
//     }, 6000);
//     }
// $(document).ready(function(){
//     change();
// });
//-------------------------------------------------------------
//--------------------ФИКСИРОВАННОЕ МЕНЮ-----------------------
//-------------------------------------------------------------
var h_hght = 70; // высота шапки
var h_mrg = 0;   // отступ когда шапка уже не видна

$(function(){
    var top = $(this).scrollTop();

    if(top > h_hght){
        $('.container-fluid.container-fluid-header-menu').addClass('top_nav');
        $('.logo').addClass('hide_logo');
        $('.top_nav .hor_logo').removeClass('hide_logo')

    }
    $(window).scroll(function(){
        top = $(this).scrollTop();
        if (top+h_mrg < h_hght) {
            $('.container-fluid.container-fluid-header-menu').removeClass('top_nav');
            $('.logo').removeClass('hide_logo');
        } else {
            $('.container-fluid.container-fluid-header-menu').addClass('top_nav');
            $('.logo').addClass('hide_logo');
            $('.hor_logo').removeClass('hide_logo');
        }
    });
});


$(".upload_image_button").click(function() {
    var send_attachment_bkp = wp.media.editor.send.attachment;
    var button = $(this);
    wp.media.editor.send.attachment = function(props, attachment) {
        $(button).parent().prev().attr("src", attachment.url);
        $(button).prev().val(attachment.id);
        wp.media.editor.send.attachment = send_attachment_bkp;
    }
    wp.media.editor.open(button);
    return false;
});

// The "Remove" button (remove the value from input type="hidden")
$(".remove_image_button").click(function() {
    var answer = confirm("Are you sure?");
    if (answer == true) {
        var src = $(this).parent().prev().attr("data-src");
        $(this).parent().prev().attr("src", src);
        $(this).prev().prev().val("");
    }
    return false;
});