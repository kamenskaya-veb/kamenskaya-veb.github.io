<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="libs/jquery/jquery-3.4.1.min.js"></script>
    <script defer src="libs/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

	<script defer src="js/js/Chart.js" ></script>
	<script defer src="js/navbarMenu.js"></script>
	<script defer src="js/script.js"></script>
    <script defer src="js/delever.js"></script>
    <script defer src="js/up.js"></script>

    <link rel="stylesheet" type="text/css" href="css/boot_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/delever.css">
    <link rel="stylesheet" href="css/style/navbarMenu.css">
    <link rel="stylesheet" href="css/media/navbarMenu.css">
    <link rel="stylesheet" href="css/style/style.css">
    <link rel="stylesheet" href="css/style/up.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<title>delivery</title>


</head>
<body class="mx-auto">
<a id="button" class="vis"></a>
<div class="container-fluid">

	<div class="row rowNavbar">
		<div class="offset-1 col-11 ">
			<nav class="navbarMenu">
				<a class="" href="index.php"><img src="img/vektor.png" alt="" width="160" height="50"></a>
				<button class="burger"></button>
				<ul class="menuList" id="menuList">
					<li><a class="" href="index.php">Главная</a></li>
					<li><a class="" href="#">Перевозки</a></li>
					<li><a class="" href="#">Заказы</a></li>
					<li class="dropdownMenu"><a class="" href="#">Сервис &#8594;</a>
						<ul class="dropdownItem" >
							<li><a href="#info">О нас</a></li>
							<li><a href="#work">Как это работает?</a></li>
							<li><a href="#news">Новости</a></li>
							<li><a href="contacts.html">Контакты</a></li>
						</ul>
					</li>
					<li><a class="" href="#">Тарифы</a></li>
                    <?php  if(isset($_COOKIE ['login'])){ ?>
                    <li><a href="php/formlog.php?exit=1">Выход</a></li>
                    <?php } ?>
				</ul>
			</nav>
		</div>
	</div>





