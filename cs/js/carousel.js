$(document).ready(function () {
    $("#carousel-example-1").carousel({interval: 5000});
});

$(document).ready(function () {
    $('#carousel-example-1').hammer().on('swipeleft', function () {
        $(this).carousel('next');
    })
    $('#carousel-example-1').hammer().on('swiperight', function () {
        $(this).carousel('prev');
    })
});