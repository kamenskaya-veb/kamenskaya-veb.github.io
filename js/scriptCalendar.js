document.addEventListener('DOMContentLoaded',function() {
  function Calendar2(id, year, mounth) {
    var Dlast = new Date(year, mounth + 1, 0).getDate(),
        D = new Date(year, mounth, Dlast),
        DNlast = new Date(D.getFullYear(), D.getMonth(), Dlast).getDay(),
        DNfirst = new Date(D.getFullYear(), D.getMonth(), 1).getDay(),
        calendar = '<tr>',
        month = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
    if (DNfirst !== 0) {
      for (var i = 1; i < DNfirst; i++) calendar += '<td>';
    } else {
      for (var i = 0; i < 6; i++) calendar += '<td>';
    }
    for (var i = 1; i <= Dlast; i++) {
      if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
        calendar += '<td class="today day_border_white">' + i;
      } else {
        calendar += '<td class="day_border_white">' + i;
      }
      if (new Date(D.getFullYear(), D.getMonth(), i).getDay() == 0) {
        calendar += '<tr>';
      }
    }
    for (var i = DNlast; i < 7; i++) calendar += '<td>&nbsp;';
    document.querySelector('#' + id + ' tbody').innerHTML = calendar;
    document.querySelector('#' + id + ' thead td:nth-child(2)').innerHTML = month[D.getMonth()] + '<br>' + D.getFullYear();
    document.querySelector('#' + id + ' thead td:nth-child(2)').dataset.month = D.getMonth();
    document.querySelector('#' + id + ' thead td:nth-child(2)').dataset.year = D.getFullYear();
    if (document.querySelectorAll('#' + id + ' tbody tr').length < 6) {  // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
      document.querySelector('#' + id + ' tbody').innerHTML += '<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;';
    }
  }

  Calendar2("calendar2", new Date().getFullYear(), new Date().getMonth());
// переключатель минус месяц
  document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(1)').onclick = function () {
    Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month) - 1);
  }
// переключатель плюс месяц
  document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(3)').onclick = function () {
    Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month) + 1);
  }
  var value_d ='';
  var value_m ='';
  var value_y ='';
  var str = '';
  var day = document.querySelectorAll('tbody tr td');

  for(var d=0; d<day.length; d++){
    day[d].addEventListener('click', function (event) {
      var el=event.target;
      value_d = el.innerText;
      el.classList.remove('day_border_white');
      el.classList.toggle("day_border");
      var td = document.querySelector('#year_month');
      value_m = td.getAttribute('data-month');
      value_y = td.getAttribute('data-year');
      str = value_d + '.' + value_m +'.' + value_y;
      console.log(str);
    });
  }


});