<section class="row clientData">
	<div class="col-12">
		<div class="row clientDataOnlineStatus">
			<div class="col-4 offset-1 d-flex align-items-center">
				<span > </span>
				<span class="clientDataLabel  ml-4">на сайте</span>
			</div>
			<div class="col-1 clientEdit">
				
			</div>
		</div>
		<div class="row">
			<div class="col-10 col-lg-5 col-xl-5 pr-0 offset-1"><!--   ширина конт 6-5-->
				<div class="row">
					<div class="col-3 px-0 mr-1 ml-4 ml-lg-0 col-lg-6 clientPhoto">
						<img src="img/foto.png" alt=" ">
					</div>
					<div class="col-6 pl-2 pr-0 clientDataFitures">
						<div class="row align-items-center">
					 		<span class="card_lable col-lg-4 col-md-3 col-4 pr-0 clientDataLabel ">Псевдоним</span> <span class="card_inscription col-7"> <?php echo (isset($_COOKIE ['login']))? $_COOKIE['login']: "Anonimus"; ?></span>
						</div>
						<div class="row align-items-center">
						 	<span class="card_lable col-lg-4 col-md-3 col-4 pr-0 clientDataLabel">Тип</span> <span class="card_inscription col-7">Компания</span> 
						</div>
						<div class="row align-items-center">
						 	<span class="card_lable col-lg-4 col-md-3 col-4 pr-0 clientDataLabel">Название </span> <div class="col-7"> Киев-Транс</div> 
						</div>
						<div class="row align-items-center">
						 	<span class="card_lable col-lg-4 col-md-3 col-4 pr-0 clientDataLabel">На сайте с:</span> <data class="col-7"> 21.01.19 </data> 
						</div>
						<div class="row ">
							<span class="clientPhoneVisibility col-2 "></span> <span class="col-7 px-0 card_inscription">+3 8063 87 87 878</span> 
						</div>
						<div class="row ">
							<span class="clientEmail col-2 "></span> <span class="col-7 px-0 card_inscription">katerina@gmail.com</span> 
						</div>
					</div>
				</div>
				<div class="row clientDataLanguages">
						<span class="clientDataLabel col-lg-4 col-3 ml-4 ml-lg-0 pr-0">Владение языками:</span> 
						<ul class="col-7 ">
							<li>EN</li>
							<li>ES</li>
							<li>ZH</li>
						</ul>  
					
				</div>

				<div class="row clientDataReview">
					<span class="col-3 ml-4 ml-lg-0 clientDataLabel">О себе:</span>
					<span class="col-2 offset-2 p-0 clientDataLabel">Отзывы</span>
					<span class="col-1 p-0"> <span class="positivReview">+</span>14</span>
					<span class="col-1 offset-lg-1"> <span class="negativeReview" >-</span>2</span>
				</div>
				<div class="row clientDataAboutClient">
					<div class="col-lg-10 col-6 offset-1 pl-4 " >
						<p>Предпрениматель с небольшим оборотом денежных средств нуждаюсь в постоянных грузоперевозках по городу Киев</p>
					</div>
				</div>
				<div class="row clientDataConnection">
					<div class="col-6 ml-4 ml-lg-0 clientDataLabel" >
						<p>Связаться с пользователем</p>
					</div>
					<div class="col-6  ml-lg-0 clientDataLabel" >
						<p>Подключение счета</p>
					</div>
				</div>
				<div class="row clientDataIcons">
					<div class="col-1 socialIcons" ></div>
					<div class="col-1 socialIcons" ></div>
					<div class="col-1 socialIcons" ></div>
					<div class="col-1 socialIcons" ></div>
					<div class="col-1 socialIcons" ></div>
					<div class="col-4 offset-1 "> <span>РЕЙТИНГ</span> </div>
					
				</div>
				
			</div>
			<div class="col-10 col-lg-5 offset-1 offset-lg-0 deleverStatistic">  
				
					<div class="deleverStatisticRootLength" >
						<span></span>
						<span></span>
						<span>Пройдено</span>
						<span>8000км</span>
					</div>
					<div class="deleverStatisticCompletedOrder">
						<span></span>
						<span></span>
						<span>Выполнено заказов</span>
						<span>14</span>
					</div>
					<div class="deleverStatisticCarPark">
						<span></span>
						<span></span>
						<span>Собственных машин</span>
						<span>8</span>
					</div>
				
					<button class="choise">Выбрать перевозчика</button>
					<div class="clear"></div>

				<fieldset class=" col-6 col-lg-6 offset-3 offset-lg-3 deleverTarifTimer">
					<legend>Окончание тарифа</legend>
					<div class="deleverTarifTimerType">Medium</div>
					<div class="deleverTarifTimerCounter">
						<div class="">
							<div class="timerNambers">10</div>
							<div class="timerLables">дни</div>
						</div>
						<div class=" separator">
							<div>:</div>
						</div>
						<div class="">
							<div class="timerNambers">10</div>
							<div class="timerLables">часы</div>
						</div>
						<div class=" separator">
							<div>:</div>
						</div>
						<div class="">
							<div class="timerNambers">10</div>
							<div class="timerLables">минуты</div>
						</div>
					</div>
					<button class="extend">Продлить</button>
				</fieldset>
			</div>


		</div>
	</div>
