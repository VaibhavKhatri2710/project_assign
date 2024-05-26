$(document).ready(function () {
    $('.card-content').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 820,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }]
    });

});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $('.card-content').slick('setPosition');
});

