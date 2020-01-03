document.addEventListener('DOMContentLoaded',function() {
    var btn = $('#button');

   $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.removeClass('vis');
            btn.addClass('show');
        } else {
            btn.removeClass('show');
            btn.addClass('vis');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, 1000);
    });

});
