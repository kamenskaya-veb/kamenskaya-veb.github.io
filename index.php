<?php  session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>ВЕКТОР</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cach">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
     <script defer src="libs/jquery/jquery-3.4.1.min.js"></script>
     <script defer src="libs/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
     <!--<script src="libs/rateit.js-master/scripts/jquery.rateit.min.js"></script>
      <link rel="import" href="carusel.html"onload="handleLoad(event)" onerror="handleError(event)" >   <script defer src="js/function.js"></script>-->
    <script defer src="js/script.js"></script>
    <script defer src="js/navbarMenu.js"></script>
    <script defer src="js/gallery.js"></script>
    <script defer src="js/news.js"></script>

    <link rel="stylesheet" type="text/css" href="libs/bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="libs/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style/style.css">
    <link rel="stylesheet" type="text/css" href="css/media/mediaLogin.css">
    <link rel="stylesheet" type="text/css" href="css/fonts/fonts.css">
    <link rel="stylesheet" href="css/style/navbarMenu.css">
    <link rel="stylesheet" href="css/media/navbarMenu.css">
    <link rel="stylesheet" href="css/media/media.css">
    <link rel="stylesheet" href="css/style/carusel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style/up.css">


</head>
<body>
<a id="button" class="vis"></a>
<div class="popap">
    <button class="popap__btn">X</button>
    <br>
    <span> Данный сайт реализовывается в учебных целях в части Frontend. <br> Находится в процессе разработки. <br>
    Вопросы пишите на email: kamenskaya77@ukr.net <br>
    Спасибо за понимание</span>
