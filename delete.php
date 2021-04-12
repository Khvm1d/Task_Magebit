<?php

$connect = mysqli_connect('localhost','root','','test');


$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `test` WHERE `test`.`id` = '$id'");

header('Location: ../src/update.php');
?>