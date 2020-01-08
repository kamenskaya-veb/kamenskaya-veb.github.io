document.addEventListener('DOMContentLoaded',function() {
    var container_fluid = document.querySelector('#container_fluid');
  var p_first = document.querySelector('#p_first');


  var container = document.querySelector('#container');
  var map_area = document.querySelectorAll('area');
  var div_hide = document.querySelector('#div_outer');
  var span_address = div_hide.querySelectorAll('span');
    var box = document.querySelector('.loader');
 // map area
    var volyn = document.querySelector('#volyn_region');
    var zhytomyr = document.querySelector('#zhytomyr_region');
    var roven = document.querySelector('#roven_region');
    var lvov = document.querySelector('#lvov_region');
    var frankivsk = document.querySelector('#ivano-frankivsk_region');
  var ternopil = document.querySelector('#ternopil_region');
    var khmelnisk = document.querySelector('#khmelnisk_region');
    var chernivtsi = document.querySelector('#chernivtsi_region');
    var vinnitsa = document.querySelector('#vinnitsa_region');
    var kyiv = document.querySelector('#kyiv_region');
    var chernigov = document.querySelector('#chernigov_region');
    var sumy = document.querySelector('#sumy_region');
    var poltava = document.querySelector('#poltava_region');
    var cherkassy = document.querySelector('#cherkassy_region');
    var kirovograd = document.querySelector('#kirovograd_region');
    var dnepr = document.querySelector('#dnepr_region');
    var nikolaiv = document.querySelector('#nikolaiv_region');
    var odessa = document.querySelector('#odessa_region');
    var zaporoze = document.querySelector('#zaporoze_region');
    var luganck = document.querySelector('#luganck_region');
    var donetsk = document.querySelector('#donetsk_region');
    var kherson = document.querySelector('#kherson_region');
    var kharkov = document.querySelector('#kharkov_region');

    var adress =
        {
            'nikolaiv':{
                adressa: "4000, г.Николаев, ул. Строителей, д. 2",
                email: 'myemail@ua.rew',
                phone: '(0512) 56-28-02',
                opening: 'пн-пт 8:00-17:00'
            },
            'lvov':{
                adressa: "89541, г.Львов, ул. Строителей, д. 2",
                email: 'myemail@ua.rew',
                phone: '(0047) 56-28-02',
                opening: 'пн-пт 8:00-17:00'
            }
        };

   /* for (var key in adress){
       // console.log(key);// key - nikolaiv, lvov
        //console.log(adress[key].email);// myemail@ua.rew
    }*/

    container_fluid.addEventListener('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
        box.style.display = 'none';
        div_hide.style.display = 'none';
        remove_adr();
    });







      p_first.addEventListener('click', function (event) {
          event.stopPropagation();
          event.preventDefault();
             $(container).animate({opacity:1}, 500);
      });

    map_area.forEach(function (el) {
       el.addEventListener('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
           getClickXY(event);
           div_position();
           switch (event.target) {
               case volyn:
                   break;
               case  zhytomyr:
                   break;
               case  roven:
                   break;
               case  lvov:
                   adr('lvov');
                   break;
               case  frankivsk:
                   break;
               case ternopil:
                   break;
               case  khmelnisk:
                   break;
               case   chernivtsi:
                   break;
               case  vinnitsa:
                   break;
               case  kyiv:
                   break;
               case  chernigov:
                   break;
               case sumy:
                   break;
               case  poltava:
                   break;
               case  cherkassy:
                   break;
               case kirovograd:
                   break;
               case dnepr:
                   break;
               case nikolaiv:
                   adr('nikolaiv');
                   break;
               case   odessa:
                   break;
               case zaporoze:
                   break;
               case  luganck:
                   break;
               case donetsk:
                   break;
               case  kherson:
                   break;
               case kharkov:
                   break;
           }



       });
    });


    div_hide.addEventListener('click', function (event) {
        event.stopPropagation();
        event.preventDefault();
    });

//перетаскивание блока drag and drop
    var ie = 0;
    var op = 0;
    var ff = 0;
    var browser = navigator.userAgent;
    if (browser.indexOf("Opera") != -1) op = 1;
    else {
        if (browser.indexOf("MSIE") != -1) ie = 1;
        else {
            if (browser.indexOf("Firefox") != -1) ff = 1;
        }
    }
    delta_x = 0;
    delta_y = 0;
    /* Ставим обработчики событий на нажатие и отпускание клавиши мыши */
    div_hide.onmousedown  = saveXY;
    if (op || ff) {
        div_hide.addEventListener("onmousedown", saveXY, false);
    }
    document.onmouseup = clearXY;
    /* При нажатии кнопки мыши попадаем в эту функцию */
    function saveXY(obj_event) {

        /* Получаем текущие координаты курсора */
        if (obj_event) {
            x = obj_event.pageX;
            y = obj_event.pageY;
        }
        else {
            x = window.event.clientX;
            y = window.event.clientY;
            if (ie) {
                y -= 2;
                x -= 2;
            }
        }
        /* Узнаём текущие координаты блока */
        x_block = div_hide.offsetLeft;
        y_block = div_hide.offsetTop;
        /* Узнаём смещение */
        delta_x = x_block - x;
        delta_y = y_block - y;
        /* При движении курсора устанавливаем вызов функции moveWindow */
        document.onmousemove = moveBlock;
        if (op || ff)
            document.addEventListener("onmousemove", moveBlock, false);
    }
    function clearXY() {
        document.onmousemove = null; // При отпускании мыши убираем обработку события движения мыши
    }
    function moveBlock(obj_event) {
        /* Получаем новые координаты курсора мыши */
        if (obj_event) {
            x = obj_event.pageX;
            y = obj_event.pageY;
        }
        else {
            x = window.event.clientX;
            y = window.event.clientY;
            if (ie) {
                y -= 2;
                x -= 2;
            }
        }
        /* Вычисляем новые координаты блока */
        new_x = delta_x + x;
        new_y = delta_y + y;
        div_hide.style.top = new_y + "px";
        div_hide.style.left = new_x + "px";
    }

// end drag and drop



    //позициониование маячка по клику
    function getClickXY(event)
    {
        var clickX = (event.layerX == undefined ? event.offsetX : event.layerX) ;
        var clickY = (event.layerY == undefined ? event.offsetY : event.layerY) ;
       // alert('Координаты клика: '+ clickX +' x '+ clickY);
        //var box = document.querySelector('.loader');
        box.style.top = clickY +'px';
        box.style.left = clickX +'px';
        box.style.display = 'block';
    }

    //функция всплытия дива
    function div_position() {
        div_hide.style.display = 'block';
       // $(div_hide).animate({display: 'block'},500);
    }
// заполнение адресса
    function adr(reg) {
        for (var key in adress){
            if(key === reg){
                for(var i=0; i<span_address.length; i++){
                    span_address[0].innerHTML = adress[key].adressa;
                    span_address[1].innerHTML = adress[key].email;
                    span_address[2].innerHTML = adress[key].phone;
                    span_address[3].innerHTML = adress[key].opening;
                }
            }
        }
    }
//очистка адреса
    function remove_adr() {
        for(var i=0; i<span_address.length; i++){
            span_address[i].innerHTML = '';
            span_address[i].innerHTML = '';
        }
    }


});