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
    <form action="/result.php" method="POST">
        <table>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
            </tr>
            <tr>
                <td>Post-It</td>
                <td>12.4<input type="hidden" name="prix[]" value="12.4"></td>
                <td><input type="number" min="0" name="quantity[]"></td>
            </tr>
            <tr>
                <td>Neulands</td>
                <td>20<input type="hidden" name="prix[]" value="20"></td>
                <td><input type="number" min="0" name="quantity[]"></td>
            </tr>
        </table>
        <input type="submit">
    </form>

    <?= multiplication(12.4, -2) ?>

</body>

</html>