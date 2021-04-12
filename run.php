<?php

    session_start();
    $connect = mysqli_connect('localhost','root','','test');
    if (!$connect)
    {
      die('Error connect to DataBase!!!');
    }

    $mysql = new mysqli('localhost','root','','test');

    $email = $_POST['email'];
    $mysql = new mysqli('localhost','root','','test');

    mysqli_query($connect, "INSERT INTO `test` (`id`, `email`) VALUES (NULL, '$email');");

    header('Location: ../src/complete.html');

?>


