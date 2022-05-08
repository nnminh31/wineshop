var slider_banner_owl = $('.slider-banner').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: false,
    // margin: 0,
    items: 1,
    navText: ["<button></button>", "<button></button>"],
    responsive: {
        0: { items: 1 },
        480: { items: 1 },
        678: { items: 1 },
        960: { items: 1 }
    }
})
$('.product-slider').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    items: 5,
    dots: false,
    responsive: {
        0: { items: 2 },
        480: { items: 2 },
        678: { items: 2 },
        960: { items: 5 }
    }
})
slidecount = 1
jQuery('.owl-item').not('.cloned').each(function () {
    jQuery(this).addClass('slidenumber' + slidecount);
    slidecount = slidecount + 1;
})
// jQuery('.owl-item.cloned').each(function () {
//         jQuery(this).addClass('slidenumber' + slidecount);
//         slidecount = slidecount + 1;
// })
$('.slider-banner.slider-general.owl-carousel .owl-nav:nth-child(2) .owl-prev').click(function () {
    $(".slider-banner.slider-general.owl-carousel .owl-nav:nth-child(3) .owl-prev").trigger('click');
})
$('.slider-banner.slider-general.owl-carousel .owl-nav:nth-child(2) .owl-next').click(function () {
    $(".slider-general.owl-carousel .owl-nav:nth-child(3) .owl-next").trigger('click');
})

jQuery(document).ready(function ($) {
    var $lateral_menu_trigger = $('#cd-menu-trigger'), $content_wrapper = $('.cd-main-content'), $navigation = $('header'), $footer = $('.footer');
    $lateral_menu_trigger.on('click', function (event) {
        event.preventDefault()
        $lateral_menu_trigger.toggleClass('is-clicked')
        $navigation.toggleClass('lateral-menu-is-open')
        $footer.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
            $('body').toggleClass('overflow-hidden')
        })
        $content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function () {
            $('body').toggleClass('overflow-hidden')
        })
        $('#cd-lateral-nav').toggleClass('lateral-menu-is-open')
        if ($('html').hasClass('no-csstransitions')) {
            $('body').toggleClass('overflow-hidden');
        }
    })
    $('.menu-item-has-children').children('.arrow').on('click', function (event) {
        event.preventDefault()
        $(this).parent('.menu-item-has-children').toggleClass('li-active')
        $(this).toggleClass('submenu-open').next('.sub-menu').toggleClass('active').end().parent('.menu-item-has-children')
    })
    //     $content_wrapper.on('click', function(event){
    //         if(!$(event.target).is('#cd-menu-trigger, #cd-menu-trigger span')) {
    //             $lateral_menu_trigger.removeClass('is-clicked')
    //             $navigation.removeClass('lateral-menu-is-open')
    //         }
    //         $content_wrapper.removeClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
    //             $('body').removeClass('overflow-hidden');
    //         })
    //         $navigation.removeClass('lateral-menu-is-open')
    //         $content_wrapper.removeClass('lateral-menu-is-open')
    //     })
    var filter = document.getElementsByClassName("filter");
    for (var i = 0; i < filter.length; i++) {
        filter[i].addEventListener("click", function () {
            this.querySelector('h3').classList.toggle("active");
            var panel = this.querySelector('.item-filt');
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    // Check scroll
    function checkScrolled() {
        if ($(window).scrollTop() > 1) {
            $('header').addClass('scrolled');
        } else {
            $('header').removeClass('scrolled');
        }
    }
    checkScrolled()
    $(window).scroll(
        function () {
            checkScrolled();
        }
    )

    // console.log($('#back-to-top').length)
    if ($('#back-to-top').length) {
        var scrollTrigger = 800, backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show').css({
                    'opacity': 1,
                    'visibility': 'visible'
                });
            } else {
                $('#back-to-top').removeClass('show').css({
                    'opacity': 0,
                    'visibility': 'hidden'
                });
            }
        };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) { e.preventDefault(); $('html,body').animate({ scrollTop: 0 }, 2000); });
    }
})