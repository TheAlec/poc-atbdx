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
    <h1><?= $config->env ?> !</h1>
    <form action="/result.php" method="POST">
        <table>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
            </tr>
            <tr data-id="1">
                <td>Post-It<input type="hidden" name="name[1]" value="Post-It"></td>
                <td>12.4<input type="hidden" name="price[1]" value="12.4"></td>
                <td><input type="number" min="0" name="quantity[1]"></td>
            </tr>
            <tr data-id="2">
                <td>Neulands<input type="hidden" name="name[2]" value="Neulands"></td>
                <td>20<input type="hidden" name="price[2]" value="20"></td>
                <td><input type="number" min="0" name="quantity[2]"></td>
            </tr>
        </table>
        <input type="submit">
    </form>

</body>

</html>