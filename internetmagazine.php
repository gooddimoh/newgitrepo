<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="form">
    <div class="filter">

        <input type="text" name="firstname">
        <input type="text" name="lastname">

        <input type="text" name="password1">
        <input type="text" name="password2">

        <input type="text" name="typefilter1">
        <input type="text" name="typefilter2">
        <input type="text" name="submit">

    </div>
</div>
</body>
</html>
<?php
$link = 'https://www.google.com.ua/';

$connect_to_api = file_get_contents($link);
var_dump($connect_to_api);
die();
?>