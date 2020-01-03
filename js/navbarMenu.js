document.addEventListener('DOMContentLoaded',function() {
const dropdown_menu = document.querySelector(".dropdownMenu");
const item = document.querySelector(".dropdownItem");
const container = document.querySelector(".rowNavbar");
const btn_burger = document.querySelector(".burger");
const menu_list = document.querySelector(".menuList");

let counter=1;
let counter_dropdown = 1;

    dropdown_menu.addEventListener("click", function (e) {
        e.stopPropagation();
        if(counter % 2 !== 0)
        show_container(item);
        if(counter % 2 === 0)
        hide_container(item);
        counter++;
    });

    container.addEventListener("click", function (e) {
        //default_brouser(e);
        e.stopPropagation();
        hide_container(item);

    });

    btn_burger.addEventListener("click", function (e) {
        //default_brouser(e);
        e.stopPropagation();
        if(counter_dropdown % 2 !== 0){
            show_container(menu_list);
            btn_burger.style.backgroundImage = "url(img/icon/cross.svg)";
        }
        if(counter_dropdown % 2 === 0){
            hide_container(menu_list);
            btn_burger.style.backgroundImage = "url(img/icon/menu.svg)";
        }
        counter_dropdown++;
    })


});
    function show_container(div) {
        div.style.display = "block";
    }
    function hide_container(div) {
        div.style.display = "none";
    }
    function default_brouser(e) {
        e.stopPropagation();
        e.preventDefault();
    }