$(document).ready(function() {
    $(".carousel").slick({
        dots: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        touchMove: true,
        arrows: true,
        prevArrow: $(".forecast-carousel-controls .prev"),
        nextArrow: $(".forecast-carousel-controls .next")
    });
});