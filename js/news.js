document.addEventListener('DOMContentLoaded',function() {
    var container = document.querySelectorAll('.imagecontainer');
    var image,desc,date;

    var btn_close = document.querySelector('#btn');
    var pop_img = document.querySelector('#image');
    var pop_desc = document.querySelector('#description');
    var pop_date = document.querySelector('#date');
    var popap = document.querySelector('#popap');

    btn_close.addEventListener('click', function (e) {
        clear();

    });

    container.forEach(function (elem) {
        elem.addEventListener('click',function (e) {
            clear();

            image = elem.querySelector('.image');
            popap.style.display = "block";

            //console.log(elem.querySelector('.image'));
            desc = elem.querySelector('.description');
            date = elem.querySelector('.date');

            pop_img.innerHTML +=  image.innerHTML;
            pop_desc.innerHTML += desc.innerHTML;
            pop_date.innerHTML += date.innerHTML;

        });
    });

    function clear() {
        popap.style.display = "none";
        pop_img.innerHTML =  '';
        pop_desc.innerHTML = '';
        pop_date.innerHTML = '';
    }



});