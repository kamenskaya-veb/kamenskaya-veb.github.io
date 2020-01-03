document.addEventListener('DOMContentLoaded',function() {

    var filter_reset = document.querySelector('#filter_reset');
    var container = document.querySelectorAll('.galleryItems');
    var filter = document.querySelector('#filter');
    var input = filter.querySelectorAll('input');
    var input_type = document.querySelector('#type');
    var input_region = document.querySelector('#region');
    var input_town = document.querySelector('#town');
    var input_tarifPlane = document.querySelector('#tarifPlane');
    var select_type = document.querySelector('#selectType');
    var select_region = document.querySelector('#selectRegion');
    var select_town = document.querySelector('#selectTown');
    var select_tariff_plane = document.querySelector('#selectTarifPlane');
    var li_type  = select_type.querySelectorAll('li');
    var li_tariff = select_tariff_plane.querySelectorAll('li');

    var value_type = input_type.value;
    var value_reg = input_region.value;
    var value_town = input_town.value;
    var value_tariff = input_tarifPlane.value;

    var div_type_face = Array.from(document.querySelectorAll('.typeFace'));
    var div_flag = Array.from(document.querySelectorAll('.tariffPlan'));
    var div_info_citi = Array.from(document.querySelectorAll('.infoCiti'));
    var val;
    var arr=[];
   // var container = $(".galleryItems:visible");

    var region_mass = [
        {image:"img/flags/Vinnytsia.png", region:"Винницкая область"},
        {image: "img/flags/45px-Coat_of_Arms_of_Volyn_Oblast.svg.png", region:"Волынская область"},
        {image:"img/flags/dnipro.png", region:"Днепропетровская область"},
        {image:"img/flags/Donetsk.png", region:"Донецкая область"},
        {image:"img/flags/Zhytomyr.png", region:"Житомирская область"},
        {image:"img/flags/Zaporizhia.png", region:"Запорожская область"},
        {image:"img/flags/45px-CarpathianRutheniaCoA.svg.png", region:"Закарпатская область"},
        {image:"img/flags/Coat_of_Arms_of_Ivano-Frankivsk_Oblast.svg.png", region:"Ивано-Франковская область"},
        {image:"img/flags/Kyiv_Oblast.png", region:"Киевская  область"},
        {image:"img/flags/Kirovohrad.png", region:"Кировоградская область"},
        {image:"img/flags/Luhansk.png", region:"Луганская область"},
        {image:"img/flags/45px-Coat_of_Arms_of_Lviv_Oblast.png", region:"Львовская область"},
        {image:"img/flags/Mykolaiv.png", region:"Николаевская область"},
        {image:"img/flags/odessa.png", region:"Одесская область"},
        {image:"img/flags/Poltava.png", region:"Полтавская область"},
        {image:"img/flags/45px-Coat_of_Arms_of_Rivne_Oblast.svg.png", region:"Ровенская область"},
        {image:"img/flags/Sumy_Oblast.svg", region:"Сумская область"},
        {image:"img/flags/Coat_of_Arms_of_Ternopil_Oblast.svg.png", region:"Тернопольская область"},
        {image:"img/flags/Kherson.png", region:"Херсонская область"},
        {image:"img/flags/kharkiv.png", region:"Харьковская область"},
        {image:"img/flags/Coat_of_Arms_of_Khmelnytskyi_Oblast.svg.png", region:"Хмельницкая область"},
        {image:"img/flags/Coat_of_Arms_of_Cherkasy_Oblast.svg.png", region:"Черкасская область"},
        {image:"img/flags/Coat_of_Arms_of_Chernivtsi_Oblast.svg.png", region:"Черновицкая область"},
        {image:"img/flags/chernigiv.png", region:"Черниговcкая область"}
    ];
    var citi_mass = {
        "Винницкая область":[
            {image:"img/flags_vinniza/Bar.png", name: "Бар"},
            {image:"img/flags_vinniza/Bershad.png", name: "Бершадь"},
            {image:"img/flags_vinniza/Vinnitsia.png", name: "Винница"},
            {image:"img/flags_vinniza/gaicin.jpg", name: "Гайсин"},
            {image:"img/flags_vinniza/none.png", name: "Гнивань"},
            {image:"img/flags_vinniza/zhmerynka.PNG", name: "Жмеринка"},
            {image:"img/flags_vinniza/Illinci.gif", name: "Ильинцы"},
            {image:"img/flags_vinniza/Kozyatyn.jpg", name: "Казатин"},
            {image:"img/flags_vinniza/kalinovka.png", name: "Калиновка"},
            {image:"img/flags_vinniza/Ladyzhyn.jpg", name: "Ладыжин"},
            {image:"img/flags_vinniza/Lypovets.png", name: "Липовец"},
            {image:"img/flags_vinniza/Mohyliv.png", name: "Могилев-Подольский"},
            {image:"img/flags_vinniza/Nemyriv.png", name: "Немиров"},
            {image:"img/flags_vinniza/Pohrebysche.PNG", name: "Погребище"},
            {image:"img/flags_vinniza/tulchin.jpg", name: "Тульчин"},
            {image:"img/flags_vinniza/Hmilnyk.png", name: "Хмельник"},
            {image:"img/flags_vinniza/shargorod.png", name: "Шаргород"},
            {image:"img/flags_vinniza/Yampil.png", name: "Ямполь"}
        ]
    };




    input.forEach(function (el) {
       el.addEventListener('click', function (event) {
           switch (event.target) {
               case input_type:
                   show(select_type);
                   click_li(li_type,input_type,div_type_face);
                   break;
               case input_tarifPlane:
                   show(select_tariff_plane);
                   click_li(li_tariff, input_tarifPlane, div_flag);
                   break;
               case input_region:
                   show(select_region);
                   filling_ul(select_region,input_region);
                   break;
               case input_town:
                   show(select_town);
                   filling_town(select_town,input_town,div_info_citi);


           }
       }); 
    });
//наполнение области
    function filling_ul(ul,inp) {
        for(var i = 0; i < region_mass.length; i++){
           ul.insertAdjacentHTML('beforeend','<li title="'+ region_mass[i].region +'"><img src="'+ region_mass[i].image +'"' +' alt="герб" > <b>'+ region_mass[i].region +'</b></li>');
        }
        var li = ul.querySelectorAll('li');
        li.forEach(function (e) {
            e.addEventListener('click', function (event) {
                val = event.target.innerHTML;
                inp.value = val;
                e.closest('ul').style.display = 'none';
            });
        });
    }
//наполнение городов
    function filling_town(ul,i,d) {
        var r = input_region.value;
        for(var key in citi_mass){
           // console.log(citi_mass[key][key]);
            if (key === r){
                citi_mass[key].forEach(function (el) {
                    ul.insertAdjacentHTML('beforeend','<li title="'+ el.name+'"><img src="'+ el.image +'"' +' alt="герб" > <b>'+ el.name +'</b></li>');
                });
            }else {
                i.value = 'Выберите регион';
            }
        }
        var li2 = ul.querySelectorAll('li');
        li2.forEach(function (e) {
            e.addEventListener('click', function (event) {
                i.value = event.target.innerText;
                e.closest('ul').style.display = 'none';
                d.forEach(function (e) {
                    var w = i.value.toLowerCase().trim();//приводим к нижнему регистру/обрезаем пробелы
                    var q = e.innerHTML.toLowerCase().trim();
                    if(w !== q){
                        e.closest('div').closest('.galleryItems').style.display = "none";
                    }else{
                        e.closest('div').closest('.galleryItems').style.display = "block";
                    }
                });
            });
        });
    }

    function show(e) {e.style.display = "block";}

// выборка по фильтру
     function click_li(mass_li,input,div) {
         mass_li.forEach(function (e) {
            e.addEventListener('click',function (event) {
                val = event.target.innerHTML;
                input.value = val;
                e.closest('ul').style.display = 'none';
                div.forEach(function (e) {
                    var w = input.value.toLowerCase().trim();//приводим к нижнему регистру/обрезаем пробелы
                    var q = e.innerHTML.toLowerCase().trim();
                    if(w !== q){
                        e.closest('div').closest('.galleryItems').style.display = "none";
                    }else{
                        e.closest('div').closest('.galleryItems').style.display = "block";
                    }
                });

            });
         });
     }
//сброс фильтра
    filter_reset.addEventListener('click', function (e) {
       container.forEach(function (e) {
           e.closest('div').closest('.galleryItems').style.display = "block";
       });
       input_town.value = value_town;
       input_type.value = value_type;
       input_region.value = value_reg;
       input_tarifPlane.value = value_tariff;
    });



});