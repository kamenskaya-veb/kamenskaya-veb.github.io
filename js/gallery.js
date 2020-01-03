document.addEventListener('DOMContentLoaded',function() {
  const prev = document.querySelector('#prev');
   const next = document.querySelector('#next');
    const list = document.querySelector('.containerCarusel');
    let list_width = window.getComputedStyle(list);
    let lwidth = list_width.width;

   const listElems = document.querySelectorAll('.carouselItem');
    let width = 240; // ширина картинки
    let count = 3; // видимое количество изображений
    let position = 0; // положение ленты прокрутки

  prev.addEventListener('click', function (e) {
      e.stopPropagation();
      e.preventDefault();
      // сдвиг влево
      position += width * count;
      // последнее передвижение влево может быть не на 3, а на 2 или 1 элемент
      position = Math.min(position, 0);
      $(list).animate({marginLeft: position + 'px' }, 1000, "linear");
      //list.style.marginLeft = ;
      
  });
    next.addEventListener('click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        position -= width * count;
        position = Math.max(position, -width * (listElems.length - count));
       // list.style.marginLeft = position + 'px';
        $(list).animate({marginLeft: position + 'px' }, 1000, "linear");
    });




    
    
    
    
    
    
});