﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Информация о пользователе Мну</title>    
</head>
<body>
<?php

    $name = 'Роман';
    $age = 37;
    $mail = 'mail@ya.ru';
    $city = 'Москва';
    $about_me = 'Грызу гранит науки, стачиваю зубы!';

?>
    
  <h2>Страница пользователя</h2>

  <table style = "background-color: lightblue;">
    <tr>
      <td><strong>Имя:</strong></td>
      <td><?= $name ?></td>
    </tr>

    <tr>
      <td><strong>Возраст:</strong></td>
      <td><?= $age ?></td>
    </tr>

    <tr>
      <td><strong>Адрес электронной почты:</strong></td>
      <td><a href="mailto:mail@ya.ru"><?= $mail ?></td>
    </tr>

    <tr>
      <td><strong>Город:</strong></td>
      <td><?= $city ?></td>
    </tr>

    <tr>
      <td><strong>О себе:</strong></td>
      <td><?= $about_me ?></td>
    </tr>

  </table>
</body>
</html>





