<?php
require 'functions.php';
$config = json_decode(file_get_contents("./config.json"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hello world !</title>
</head>

<body>
    <h1><?= $config->env ?> !</h1>
    <table>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
        </tr>
        <tr>
            <td>Post-It</td>
            <td>12.4</td>
            <td><input type="text" name="quantité"></td>
        </tr>
        <tr>
            <td>Neulands</td>
            <td>20</td>
            <td><input type="text" name="quantité"></td>
        </tr>
    </table>
</body>

</html>