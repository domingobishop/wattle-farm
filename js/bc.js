/*!
 * Additional JS
 * 
 */
$(document).ready(function () {
    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function () {
        $('.navbar-toggle:visible').click();
    });

    // Removes fixed width from .wp-caption div for images
    $(".wp-caption").removeAttr('style');

    var banner = document.getElementById('banner');
    if (banner) {
        function resize() {
            var heights = window.innerHeight - 90;
            document.getElementById("banner").style.height = heights + "px";
        }

        resize();
        window.onresize = function () {
            resize();
        };
    }

    $(window).scroll(function (event) {
        var y = $(this).scrollTop(); //set position from top when to change style in pixels
        if (y >= 300) {
            $('.navbar-header').addClass('resize');
            $('.navbar-header img').addClass('resize');
        } else {
            $('.navbar-header').removeClass('resize');
            $('.navbar-header img').removeClass('resize');
        }
    });
});