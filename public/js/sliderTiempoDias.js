$(document).ready(function() {
    $(".carousel").slick({
        dots: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        touchMove: true,
        arrows: true,
        prevArrow: $(".forecast-carousel-controls .prev"),
        nextArrow: $(".forecast-carousel-controls .next")
    });
});