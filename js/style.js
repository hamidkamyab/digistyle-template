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