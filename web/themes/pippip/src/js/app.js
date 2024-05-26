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

// cursor

document.addEventListener('DOMContentLoaded', function() {
    var cursor = document.getElementById('cursor');
    var isClicking = false;

    document.addEventListener('mousemove', function(e) {
        if (!isClicking) return;
        cursor.style.left = (e.pageX - 15) + 'px';
        cursor.style.top = (e.pageY - 15) + 'px';
    });

    document.addEventListener('click', function(e) {
        isClicking = true;

        cursor.style.left = (e.pageX - 15) + 'px';
        cursor.style.top = (e.pageY - 15) + 'px';
        cursor.classList.add('visible');

        setTimeout(function() {
            cursor.classList.remove('visible');
            isClicking = false;
        }, 300);
    });
});



