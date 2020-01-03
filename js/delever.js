document.addEventListener('DOMContentLoaded',function() {
    var div = document.querySelector(".rejectionOder");
    var btn_open = document.querySelector('.carentOrdersButton');
    var btn_close = document.querySelector('.rejectionOderSubmit');

        btn_open.addEventListener("click", function (el) {
           el.stopPropagation();
           div.style.display = 'block';
        });

    btn_close.addEventListener("click", function (el) {
        el.stopPropagation();
        div.style.display = 'none';
    });
});