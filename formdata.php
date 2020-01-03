<?php 

$arr = ["ann","reek","qwert"];// массив чего то
$text = !empty($_GET["text"])?trim(strip_tags($_GET["text"])) : "";//получаем гет запрос отсекая пробелы и символы
if ( empty($text) ) return;
$res = array_filter($arr, function($var){//в новый массив записываем елементы, соответствующие нашему условию(условие пишем в функции) метод array_filter принимает параметром массив и фукнцию обработчика данных в массиве возвращает true/false
	// данные совпадающие с условием (true) записываются в новый массив 
	gloal $text;
	return strpos(strtolower($var), strtolower($text))!== false ? true : false;
});

echo json_encode($res);

 ?>