</div>
    <div class="container-fluid">
        <div class="row rowNavbar">
            <div class="offset-1 col-11 ">
                <nav class="navbarMenu">
                    <a class="" href="#info"><img src="img/vektor.png" alt="" width="130" height="50"></a>
                    <button class="burger"></button>
                    <ul class="menuList" id="menuList">
                        <li><a class="" href="index.php">Главная</a></li>
                        <li><a class="" href="delivery.html ">Перевозчики</a></li>
                        <li><a class="" href="#">Заказчики</a></li>
                        <li class="dropdownMenu"><a class="" href="#">Сервис &#8594;</a>
                            <ul class="dropdownItem" >
                                <li><a href="#info">О нас</a></li>
                                <li><a href="#work">Как это работает?</a></li>
                                <li><a href="#news">Новости</a></li>
                                <li><a href="contacts.html">Контакты</a></li>
                            </ul>
                        </li>
                        <li><a class="" href="#qwert">Тарифы</a></li>
                        <?php

                        if(isset($_COOKIE ['login'])){ ?>
                            <li><a href="php/formlog.php?exit=1">Выход</a></li>
                        <?php }else { ?>
                            <li><a  href='login.html'>Вход/Регистрация</a></li>
                        <?php };?>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="row rowHeader">
            <div class= "headerTrackImg"></div>
            <div class="offset-lg-2 col-lg-5 offset-1 col-11 headerLogo">
                <h1>Перевози грузы</h1>
                <span>быстрее, дешевле, безопаснее с</span>
                <div class="headerLogoFoto"></div>
                <div class="headerLogoButton">
                    <button name="submit" class="btnView btn btn_media">Разместить груз</button>
                </div>
                <div class ="headerLogoLang">
                    <ul class ="langList">
                        <li class="langItem"><a href="">Rus </a>&#149;</li>
                        <li class="langItem"><a href="">Eng </a></li>
                    </ul>
                </div>
            </div>
      </div>


        <div class="row rowAbout">
            <div class="offset-3 col-9 aboutSvg">
                <div class="AboutsvgItem">
                    <svg class="verticalCircle"  fill="#57CFE8">
                        <line x1="50%" y1="0" x2="50%" y2="50%" stroke="#57CFE8" stroke-width="5" />
                        <circle  cx="50%" cy="50%" />
                        <text x="39%" y="54%"  fill="#ffffff"  font-weight="500"  >Кто мы ?</text>
                    </svg>

                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 offset-lg-3 offset-1 col-10 offset-1 aboutText" id="info">
                <p>Онлайн-сервис организации перевозок грузов в формате </p>
                <p class="aboutTextTransform"> "грузоотправитель -  грузоперевозчик"</p>
                <span class="text_align">Наш сервис помогает быстро организовать любые виды перевозок! Разместите свой груз в нашем каталоге и перевозчики сами будут предлагать Вам цену и условия перевозки.
                    <br> Выбирайте лучшее предложение, тем самым экономте время, деньги и свои нервы!
                </span>
            </div>
            <div class="offset-lg-8 col-lg-3 offset-lg-1 col-12  aboutTextCounter">
               <div class="span_box">
                    <span class="counter">2</span>
                </div>
                <div class="span_box">
                    <span class="counter">1</span >
                </div>
                <div class="span_box">
                    <span class="counter">4</span>
                </div>
            </div>
            <div class="offset-lg-9 col-lg-3  col-12 button_box">
                <button id="btnCounter">перевозок сегодня</button>
            </div>
        </div>
        <div class="row rowServiceWork ">
            <div class="col-12 serviceWorkSvg " id="work">
                <svg class="horizontalLine" >
                    <line x1="0"  x2="100%"  stroke="#57CFE8" stroke-width="9" />
                </svg>
                <svg class="horizontalCircle"  fill="#57CFE8">
                    <circle  cx="8%"cy="50%" />
                    <text x="0" y="55%"  fill="#ffffff"  font-weight="500"  >Как работает сервис?</text>
                </svg>
            </div>
            <div class=" col-12 serviceWorkFoto">
                <button name="submit"  class="btnView showHide btn btn_media ">Разместить груз</button>
                <img id="smallTrack" src="img/daf.png" alt="image track">
            </div>
            <div class="offset-lg-3 col-lg-6 offset-lg-3 offset-1 col-10 offset-1 serviceWorkInfo" id="one">
                <div class="infoRegistration">
                    <p>Регистрация и создание заказа</p>

                    <span>Для начала Вам нужно зарегистрироваться и создать заказ для перевозчика с подробными параметрами и описанием груза.</span>
                </div>
                <div class="infoCounter">
                    <span>01</span><br>
                    <button class="infoCounterBtn">&#8594;</button>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 offset-lg-3 offset-1 col-10 offset-1 serviceWorkInfo serviceWorkInfo" id="two">
                <div class="infoRegistration">
                    <p>ожидание предложений от перевозчиков</p>

                    <span>После размещения Вашей заявки остается ждать предложений от перевозчиков, уведомления о предложениях прийдет Вам на почту или смс.</span>
                </div>
                <div class="infoCounter">
                    <span>02</span><br>
                    <button class="infoCounterBtn">&#8594;</button>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 offset-lg-3 offset-1 col-10 offset-1 serviceWorkInfo serviceWorkInfo" id="three">
                <div class="infoRegistration">
                    <p>подтверждение выполненного заказа</p>
                    <span>Подтвердите успешную сделку, оставте отзыв перевозчику за выполненную работу.</span>
                </div>
                <div class="infoCounter">
                    <span>03</span><br>
                    <button class="infoCounterBtn">&#8594;</button>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 offset-lg-3 offset-1 col-10 offset-1 serviceWorkInfo serviceWorkInfo" id="fore">
                <div class="infoRegistration">
                    <p>выбор перевозчика</p>
                    <span>Выбираете лучшее предложение по цене и рейтингу перевозчика. Это обеспечит Вам высокое качество и экономию средств.</span>
                </div>
                <div class="infoCounter">
                    <span>04</span><br>
                    <button class="infoCounterBtn">&#8594;</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row rowNewOrders">
            <div class="col-12 newOrdersHead">
                <span>новые заказы</span> <br>
                <span>на грузоперевозку</span>
            </div>
            <div class="offset-1 col-11 newOrdersHeadCarousel">
                <p>Лучшие перевозчики</p>
            </div>
            <div class="col-12 newOrdersCarousel" id="newOrdersCarousel">
                <div class="control_btn">
                    <button class="control_btn__btn" id="prev">< </button>
                    <button class="control_btn__btn" id="next" >></button>
                </div>
                <div class="viewArea">
                <div class="containerCarusel">
                    <div class="carouselItem ">
                        <span>Компания</span><br>
                        <q>Деловые линии</q>
                        <div class="avatarSmall">
                            <img src="img/avatar/ava1.jpg" alt="">
                        </div>
                        <div class="carouselItemInfo">
                            <span>Киев</span><br>
                            <span >&#9993; <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> </span>
                            <br>
                            <mark>small</mark>
                            <span><b>+</b>243 <i>-</i>9</span>
                        </div>
                    </div>
                    <div class="carouselItem ">
                        <span>Частное лицо</span><br>
                        <q>Петров А.Д.</q>
                        <div class="avatarSmall">
                            <img src="img/avatar/ava2.jpg" alt="">
                        </div>
                        <div class="carouselItemInfo">
                            <span>Киев</span><br>
                            <span >&#9993; <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> </span>
                            <br>
                            <mark>small</mark>
                            <span><b>+</b>243 <i>-</i>9</span>
                        </div>
                    </div>
                    <div class="carouselItem ">
                        <span>Компания</span><br>
                        <q>Ракурс</q>
                        <div class="avatarSmall">
                            <img src="img/avatar/ava4.jpg" alt="">
                        </div>
                        <div class="carouselItemInfo">
                            <span>Киев</span><br>
                            <span >&#9993; <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> </span>
                            <br>
                            <mark>small</mark>
                            <span><b>+</b>243 <i>-</i>9</span>
                        </div>
                    </div>
                    <div class="carouselItem ">
                        <span>Компания</span><br>
                        <q>Олимп</q>
                        <div class="avatarSmall">
                            <img src="img/avatar/ava5.jpg" alt="">
                        </div>
                        <div class="carouselItemInfo">
                            <span>Киев</span><br>
                            <span >&#9993; <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> </span>
                            <br>
                            <mark>small</mark>
                            <span><b>+</b>243 <i>-</i>9</span>
                        </div>
                    </div>
                    <div class="carouselItem ">
                        <span>Частное лицо</span><br>
                        <q>Васечкин</q>
                        <div class="avatarSmall">
                            <img src="img/avatar/ava6.jpg" alt="">
                        </div>
                        <div class="carouselItemInfo">
                            <span>Киев</span><br>
                            <span >&#9993; <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> </span>
                            <br>
                            <mark>small</mark>
                            <span><b>+</b>243 <i>-</i>9</span>
                        </div>
                    </div>
                    <div class="carouselItem ">
                        <span>Компания</span><br>
                        <q>Деловые линии</q>
                        <div class="avatarSmall">
                            <img src="img/avatar/ava1.jpg" alt="">
                        </div>
                        <div class="carouselItemInfo">
                            <span>Киев</span><br>
                            <span >&#9993; <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> </span>
                            <br>
                            <mark>small</mark>
                            <span><b>+</b>243 <i>-</i>9</span>
                        </div>
                    </div>
                    <div class="carouselItem ">
                        <span>Компания</span><br>
                        <q>Деловые линии</q>
                        <div class="avatarSmall">
                            <img src="img/avatar/ava2.jpg" alt="">
                        </div>
                        <div class="carouselItemInfo">
                            <span>Киев</span><br>
                            <span >&#9993; <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> </span>
                            -<br>
                            <mark>small</mark>
                            <span><b>+</b>243 <i>-</i>9</span>
                        </div>
                    </div>
                    <div class="carouselItem ">
                        <span>Компания</span><br>
                        <q>Деловые линии</q>
                        <div class="avatarSmall">
                            <img src="img/avatar/ava4.jpg" alt="">
                        </div>
                        <div class="carouselItemInfo">
                            <span>Киев</span><br>
                            <span >&#9993; <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> </span>
                            <br>
                            <mark>small</mark>
                            <span><b>+</b>243 <i>-</i>9</span>
                        </div>
                    </div>
                    <div class="carouselItem ">
                        <span>Компания</span><br>
                        <q>Деловые линии</q>
                        <div class="avatarSmall">
                            <img src="img/avatar/ava5.jpg" alt="">
                        </div>
                        <div class="carouselItemInfo">
                            <span>Киев</span><br>
                            <span >&#9993; <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> </span>
                            <br>
                            <mark>small</mark>
                            <span><b>+</b>243 <i>-</i>9</span>
                        </div>
                    </div>
                    <div class="carouselItem ">
                        <span>Компания</span><br>
                        <q>Деловые линии</q>
                        <div class="avatarSmall">
                            <img src="img/avatar/ava6.jpg" alt="">
                        </div>
                        <div class="carouselItemInfo">
                            <span>Киев</span><br>
                            <span >&#9993; <span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> </span>
                            <br>
                            <mark>small</mark>
                            <span><b>+</b>243 <i>-</i>9</span>
                        </div>
                    </div>


                </div>
                </div>

            </div>
            <div class="offset-1 col-10 offset-1 newOrdersGallery">
                <div class="galleryItems">
                    <div class="img">
                        <img src="img/avatar/ava11.jpg" alt="" >
                    </div>
                    <div class="mail">

                         <a href="mailto:kamenskaya77@ukr.net"> &#9993;</a>
                    </div>
                    <div class="tariffPlan flagLarge">Large</div>


                    <div class="iconInfo">
                        <div class="iconHamer"></div>
                        <div class ="quantityRade">3</div>
                        <div class="iconEye"></div>
                        <div class ="quantityViews">45</div>
                    </div>
                    <div class="info">
                            <table cellspacing ="10" >
                                <tr>
                                    <td><img src="img/icon/earth.svg" alt="icon"></td>
                                    <td><span>откуда <br> куда</span></td>
                                    <td><b>Уганда <br> Мадрид</b></td>
                                </tr>
                                <tr>
                                    <td><img src="img/icon/calendar.svg" alt="icon"></td>
                                    <td><span>когда</span></td>
                                    <td><b>15.06.2019</b></td>
                                </tr>
                                <tr>
                                    <td><img src="img/icon/truck.svg" alt="icon"></td>
                                    <td><span>тип груза</span></td>
                                    <td><b>Техника</b></td>
                                </tr>
                                <tr>
                                    <td><img src="img/icon/bubbles4.svg" alt="icon"></td>
                                    <td><span>описание</span></td>
                                    <td><b class="readMessage">Прочитать</b></td>
                                </tr>
                            </table>
                    </div>
                        <div class="btnPrice">
                            <button>Предложить цену</button>
                        </div>
                    <div class="galleryItemsHidden">
                        <span class="green">&#8226;</span>
                        <button>&#10005;</button>
                        <div class="hiddenInfo">
                            <img src="img/avatar/ava11.jpg" alt="icon">
                            <p>Nikita3529</p>
                            <span>на сайте:</span>
                            <b>Апрель 2019</b>
                            <span>рейтинг:</span>
                            <span class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            <span>отзывы:</span>
                            <span> <i>+</i> <b>243</b> <i>-</i><b>3</b></span>
                        </div>
                        <div class="message">
                            <span>Срочно. </span><br>
                            <span>Нужно перевести 20т овощей в ящиках. Желательно с Вашими грузчиками на загрузке и выгрузке товара. Загрузка уже завтра с утра, так что я на связи</span>
                        </div>

                    </div>
                </div>
                <div class="galleryItems">
                    <div class="img">
                        <img src="img/avatar/ava22.jpg" alt="" >
                    </div>
                    <div class="mail">
                        <a href="mailto:kamenskaya77@ukr.net"> &#9993;</a>
                    </div>
                    <div class="tariffPlan flagLarge">Large</div>
                    <div class="iconInfo">
                        <div class="iconHamer"></div>
                        <div class ="quantityRade">3</div>
                        <div class="iconEye"></div>
                        <div class ="quantityViews">45</div>
                    </div>
                    <div class="info">
                        <table cellspacing ="10" >
                            <tr>
                                <td><img src="img/icon/earth.svg" alt="icon"></td>
                                <td><span>откуда <br> куда</span></td>
                                <td><b>Уганда <br> Мадрид</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/calendar.svg" alt="icon"></td>
                                <td><span>когда</span></td>
                                <td><b>15.06.2019</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/truck.svg" alt="icon"></td>
                                <td><span>тип груза</span></td>
                                <td><b>Техника</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/bubbles4.svg" alt="icon"></td>
                                <td><span>описание</span></td>
                                <td> <b class="readMessage">Прочитать</b></td>
                            </tr>
                        </table>
                    </div>
                        <div class="btnPrice">
                            <button>Предложить цену</button>
                        </div>
                        <div class="galleryItemsHidden">
                            <span class="green">&#8226;</span>
                            <button>&#10005;</button>
                            <div class="hiddenInfo">
                                <img src="img/avatar/ava22.jpg" alt="icon">
                                <p>Nikita3529</p>
                                <span>на сайте:</span>
                                <b>Апрель 2019</b>
                                <span>рейтинг:</span>
                                <span class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                <span>отзывы:</span>
                                <span> <i>+</i> <b>243</b> <i>-</i><b>3</b></span>
                            </div>
                            <div class="message">
                                <span>Срочно. </span><br>
                                <span>Нужно перевести 20т овощей в ящиках. Желательно с Вашими грузчиками на загрузке и выгрузке товара. Загрузка уже завтра с утра, так что я на связи</span>
                            </div>

                        </div>
                    </div>
                <div class="galleryItems">
                    <div class="img">
                        <img src="img/avatar/ava33.jpg" alt="" >
                    </div>
                    <div class="mail">
                        <a href="mailto:kamenskaya77@ukr.net"> &#9993;</a>
                    </div>
                    <div class="tariffPlan flagSmall">Small </div>
                    <div class="iconInfo">
                        <div class="iconHamer"></div>
                        <div class ="quantityRade">3</div>
                        <div class="iconEye"></div>
                        <div class ="quantityViews">45</div>
                    </div>
                    <div class="info">
                        <table cellspacing ="10" >
                            <tr>
                                <td><img src="img/icon/earth.svg" alt="icon"></td>
                                <td><span>откуда <br> куда</span></td>
                                <td><b>Уганда <br> Мадрид</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/calendar.svg" alt="icon"></td>
                                <td><span>когда</span></td>
                                <td><b>15.06.2019</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/truck.svg" alt="icon"></td>
                                <td><span>тип груза</span></td>
                                <td><b>Техника</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/bubbles4.svg" alt="icon"></td>
                                <td><span>описание</span></td>
                                <td> <b class="readMessage">Прочитать</b></td>
                            </tr>
                        </table>
                    </div>
                        <div class="btnPrice">
                            <button>Предложить цену</button>
                        </div>
                        <div class="galleryItemsHidden">
                            <span class="green">&#8226;</span>
                            <button>&#10005;</button>
                            <div class="hiddenInfo">
                                <img src="img/avatar/ava33.jpg" alt="icon">
                                <p>Nikita3529</p>
                                <span>на сайте:</span>
                                <b>Апрель 2019</b>
                                <span>рейтинг:</span>
                                <span class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                <span>отзывы:</span>
                                <span> <i>+</i> <b>243</b> <i>-</i><b>3</b></span>
                            </div>
                            <div class="message">
                                <span>Срочно. </span><br>
                                <span>Нужно перевести 20т овощей в ящиках. Желательно с Вашими грузчиками на загрузке и выгрузке товара. Загрузка уже завтра с утра, так что я на связи</span>
                            </div>

                        </div>
                    </div>
                <div class="galleryItems">
                    <div class="img">
                        <img src="img/avatar/ava44.jpg" alt="" >
                    </div>
                    <div class="mail">
                        <a href="mailto:kamenskaya77@ukr.net"> &#9993;</a>
                    </div>
                    <div class="tariffPlan flagMedium">Medium</div>
                    <div class="iconInfo">
                        <div class="iconHamer"></div>
                        <div class ="quantityRade">3</div>
                        <div class="iconEye"></div>
                        <div class ="quantityViews">45</div>
                    </div>
                    <div class="info">
                        <table cellspacing ="10" >
                            <tr>
                                <td><img src="img/icon/earth.svg" alt="icon"></td>
                                <td><span>откуда <br> куда</span></td>
                                <td><b>Уганда <br> Мадрид</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/calendar.svg" alt="icon"></td>
                                <td><span>когда</span></td>
                                <td><b>15.06.2019</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/truck.svg" alt="icon"></td>
                                <td><span>тип груза</span></td>
                                <td><b>Техника</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/bubbles4.svg" alt="icon"></td>
                                <td><span>описание</span></td>
                                <td> <b class="readMessage">Прочитать</b></td>
                            </tr>
                        </table>
                    </div>
                        <div class="btnPrice">
                            <button>Предложить цену</button>
                        </div>
                        <div class="galleryItemsHidden">
                            <span class="green">&#8226;</span>
                            <button>&#10005;</button>
                            <div class="hiddenInfo">
                                <img src="img/avatar/ava44.jpg" alt="icon">
                                <p>Nikita3529</p>
                                <span>на сайте:</span>
                                <b>Апрель 2019</b>
                                <span>рейтинг:</span>
                                <span class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                <span>отзывы:</span>
                                <span> <i>+</i> <b>243</b> <i>-</i><b>3</b></span>
                            </div>
                            <div class="message">
                                <span>Срочно. </span><br>
                                <span>Нужно перевести 20т овощей в ящиках. Желательно с Вашими грузчиками на загрузке и выгрузке товара. Загрузка уже завтра с утра, так что я на связи</span>
                            </div>

                        </div>
                    </div>
                <div class="galleryItems">
                    <div class="img">
                        <img src="img/avatar/ava55.jpg" alt="" >
                    </div>
                    <div class="mail">
                        <a href="mailto:kamenskaya77@ukr.net"> &#9993;</a>
                    </div>
                    <div class="tariffPlan flagLarge">Large</div>
                    <div class="iconInfo">
                        <div class="iconHamer"></div>
                        <div class ="quantityRade">3</div>
                        <div class="iconEye"></div>
                        <div class ="quantityViews">45</div>
                    </div>
                    <div class="info">
                        <table cellspacing ="10" >
                            <tr>
                                <td><img src="img/icon/earth.svg" alt="icon"></td>
                                <td><span>откуда <br> куда</span></td>
                                <td><b>Уганда <br> Мадрид</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/calendar.svg" alt="icon"></td>
                                <td><span>когда</span></td>
                                <td><b>15.06.2019</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/truck.svg" alt="icon"></td>
                                <td><span>тип груза</span></td>
                                <td><b>Техника</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/bubbles4.svg" alt="icon"></td>
                                <td><span>описание</span></td>
                                <td> <b class="readMessage">Прочитать</b></td>
                            </tr>
                        </table>
                    </div>
                        <div class="btnPrice">
                            <button>Предложить цену</button>
                        </div>
                        <div class="galleryItemsHidden">
                            <span class="green">&#8226;</span>
                            <button>&#10005;</button>
                            <div class="hiddenInfo">
                                <img src="img/avatar/ava55.jpg" alt="icon">
                                <p>Nikita3529</p>
                                <span>на сайте:</span>
                                <b>Апрель 2019</b>
                                <span>рейтинг:</span>
                                <span class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                <span>отзывы:</span>
                                <span> <i>+</i> <b>243</b> <i>-</i><b>3</b></span>
                            </div>
                            <div class="message">
                                <span>Срочно. </span><br>
                                <span>Нужно перевести 20т овощей в ящиках.  Загрузка уже завтра с утра, так что я на связи</span>
                            </div>

                        </div>
                    </div>
                <div class="galleryItems">
                    <div class="img">
                        <img src="img/avatar/ava66.jpg" alt="" >
                    </div>
                    <div class="mail">
                        <a href="mailto:kamenskaya77@ukr.net"> &#9993;</a>
                    </div>
                    <div class="tariffPlan flagSmall">Small</div>
                    <div class="iconInfo">
                        <div class="iconHamer"></div>
                        <div class ="quantityRade">3</div>
                        <div class="iconEye"></div>
                        <div class ="quantityViews">45</div>
                    </div>
                    <div class="info">
                        <table cellspacing ="10" >
                            <tr>
                                <td><img src="img/icon/earth.svg" alt="icon"></td>
                                <td><span>откуда <br> куда</span></td>
                                <td><b>Уганда <br> Мадрид</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/calendar.svg" alt="icon"></td>
                                <td><span>когда</span></td>
                                <td><b>15.06.2019</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/truck.svg" alt="icon"></td>
                                <td><span>тип груза</span></td>
                                <td><b>Техника</b></td>
                            </tr>
                            <tr>
                                <td><img src="img/icon/bubbles4.svg" alt="icon"></td>
                                <td><span>описание</span></td>
                                <td> <b class="readMessage">Прочитать</b></td>
                            </tr>
                        </table>
                    </div>
                        <div class="btnPrice">
                            <button>Предложить цену</button>
                        </div>
                        <div class="galleryItemsHidden">
                            <span class="green">&#8226;</span>
                            <button>&#10005;</button>
                            <div class="hiddenInfo">
                                <img src="img/avatar/ava66.jpg" alt="icon">
                                <p>Nikita3529</p>
                                <span>на сайте:</span>
                                <b>Апрель 2019</b>
                                <span>рейтинг:</span>
                                <span class="star">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                <span>отзывы:</span>
                                <span> <i>+</i> <b>243</b> <i>-</i><b>3</b></span>
                            </div>
                            <div class="message">
                                <span>Срочно. </span><br>
                                <span>Нужно перевести 20т овощей в ящиках. Желательно с Вашими грузчиками на загрузке и выгрузке товара. </span>
                            </div>

                        </div>
                    </div>

            </div>
            <div class="col-12 newOrdersMore">
                <span>больше заказов</span> <br>
                <span>&#149;&#149;&#149;</span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row rowRates" id="qwert">
            <div class="offset-2 col-10 ratesSvg">
                <div class="ratesSvgItem">
                    <svg width="220" height="100" >
                        <line x1="55%" y1="0" x2="55%" y2="100" stroke="#57CFE8" stroke-width="5" />
                    </svg>
                    <br>
                    <svg width="250" height="100" fill="#57CFE8">
                        <circle r="50" cx="120"cy="50%" />
                        <text x="85" y="60"  fill="#ffffff" font-family="Verdana, serif" font-weight="500" font-size="36" >ТАРИФЫ</text>
                    </svg>
                </div>
            </div>
                <div class="offset-1 col-10 offset-1 offset-md-2 col-md-8 offset-md-2 offset-lg-3 col-lg-6 offset-lg-3  ratesText">
                    <span>Выберите свой тарифный план, который позволит Вам
                     зарабатывать и быстро находить заказы
                    </span> <br>
                    <input name="radio" id="checkMouns" type="radio"> <label for="checkMouns">месяц</label>
                    <input name="radio" id="checkYear" type="radio"> <label for="checkYear">год</label>
                </div>

                    <div class="col-12  airBusHidden"></div>
                    <div class="col-12 col-ms-12 offset-md-1 col-md-10 offset-md-1 offset-lg-1 col-lg-10 offset-lg-1 tariffsHidden ">
                        <div class="itemsTariffHidden">
                            <div class="tariffInfo tariffSmall"  id="small">
                                <div>
                                    <h1>small</h1>
                                    <span class="price">100</span> <span>₴</span>
                                </div>
                                <div><span>Тариф для  <br><strong>малых перевозок</strong> <br>(подвозка людей на личном автотранспорте).</span></div>
                                <ul>
                                    <li>Быстрый поиск заказа</li>
                                    <li>Поддержка 24/7</li>
                                    <li>Уведомление о новых заказах</li>
                                </ul>
                            </div>
                            <div class="tarifInfoFooter">
                                <span>бесплатно 3 месяца</span> <br>
                                <span class=" buy small">купить</span>
                            </div>
                         </div>
                        <div class="itemsTariffHidden " >
                            <div class="tariffInfo tariffMedium" id="medium">
                                <div>
                                    <h1>medium</h1>
                                    <span class="price">300</span> <span>₴</span>
                                </div>
                                <div><span>Тариф для <br> <strong>средних перевозок</strong> <br>(перевозка мебели, бытовой техники).</span></div>
                                <ul>
                                    <li>Быстрый поиск заказа</li>
                                    <li>Поддержка 24/7</li>
                                    <li>Уведомление о новых заказах</li>
                                </ul>
                            </div>
                            <div class="tarifInfoFooter">
                                <span>бесплатно 5 месяца</span> <br>
                                <span class="buy medium">купить</span>
                            </div>
                        </div>
                        <div class="itemsTariffHidden"  >
                            <div class="tariffInfo tariffLarge" id="large">
                                <div>
                                    <h1>large</h1>
                                    <span class="price">1000</span><span>₴</span>
                                </div>
                                <div><span>Тариф для <br> <strong>крупных перевозок</strong> <br> (перевозка крупногабаритных грузов, весом свыше 12т).</span></div>
                                <ul>
                                    <li>Быстрый поиск заказа</li>
                                    <li>Поддержка 24/7</li>
                                    <li>Уведомление о новых заказах</li>
                                </ul>
                            </div>
                            <div class="tarifInfoFooter">
                                <span>бесплатно 6 месяца</span> <br>
                                <span class="buy large">купить</span>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <div class="container">
        <div class="row rowNews">
            <div class="col-12 newsHead" id="news">
                <p>новости</p>
                <p>перевозок</p>
            </div>
            <div class="offset-1 col-10 offset-1 newsGallery">

                <div id="popap">
                    <button id="btn">&#10005;</button>
                    <div id="image">
                        <div id="previu">&#171;</div>
                        <div id = nxt>&#187;</div>
                    </div>
                    <div class="description" id="description"></div>
                    <div class="date" id="date"></div>
                </div>

                <div class="imagecontainer">
                    <div class="image">
                        <img src="img/news1.png" alt="" >
                    </div>
                    <div class="description">
                        <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</span>
                    </div>
                    <div class="date">28 ноября 2018</div>
                </div>

                <div class="imagecontainer">
                    <div class="image">
                        <img src="img/news2.png" alt="">
                    </div>
                    <div class="description">
                        <span> ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</span>
                    </div>
                    <div class="date">28 ноября 2018</div>
                </div>



                <div class="imagecontainer">
                    <div class="image">
                        <img src="img/delivery/perevozka_negabarita_1.jpg" alt="">
                    </div>
                    <div class="description"> <span>consectetur, adipisci velit, sed quia non numquam</span> </div>
                    <div class="date">28 ноября 2018</div>
                </div>

                <div class="imagecontainer">
                    <div class="image">
                        <img src="img/delivery/20180505142240-5918.jpg" alt="">
                    </div>
                    <div class="description"> <span> consectetur, adipisci velit, sed quia non numquam</span>  </div>
                    <div class="date">28 ноября 2018</div>
                </div>

                <div class="imagecontainer">
                    <div class="image">
                        <img src="img/delivery/getimg.jpg" alt="">
                    </div>
                    <div class="description"> <span> consectetur, adipisci velit, sed quia non numquam</span>  </div>
                    <div class="date">28 ноября 2018</div>
                </div>

                <div class="imagecontainer">
                    <div class="image">
                        <img src="img/news2.png" alt="">
                    </div>
                    <div class="description"> <span> consectetur, adipisci velit, sed quia non numquam</span>  </div>
                    <div class="date">28 ноября 2018</div>
                </div>


                <div class="col-12 newsHead question">
                    <p>частые</p>
                    <p>вопросы</p>
                </div>
                <div class="newsBottom"><span>Если вы не нашли ответа на свой вопрос, <br> тогда воспользуйтесь формой обратной связи</span></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row rowFAQ">
            <div class="offset-lg-1 col-lg-10 offset-lg-1 offset-sm-1 col-sm-10 offset-sm-1 offset-md-1 col-md-10 offset-md-1 offset-1 col-10 offset-1 colFAQ">
                <div class="FAQSender">
                    <figure>
                        <figcaption> <img class="imgBorder" src="img/o.png" alt="o">тправителю </figcaption>
                    </figure>
                    <div class="faq">
                        <details tabindex>
                            <summary>Сколько будет стоить перевозка? </summary>
                                <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                        <details tabindex>
                            <summary>У Вас есть собственный транспорт?</summary>
                                <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                        <details tabindex>
                            <summary>Какие грузоперевозки я могу заказать?</summary>
                            <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                        <details tabindex>
                            <summary>Как оформить заказ?</summary>
                                <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                        <details tabindex>
                            <summary>Какие гарантии перевозки груза?</summary>
                                <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                        <details tabindex>
                            <summary>Когда производится оплата заказа?</summary>
                                <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                    </div>
                </div>
                <div class="FAQDelivery">
                    <figure>
                        <figcaption> <img src="img/п.png" alt="п">еревозчику </figcaption>
                    </figure>
                    <div class="faq">
                        <details tabindex>
                            <summary>Сколько будет стоить перевозка? </summary>
                            <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                        <details tabindex>
                            <summary>У Вас есть собственный транспорт?</summary>
                            <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                        <details tabindex>
                            <summary>Какие грузоперевозки я могу заказать?</summary>
                            <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                        <details tabindex>
                            <summary>Как оформить заказ?</summary>
                            <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                        <details tabindex>
                            <summary>Какие гарантии перевозки груза?</summary>
                            <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                        <details tabindex>
                            <summary>Когда производится оплата заказа?</summary>
                            <span>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</span>
                        </details>
                    </div>
                </div>



            </div>
        </div>
        <div class=" row rowMailTo">
            <div class="offset-lg-1 col-lg-10 offset-lg-1 offset-sm-1 col-sm-10 offset-sm-1 offset-md-1 col-md-10 offset-md-1 offset-1 col-10 offset-1 colMailTo">
                <div class="mailToLogo">
                    <span>хотите получать  рассылку грузов?</span>
                    <img src="img/vektor.png" alt="logotype вектор">
                </div>
                <form action="">
                    <input type="email" placeholder="Email"><br>
                    <span>Периодичность и тип рассылки определяется администрацией сайта и может быть изменена/отключена</span>

                </form>
                <button name="mailto" class="btnView btn_media">Подписаться</button>
             </div>
        </div>
        <div class="row rowFooter">
            <div class="offset-1 col-10 offset-1 colFooter">
                <div class="footerItems">
                    <h6>о нас</h6>
                    <span>Мы предоставляем Вам удобный онлай-сервис для организации грузоперевозок в новом формате "<b>Отправитель - Перевозчик</b>",без посредников.</span>
                </div>
                <div class="footerItems">
                    <h6>как начать?</h6>
                    <span>Просто создайте заявку с грузом на перевозку и вам тут же будет поступать самые выгодные цены от грузоперевозчиков.</span>
                    <br><button name="mailto" class="btnView btn_media btn">Разместить груз</button>
                </div>
                <div class="footerItems">
                    <h6>меню</h6>
                    <ul>
                        <li><a class="settingLink" href="">Перевозчики</a></li>
                        <li><a class="settingLink" href="">Заказы</a></li>
                        <li><a class="settingLink" href="#work">Как это работает?</a></li>
                        <li><a class="settingLink" href="">Тарифы</a></li>
                        <li><a class="settingLink" href="">Правила</a></li>
                    </ul>
                </div>
                <div class="footerItems">
                    <h6>информация</h6>
                    <ul>
                        <li><a class="settingLink" href="#info">О нас</a></li>
                        <li><a class="settingLink" href="#news">Новости</a></li>
                        <li><a class="settingLink" href="">Контакты</a></li>
                    </ul>
                    <ul class ="langList">
                        <li class="langItem"><a href="">Rus </a>&#149;</li>
                        <li class="langItem"><a href="">Eng </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row rowBasement">
            <div  class="col-12 colBasement">
                <p>&#169; <img src="img/vektor.png" alt="" width="50px" height="20px"></p>
                <p> все права защищены</p>

                <span>+380965902357</span>
            </div>
        </div>

    </div>




</body>
</html>
