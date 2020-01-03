<?php
error_reporting(E_ALL);    //ловим ошибки
session_start();
require ('connect.php');
$expire = time()+3600;//задали время жизни куков в милисек
$noexpire = time()-3600;//стерли куки
$domain = ($_SERVER ['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false; // доменное имя для куков  (если на локалхосте)
    if(isset($_POST['mail'])  && isset($_POST['password'])){
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $query = "SELECT * FROM  usersender  WHERE mail = '$mail' AND password = '$password'";
        $result = mysqli_query($connection, $query)or
        die ( mysqli_error($connection));
        $resArray=mysqli_fetch_array($result);
        if($resArray['password'==$password]){
            setcookie("mail", $mail, $expire, '/', $domain, false);// задали куки и направляем в личный кабинет как зарегистрированного
            setcookie("login",$resArray['name'], $expire, '/', $domain, false);
            header('location:../delever.php');
        }else{
            setcookie("mail", '', $noexpire, '/', $domain, false);// стираем куки
            setcookie("login", '', $noexpire, '/', $domain, false);
            header('Location:../error.html');
        }
    }
    if(isset($_GET['exit'])&& $_GET['exit']==true) {
        setcookie("mail", '', $noexpire, '/', $domain, false);// при нажатии кнопки выход стираем куки
        setcookie("login", '', $noexpire, '/', $domain, false);
        header('Location:../index.php');
    }

?>
