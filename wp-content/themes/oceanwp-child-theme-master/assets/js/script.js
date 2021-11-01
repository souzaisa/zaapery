jQuery.noConflict();

jQuery(function($) {
    $(document).ready(function() {
        $('.parallax').parallax();
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true,
            duration: 50,
            onCycleTo: true
        });

        $('.next').click(function() {
            $('.carousel').carousel('next');
        });
        $('.prev').click(function() {
            $('.carousel').carousel('prev');
        });
    });
    $('.perguntas').slideToggle("fast");

    $(".toggle").click(function() {
        var id = $(this).data('id');
        $('#' + id).slideToggle("fast");
        $(this).find("i").toggleClass("down");
    });

});