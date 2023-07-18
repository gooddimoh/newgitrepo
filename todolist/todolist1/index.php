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
<form action="index.php" method="post">
    <input type="text" name="firstanme" value="firstanme">
    <input type="text" name="lastname" value="lastname">

    <input type="text" name="item" value="item">

    <input type="text" name="password1" value="password1">
    <input type="text" name="password2" value="password2">

    <input type="submit">
</form>

</body>
</html>
<?php

$postdata = json_encode($_POST);
var_dump($postdata);
die();