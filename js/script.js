document.addEventListener('DOMContentLoaded',function() {

// dom
    var popap_btn = document.querySelector(".popap__btn");
    var popap = document.querySelector(".popap");
    var read = document.getElementsByClassName("readMessage");
    var airbus = document.querySelector(".airBusHidden");
    var item_gallery = document.querySelector(".itemsGallery");
    var btn_radio_mouns = document.querySelector("#checkMouns");
    var btn_radio_year = document.querySelector("#checkYear");
    var mass_radio = Array.from(document.querySelectorAll("[name ='radio']"));
    var price = document.getElementsByClassName("price");
    var mass_num = document.querySelectorAll(".counter");
    const div_robot = document.querySelector(".serviceWorkFoto");
    var mass_arrow = document.querySelectorAll(".infoCounterBtn");
    const div_one = document.querySelector("#one");
    const div_two = document.querySelector("#two");
    const div_three = document.querySelector("#three");
    const div_fore = document.querySelector("#fore");
    const smallCar = document.querySelector("#smallTrack");
    const btn_view = document.querySelector(".showHide");
    const tariff_small = document.querySelector("#small"),
        tariff_medium = document.querySelector("#medium"),
        tariff_large = document.querySelector("#large");

    var btn = $('#button');
    var d = '';
    var counter = 0;
    let counter_robot = 1;
    var cookies = document.cookie;


/*
    if(document.cookie.indexOf( "login=")){
        btn_logout_creation();
    }else {
        btn_login_creation();
    }
*/

    popap_btn.addEventListener("click",function (event) {
        popap.style.opacity = "0";
    });


//синий бордер при клике в галерее
    var div_item_gallery = Array.from(document.querySelectorAll(".galleryItems"));
    div_item_gallery.forEach(function (elem) {
        elem.addEventListener("click", function (event) {
            event.stopPropagation();
            //console.log(div);
            d = event.target.closest("div").closest(".galleryItems");
            d.classList.toggle("clickBorder");
        });

    });


// переключение div в галлереи
    for (var i = 0; i < read.length; i++) {
        read[i].addEventListener("click", function (event) {
            var div = event.target.closest('div').closest('.galleryItems');
            var hid = div.getElementsByClassName("galleryItemsHidden")[0];
            hid.style.display = "block";
            var btn = hid.querySelector("button");
            btn.addEventListener("click", function (event) {
                hid.style.display = "none";
            });
        });
    }
// end

//полет самолета

// end

//анимация при скролле (грузовик, счетчик, самолет)
    var car = document.querySelector(".headerTrackImg");
    var target = $('.aboutText');
    var target2 = $('.rowServiceWork');
    var target3 = $('.rowRates');
    var targetPos2 = target2.offset().top;
    var targetPos = target.offset().top;// offset() - задает или возвращает значение координат для выбранных элементов (относительно документа).
    var targetPos3 = target3.offset().top;
    var winHeight = $(window).height();
    var scrollToElem = targetPos - winHeight;
    var scrollToElem2 = targetPos2 - winHeight;
    var scrollToElem3 = targetPos3 - winHeight;
    $(window).scroll(function () {
        var winScrollTop = $(this).scrollTop();// scrollTop() Возвращает вертикальную позицию прокрутки первого совпавшего элемента в наборе, или устанавливает вертикальную позицию прокрутки всем выбранным элементам в наборе.

        if (winScrollTop > scrollToElem) {
            //сработает когда пользователь доскроллит к элементу с классом .aboutText
            $(car).animate({top: "250px", right: "-100px"}, 2000, "linear");
        }
        if (winScrollTop > scrollToElem2) {
            showCounter();
        }
        if(winScrollTop > scrollToElem3){

            $(airbus).css("display", "block");
            $(airbus).animate({top: "-500px"}, 5000, "linear");
           // $(".tariffsHidden").css("display", "inlineBlock");
            $(".tariffsHidden").animate({marginTop: "0"}, 4000, "linear");
        }

        if(winScrollTop > 300){
            btn.removeClass('vis');
            btn.addClass('show');
        }else{
            btn.removeClass('show');
            btn.addClass('vis');
        }

    });
    $(car).stop();
//_________________end

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, 1000);
    });

//function полет самолета
    mass_radio.forEach(function (element) {
        element.addEventListener("focus", function (event) {
            event.preventDefault();
            event.stopPropagation();
            if (event.target === btn_radio_mouns) {
                addPrice(btn_radio_mouns);
            }
            if (event.target === btn_radio_year) {
                addPrice(btn_radio_year);
            }
        });

    });



// end

//анимация количества перевозок
    function showCounter() {
        var speedCounter = 300;
        var stepCounter = 0;
        var c = 0;
        mass_num.forEach(function (elem) {
            $(elem).animate({top: "0px"}, 1000,"linear", function () {
                c++;
                if (c === mass_num.length)
                    $("#btnCounter").animate({opacity:'1'},500, 'swing');
            });
            speedCounter *= 2;
            stepCounter += 0.5;
        });
    }