<!--  data form  -->
	<form action="#" method="GET" name="deleverPrivateData" class="formPrivateData">

			<div class="formPrivateDateSection">
				<h3>Личные данные:</h3>
				<label>Имя:
					<input type="text" name="">
				</label>
				<label>Псевдоним:
					<input type="text" name="">
				</label>
				<label>Тип:
					<input type="text" name="">
				</label>
				<label>Название:
					<input type="text" name="">
				</label>
				<label>Город
					<input type="text" name="">
				</label>
				<label>Телефон:
					<input type="text" name="">
				</label>
				<label>E-mail
					<input type="text" name="">
				</label>
				<label>Язык
					<input type="text" name="">
				</label>
				<label>Старый пароль
					<input type="text" name="">
				</label>
				<label>Новый пароль
					<input type="text" name="">
				</label>
				<label>Еще раз новый
					<input type="text" name="">
				</label>
			</div>

			<div class="formPrivateMessagePay">
				<div class="formPrivateMessageSection">
					<h3>Мессенджеры:</h3>
					<label>Skype
						<input type="text" name="">
					</label>
					<label>WhatsApp:
						<input type="text" name="">
					</label>
					<label>Facebook
						<input type="text" name="">
					</label>
					<label>Instagramm
						<input type="text" name="">
					</label>
					<label>Viber
						<input type="text" name="">
					</label>
				</div>
				<div class="formPrivatePaySection">
					<h3>Платежные системы:</h3>
					<label>PayPal
						<input type="text" name="">
					</label>
					<label>Visa
						<input type="text" name="">
					</label>
					<label>MasterCard
						<input type="text" name="">
					</label>
				</div>		
			</div>
			<div class="formPrivateNotifications">
					<h3>Уведомления:</h3>
					<div> <span> О новых личных сообщениях:</span>
						<label> да <input type="radio" name="Notification" value="true"></label>
						<label> нет <input type="radio" name="Notification" value="false"></label>
					</div>
					<div> <span> Заявки от перевозчиков: </span>
						<label> да <input type="radio" name="Notification" value="true"> </label>
						<label> нет <input type="radio" name="Notification" value="false"> </label>
					</div>
					<div> <span> Об успешном выборе исполнителя: </span>
						<label>да <input type="radio" name="Notification" value="true"> </label>
						<label>нет <input type="radio" name="Notification" value="false"> </label>
					</div>
					<div> <span> При закрытии заявки: </span>
						<label>да <input type="radio" name="Notification" value="true"> </label>
						<label>нет <input type="radio" name="Notification" value="false"> </label>
					</div>
					<div> <span> С лучшим перевозчиками недели: </span>
						<label>да <input type="radio" name="Notification" value="true"> </label>
						<label>нет <input type="radio" name="Notification" value="false"> </label>
					</div>
					<div> <span> С новостями и акциями: </span>
						<label>да <input type="radio" name="Notification" value="true"> </label>
						<label>нет <input type="radio" name="Notification" value="false"> </label>
					</div>
					<div> <span> Отписаться от всех рассылок: </span>
						<label>да <input type="radio" name="Notification" value="true"> </label>
						<label>нет <input type="radio" name="Notification" value="false"> </label>
					</div>
					
			</div>
			<div class="break"></div>
			<input type="submit" name="Save" value="Сохранить">

		</form>

</section>



