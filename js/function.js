document.addEventListener('DOMContentLoaded',function() {

    function default_brouser(e) {
        e.stopPropagation();
        e.preventDefault();
    }

    function btn_login_creation() {
        let ul = document.querySelector('#menuList');
        let li = document.createElement('li');
        li.insertAdjacentHTML('afterbegin', '<a class="" href="../login.html" target = "_blank">Вход/Регистрация</a>');
        ul.insertAdjacentElement('beforeend', li);

    }

    function btn_logout_creation() {
        let ul = document.querySelector('#menuList');
        let li = document.createElement('li');
        li.insertAdjacentHTML('afterbegin', '<a class="" href="#" target = "_blank">Выход</a>');
        ul.insertAdjacentElement('beforeend', li);
    }


});