//поддержка details
    if (!('open' in document.createElement('details'))) {
        alert("Браузер не поддерживает HTML5 details");
    }

    /* //поддержка html import
     if ("import" in document.createElement("link")) {
          // Этот браузер поддерживает HTML5 Imports.
     }

     // import файла carusel.html
      /*
        const doc = document.querySelector('link[rel="import"]').import;
    // Grab DOM from doc.html's document.
        const text = doc.querySelector('.carousel');
        document.body.appendChild(text.cloneNode(true));

    // Handle Loaded Imports
    function handleLoad(event) {
        console.log('Loaded import: ' + event.target.href);
    }

// Handle Errors.
    function handleError(event) {
        console.log('Error loading import: ' + event.target.href);
    }
    var doc = document.querySelector('link[rel="import"]').import;
    var text = doc.querySelector('.carousel');
    var clone = document.importNode(text.content, true);
    document.querySelector('#newOrdersCarousel').appendChild(clone);
*/



// FAQ
    $('details').click(function (event) {
        $('details').not(this).removeAttr("open");
    });

//переключение роботов
    mass_arrow.forEach(function (elem) {
        elem.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (counter_robot !== 3) {
                smallCar.style.display = "none";
            }
            if (counter_robot > 4) {
                counter_robot = 1;
            }
            showDivReg(counter_robot);
            counter_robot++;

        });
    });


    function showDivReg(el) {
        if (el === 1) {
            div_robot.style.backgroundImage = "url(img/robot2.png)";
            div_one.style.display = "none";
            div_two.style.display = "block";
        }
        if (el === 2) {
            div_robot.style.backgroundImage = "url(img/robot3.png)";
            div_two.style.display = "none";
            div_three.style.display = "block";
        }
        if (el === 3) {
            div_robot.style.backgroundImage = "url(img/robot4.png)";
            div_three.style.display = "none";
            div_fore.style.display = "block";
            smallCar.style.display = "block";
            $(smallCar).animate({bottom: "-6%", right: "40%"}, 1500, "linear");
            /*setTimeout(function(){

            },200);*/
        }
        if (el === 4) {
            div_robot.style.backgroundImage = "url(img/robot.png)";
            div_fore.style.display = "none";
            div_one.style.display = "block";
        }
    }

// наполнение дивов тарифов
    let price_mass_year = {
        small:780,
        medium:2340,
        large:7020
    };
    let price_mass_mouns = {
        small:99,
        medium:399,
        large:899
    };

    function addPrice(e) {
        let val_small = tariff_small.querySelector("span"),
            val_medium = tariff_medium.querySelector(".price"),
            val_large = tariff_large.querySelector(".price");
        //console.log(val_small.innerText);
        if (e === btn_radio_mouns) {
            for(let key in price_mass_mouns){
                if(key==="small")
                    val_small.innerText = price_mass_mouns[key];
                if(key==='medium')
                    val_medium.innerText = price_mass_mouns[key];
                if(key === 'large')
                    val_large.innerText = price_mass_mouns[key];
            }
        }
        if(e === btn_radio_year){
            for(let key in price_mass_year){
                if(key==="small")
                    val_small.innerText = price_mass_year[key];
                if(key==='medium')
                    val_medium.innerText = price_mass_year[key];
                if(key === 'large')
                    val_large.innerText = price_mass_year[key];
            }
        }
    }
/*
    function btn_login_creation() {
        let ul = document.querySelector('#menuList');
        let li = document.createElement('li');
        li.insertAdjacentHTML('afterbegin','<a class="" href="login.html" target = "_blank">Вход/Регистрация</a>');
        ul.insertAdjacentElement('beforeend',li);

    }

    function btn_logout_creation() {
        let ul = document.querySelector('#menuList');
        let li = document.createElement('li');
        li.insertAdjacentHTML('afterbegin','<a class="" href="#" target = "_blank">Выход</a>');
        ul.insertAdjacentElement('beforeend',li);
    }
*/








});




// var str_num = String(mass_num);
//str_num.split("");
/*  for(var j=0; j<mass_num.length; j++){
      var num = mass_num[j];

      $(num).animate({marginTop:"0"},speed,"linear");

  }*/

/*
// анимация счетчика
    function f() {
        var mass_num = document.querySelector("#counter").value;
        var str_num = String(mass_num);
        str_num.split("");
        for(var j=0; j<str_num.length; j++){
            var num = str_num[j];
            num.animate({marginTop:"0"},5000,"linear");
        }
    }



// _________________end

/*
price.forEach(function (element){} {
    });

setTimeout(function(){
    },4000);


    var target = $('.ratesText');
    var targetPos = target.offset().top;
    var winHeight = $(window).height();
    var scrollToElem = targetPos - winHeight;
    $(window).scroll(function(){
        var winScrollTop = $(this).scrollTop();
        if(winScrollTop > scrollToElem){
            //сработает когда пользователь доскроллит к элементу с классом .elem
           // $(item_galery).animate({top:"-200px"}, 2000,"linear");
        }
    });*/
/*
//ajax запрос в файл formdata.php
let form = $("#search"); //id element
form.on("submit", function(event){//вешаем сторонее событие submit на форму
    event.preventDefault();//прерываем событие формы (submit)
    let t = $("#text").val();//записываем в переменную содержимое инпута с id text
    $.ajax("formdata.php",{// создаем запрос в файл {setting }
        metod:"GET",// metod post get
        data:{text: t},//указываем какие данные передаем в запросе
        cahce:false,//нужно ли кешировать файл или запрашивать каждый раз свежие данные true/false
        fail: function(){ console.log("все пропало");},// ошибка -вызываем/пишем функцию обработчика ошибок
        success: function(data){//успешно - вызвваем /пишем функцию обработки полученных данных
            //alert("даннные получены");
                data = JSON.parse(data);//преобразовали полученные данные джейсон объекта в строку
                $("#result").html(data);//записывам полученные данные в елемент с id result
        }

    });
});*/
