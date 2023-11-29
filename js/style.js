/************Header********** */
var timeout;
$('.header-cartBox').on('mouseenter', function() {
    visibleTag('.header-cart', 'show')
});

$(".header-cartBox").on("mouseleave", function() {
    visibleTag('.header-cart', 'hidden')
});

$('.header-cart').on('mouseenter', function() {
    clearTimeout(timeout);
});

$(".header-cart").on("mouseleave", function() {
    visibleTag('.header-cart', 'hidden')
});

$('.header-userBox').on('mouseenter', function() {
    visibleTag('.header-user-msg', 'show')
});

$('.header-userBox').on("mouseleave", function() {
    visibleTag('.header-user-msg', 'hidden')
});

function visibleTag(tag, status = '') {
    if (status == 'show') {
        $(tag).fadeIn();
    }
    if (status == 'hidden') {
        timeout = setTimeout(() => {
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

/************************** */