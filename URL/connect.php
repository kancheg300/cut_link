<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'cut_php_course');

if (!$conn) die("Ошибка подключения к БД: \n" . mysqli_connect_error());