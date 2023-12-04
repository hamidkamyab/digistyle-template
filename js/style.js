/************Header********** */
var headerTimeout;
$('.header-cartBox').on('mouseenter', function() {
    visibleCartTag('.header-cart', 'show')
});

$(".header-cartBox").on("mouseleave", function() {
    visibleCartTag('.header-cart', 'hidden')
});

$('.header-cart').on('mouseenter', function() {
    clearTimeout(headerTimeout);
});

$(".header-cart").on("mouseleave", function() {
    visibleCartTag('.header-cart', 'hidden')
});

$('.header-userBox').on('mouseenter', function() {
    visibleCartTag('.header-user-msg', 'show')
});

$('.header-userBox').on("mouseleave", function() {
    visibleCartTag('.header-user-msg', 'hidden')
});

function visibleCartTag(tag, status = '') {
    if (status == 'show') {
        $(tag).fadeIn();
    }
    if (status == 'hidden') {
        headerTimeout = setTimeout(() => {
            $(tag).fadeOut();
        }, 1000);
    }

}

/****Slider****/
var slideCount = 0;
var slideTimer;
const len = $('.sliderUl li').length;

function automaticSlider() {
    slideTimer = setInterval(() => {
        slideCount++;
        slider()
    }, 4000);
}
automaticSlider()

function slider() {
    if (slideCount >= len) {
        slideCount = 0;
    }
    if (slideCount < 0) {
        slideCount = len - 1;
    }
    let slideId = '#slide-' + slideCount;
    let paginateId = '#sliderPaginateItem-' + slideCount;

    $('.sliderUl li').fadeOut();
    $(slideId).fadeIn();
    $('.sliderPaginateItem').removeClass('active')
    $(paginateId).addClass('active')
}

$('.nextSlide').click(function() {
    slideCount++;
    clearInterval(slideTimer);
    slider()
    automaticSlider()
});

$('.prevSlide').click(function() {
    slideCount--;
    clearInterval(slideTimer);
    slider()
    automaticSlider()
});
/*********/

/******Menu***** */
var menuTimeout;

function openMenu(tag) {
    clearTimeout(menuTimeout);
    if (!$(tag).hasClass('active')) {
        $('.header-menu .nav-item').removeClass('active');
        $('.header-menu .nav-item .c-mega-menu').fadeOut();
        $('.header-menu .nav-item .nav-link-triangle').fadeOut();
        $(tag).addClass('active');
        $('.c-mega-menu', tag).fadeIn();
        $('.nav-link-triangle', tag).fadeIn();
        $('.c-mega-sub-menu-item').removeClass('active');
        $('.c-mega-sub-menu-item:first-child', tag).addClass('active');
    }
}

$('.header-menu .nav-item').mouseleave(function() {
    menuTimeout = setTimeout(() => {
        $('.header-menu .nav-item').removeClass('active');
        $('.header-menu .nav-item .c-mega-menu').fadeOut();
        $('.header-menu .nav-item .nav-link-triangle').fadeOut();
    }, 500);
});

$('.c-mega-menu').mouseenter(function(e) {
    clearTimeout(menuTimeout);
});

function showSubMenu(tag) {
    const parentTag = $(tag).parent('.c-mega-sub-menu-item')
    if (!$(parentTag).hasClass('active')) {
        $('.c-mega-sub-menu-item').removeClass('active');
        $(parentTag).addClass('active');
    }
}



/****** */
/************************** */