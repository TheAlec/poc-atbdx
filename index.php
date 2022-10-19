<?php
$config = json_decode(file_get_contents("./config.json"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hello world !</title>
</head>

<body>
    <h1>Hello world in <?= $config->env ?> !</h1>

</body>

</html>