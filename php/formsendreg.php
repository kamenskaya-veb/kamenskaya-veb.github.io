<?php
require ('connect.php');
    if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['mail']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $query = "INSERT INTO  usersender (name, username, mail, password) VALUES ('$name','$username','$mail','$password')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            header('location:../login.html');
        } else {
            echo 'ошибка';
        }
    }
?>