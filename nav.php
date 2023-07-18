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

</body>
</html>
<?php
$links = ['link1', 'link2', 'link3', 'link5', 'link6', 'link7', 'link8'];
echo "<ul>
    <li><a href=" . $links[0] . ">link1</a></li>
    <li><a href=" . $links[1] . ">link2</a></li>
    <li><a href=" . $links[2] . ">link3</a></li>
    <li><a href=" . $links[3] . ">link4</a></li>
    <li><a href=" . $links[4] . ">link5</a></li>
    <li><a href=" . $links[5] . ">link6</a></li>
    <li><a href=" . $links[6] . ">link7</a></li>
</ul>";