document.addEventListener('DOMContentLoaded',function() {
    var container = document.querySelector('.content');
    var robot_div = document.querySelector('.img');
    $(container).animate({opacity:1}, 3000,  'swing');

    setTimeout(show, 2000);

    function show(){
        robot_div.classList.remove('start');
        robot_div.classList.add('stop');
    }


});
