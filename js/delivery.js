document.addEventListener('DOMContentLoaded',function() {

    // FAQ
    $('details').click(function (event) {
        $('details').not(this).removeAttr("open");
    });




});