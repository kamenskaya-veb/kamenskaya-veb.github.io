document.addEventListener('DOMContentLoaded',function() {
    var inp = Array.from(document.querySelectorAll('.input_style')) ;
    var div  = document.querySelector('.input_group');
    var select = div.querySelector('select');
    var requestSmall = document.querySelector('#request_small');
    var requestMedium = document.querySelector('#request_medium');
    var requestLarge = document.querySelector('#request_large');
    var massSmall = ['Мелкая мебель','Перевозка пассажиров','Личные вещи','Покупки','Животные','Прочее до 500 кг'],
         massMedium = ['Крупногабаритная мебель','Продукты питания','Строительные материалы','Бытовая техника','Прочее до 5 тонн'],
        massLarge = ['Техника','Мебель','Продукты питания','Сыпучие грузы','Автоперевозки'];

    setTimeout(show, 500);

// валидация select /textarea
    inp.forEach(function (elem) {
        elem.addEventListener('blur', function (event) {

            if(event.target.value === ''){
                console.log(event.target.value);
                event.target.classList.add('inp_invalid');
            }else{event.target.classList.remove('inp_invalid');}
        });
    });

    requestSmall.addEventListener('click', function (event) {
        event.target.style.backgroundColor = 'rgba(65,227,168,.2)';
        clean();
        fillingSelect(massSmall);
    });

    requestMedium.addEventListener('click', function (event) {
        event.target.style.backgroundColor = 'rgba(254,245,104,.2)';
       clean();
        fillingSelect(massMedium);
    });

    requestLarge.addEventListener('click', function (event) {
        event.target.style.backgroundColor = 'rgba(254,139,183,.2)';
        clean();
        fillingSelect(massLarge);
    });



//функция удаления очистки option
    function clean() {
      Array.from(select.querySelectorAll('option')).forEach(function (el) {
           //el.innerHTML = '';
           el.remove();
        });
    }
//функция наполнения select
    function fillingSelect(mass) {
       for(var i=0; i<mass.length; i++){
           select.insertAdjacentHTML('beforeend', '<option>'+mass[i]+'</option>');
       }


    }

//функция анимации тарифного плана
    function show() {
        document.querySelectorAll('.square').forEach(function (elem) {
            $(elem).animate({marginTop:'0'},500, 'swing');
        });
    }






});