<section class="row sect2">

	<div class="col-10 offset-1 deleverInformation">
		<!-- Carent Order table-->
		<h3 >Заявки в процессе выполнения</h3>
		<div class=" row pr-2 mx-4 carentOrders">
			<div class="col-10 offset-1 offset-lg-0 col-lg-3  pr-2 py-3 d-flex flex-lg-column root">
				<!--<div class="col-12  px-2">-->
					<div class="row mb-2 d-none d-lg-flex flex-nowrap flex-lg-wrap clientsRequestsOpenTitle">
						<span class=" col-lg-3 col-xl-4  px-0 d-flex clientsRequestsOpenIcon"></span> 
						<span class=" col-8 pl-2 pr-0  label ">Маршрут и дата</span>	
					</div>

					<div class="row clientsRequestsOpenFitures">
						<div class=" col-lg-3 col-xl-4 px-0 d-lg-flex flex-column align-items-lg-end clientsRequestsOpenFituresLabel">
							<div class="h-50">откуда</div>
							<div class="h-50">куда</div>
						</div>
						<div class="col-5  pl-2 pr-0 d-flex align-items-start flex-column clientsRequestsOpenFituresTowns">
							<div class="h-50 clientsRequestsOpenFituresTownsFrom ">Киев</div>
							<div class="h-50 clientsRequestsOpenFituresTownsTo ">Львов</div>
						</div>
						<div class="col-3 p-0 clientsRequestsOpenFituresDate">
							<div>
								<div class="clientsRequestsOpenFituresDateNumber">18</div>
								<div class="clientsRequestsOpenFituresDateDay">марта</div>
							</div>
						</div>
					</div>
					
					<div class="row mt-lg-auto rootPrice">
						<div class=" col-lg-3 col-xl-4 px-0  d-flex rootPriceIcon"> </div> 
						<div class=" col-8 pl-2 pr-0 "> 
							<div class=" mb-2 label"> Цена поездки </div> 
							<div class="rootPriceNumber" > 29000 грн </div>
						</div>	
					</div>
					
				<!--</div>-->
			</div>
			<div class=" col-10 offset-1 offset-lg-0 col-lg-2 px-lg-2 px-xl-4 py-3 cargoType">
				<span></span> 
				<span class=" label mb-2">Тип груза</span>	
				<div class="clientsRequestsOpenСargoType mt-2">
					<span></span>
					<span>Medium</span>
				</div>
				<div class="clientsRequestsOpenСargoTypeName">
					<p >Овощи и фрукты</p>
				</div>
			</div>
			
			<div class=" d-flex flex-column col-10 offset-1 offset-lg-0 col-lg-3 py-3 px-4 h-100 comments">
				<div class="mb-2">	
					<span></span> 
					<span class=" label">Комментарий</span>	
				</div>
				<p class="mb-0 pr-3">Равным образом внедрение современных методик создает</p>
				<div class=" mt-n2 mb-2 align-self-end link">читать</div>
				<div class="foolComents">
					<p> Равным образом внедрение современных методик создает необходимость включения в производственный план целого ряда внеочередных мероприятий с учетомкомплекса поэтапного и последовательного развития общества.</p>
					<div class=" mt-n2 mb-1 align-self-end link">скрыть</div>
				</div>
				<div class="mt-auto deleverAddress">	
					<div class=" deleverAddressIcon "></div> 
					<div class=" mb-2 label">Адрес доставки</div>	
					<div class="address">Днепровская набережная 23</div>
				</div>
				


			</div>
			<div class="col-10 offset-1 offset-lg-0 col-lg-4 py-3 rootStatus">
				<div class=" label mb-2">Длина маршрута и статус доставки </div>	
				<div class="rootStatusLength" ><span></span><span></span><span>Длина маршрута</span><span>800км</span></div>
				<div class="rootStatusDelever"><span></span><span></span><span>Забрали</span></div>
				
			</div>
			
			<button class="carentOrdersButton"> Отменить </button>

		</div>

		<div class="mx-4 rejectionOder">
			<form>
				<div class="row">
					<div class="col-12 col-lg-6 reasons">
						<h3>Причина отмены заказа</h3>
						<div> <span> Поломка автомашины:</span>
							<label> <input type="radio" name="carCrashDown" value="true">да</label>
							<label> <input type="radio" name="carCrashDown" value="false">нет</label>
						</div>
						<div> <span>Неправильная цена: </span>
							<label> <input type="radio" name="incorrectPrice" value="true">да </label>
							<label> <input type="radio" name="incorrectPrice" value="false">нет </label>
						</div>
						<div> <span> Отправитель не отвечает: </span>
							<label> <input type="radio" name="notResponsing" value="true">да </label>
							<label> <input type="radio" name="notResponsing" value="false">нет </label>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xl-5 offset-xl-1 descriptions">
							<div>
								<p>Оцените грузоперевозщика</p>
							</div>
							
						<textarea placeholder="опишите вашу ситуацию" rows="5" name="notification" ></textarea>

					</div>

					<input class="rejectionOderSubmit" type="submit" name="confirm" value="Подтвердить">
				</div>
			</form>
		</div>
		
		<!--CarPark-->

		<h3>Автопарк</h3>
		<div class="carPark">

			<div class="carParkItem">
			  <img src="img/truckFord.png" class="" alt="">
			  <div class="carParkItemTitle">
				   <div class="label">марка</div>
				   <h3> Ford Truck</h3>
				   <div>Шасси с прицепом</div>
			  </div>
			   <div class="carParkItemFitures">
				   	<div class="label">Pазмер кузова</div>
				   	<h3> 2.5 х 6 х 4.5</h3>
					<div class="row">
							<div class="col-4">
								<div class="label">Вид загрузки</div> 
								<div class="label">Max тонаж</div> 
						   </div>
						   <div class="col-3">
						   		<div>Верхняя</div>
								<div>2т</div>
						   </div>
						   <div class="col-3">
						   		<div class="label">Объем</div>
								<div class="label" >Год</div>
						   </div>
						   <div class="col-2">
						   		<div>15 м3</div>
								<div>2018</div>
						   </div>
					</div>
			  </div>
			</div>

			<div class="carParkItem">
			  <img src="img/truckFord.png" class="" alt="">
			  <div class="carParkItemTitle">
				   <div class="label">марка</div>
				   <h3> Ford Truck</h3>
				   <div>Шасси с прицепом</div>
			  </div>
			   <div class="carParkItemFitures">
				   	<div class="label">Pазмер кузова</div>
				   	<h3> 2.5 х 6 х 4.5</h3>
					<div class="row">
							<div class="col-4">
								<div class="label">Вид загрузки</div> 
								<div class="label">Max тонаж</div> 
						   </div>
						   <div class="col-3">
						   		<div>Верхняя</div>
								<div>2т</div>
						   </div>
						   <div class="col-3">
						   		<div class="label">Объем</div>
								<div class="label" >Год</div>
						   </div>
						   <div class="col-2">
						   		<div>15 м3</div>
								<div>2018</div>
						   </div>
					</div>
			  </div>
			</div>

			<div class="carParkItem">
			  <img src="img/truckFord.png" class="" alt="">
			  <div class="carParkItemTitle">
				   <div class="label">марка</div>
				   <h3> Ford Truck</h3>
				   <div>Шасси с прицепом</div>
			  </div>
			   <div class="carParkItemFitures">
				   	<div class="label">Pазмер кузова</div>
				   	<h3> 2.5 х 6 х 4.5</h3>
					<div class="row">
							<div class="col-4">
								<div class="label">Вид загрузки</div> 
								<div class="label">Max тонаж</div> 
						   </div>
						   <div class="col-3">
						   		<div>Верхняя</div>
								<div>2т</div>
						   </div>
						   <div class="col-3">
						   		<div class="label">Объем</div>
								<div class="label" >Год</div>
						   </div>
						   <div class="col-2">
						   		<div>15 м3</div>
								<div>2018</div>
						   </div>
					</div>
			  </div>
			</div>

			<div class="carParkItem">
			  <img src="img/truckFord.png" class="" alt="">
			  <div class="carParkItemTitle">
				   <div class="label">марка</div>
				   <h3> Ford Truck</h3>
				   <div>Шасси с прицепом</div>
			  </div>
			   <div class="carParkItemFitures">
				   	<div class="label">Pазмер кузова</div>
				   	<h3> 2.5 х 6 х 4.5</h3>
					<div class="row">
							<div class="col-4">
								<div class="label">Вид загрузки</div> 
								<div class="label">Max тонаж</div> 
						   </div>
						   <div class="col-3">
						   		<div>Верхняя</div>
								<div>2т</div>
						   </div>
						   <div class="col-3">
						   		<div class="label">Объем</div>
								<div class="label" >Год</div>
						   </div>
						   <div class="col-2">
						   		<div>15 м3</div>
								<div>2018</div>
						   </div>
					</div>
			  </div>
			</div>
			
		</div>
				
		<ul class="clientsRequestsReviews">
			<li class="clientsRequestsReviewsAll"><span>Все</span><span>(36)</span></li>
			<li class="clientsRequestsReviewsPositive"><span>положительные</span><span>(32)</span></li>
			<li class="clientsRequestsReviewsNegative"><span>отрицательные</span><span>(4)</span></li>
		</ul>

		<p class="clientsRequestsStory">  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat  </p>

		<h2 class="clientsRequestsSlogan">Первые перевозки</h2>
		<h3 class="clientsRequestsLocation" >Компания в Киеве</h3>

		<nav aria-label="Page navigation">
		  <ul class="pagination">
		    <li class="page-item">
		      <a class="page-link" href="#" aria-label="Previous">
		        <span aria-hidden="true" class="back"> </span>
		        <span class="sr-only">Previous</span>
		      </a>
		    </li>
		    <li class="page-item"><a class="page-link" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="#">2</a></li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item">
		      <a class="page-link" href="#" aria-label="Next">
		        <span aria-hidden="true" class="next"> </span>
		        <span class="sr-only">Next</span>
		      </a>
		    </li>
		  </ul>
		</nav>



	</div>
</section>

	<div class="row rowFooter">
		<div class="offset-1 col-10 offset-1 colFooter">
			<div class="footerItems">
				<h6>о нас</h6>
				<span>Мы предоставляем Вам удобный онлай-сервис для организации грузоперевозок в новом формате "<b>Отправитель - Перевозчик</b>",без посредников.</span>
			</div>
			<div class="footerItems">
				<h6>как начать?</h6>
				<span>Просто создайте заявку с грузом на перевозку и вам тут же будет поступать самые выгодные цены от грузоперевозчиков.</span>
				<br><button name="mailto" class="btnView">Разместить груз</button>
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
					<li class="langItem"><a href="">Eng </a>&#149;</li>
					<li class="langItem"><a href="">He </a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row rowBasement">
		<div  class="col-12 colBasement">
			<p>&#169; 2019 KVISH <b>7</b>, все права защищены</p>
			<p>Разработка дизайн-макета DFRE@FGR</p>
			<span>+380965902357</span>
		</div>
	</div>

</div>

</body>
</html>




<!--
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" ></script>-->

