<?php
    $config = file_get_contents("./config.json");
    var_dump(json_decode($config));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello world !</title>
</head>
<body>
<h1>Hello world in <?= $config->env ?>!</h1>
</body>
</html>