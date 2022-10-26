<?php
require_once __DIR__ . '/functions/isQuantityValid.php';

$totalPrice = 0;
if (isset($_POST['quantity']) and isset($_POST['price'])) {
    foreach ($_POST['quantity'] as $key => $quantity) {
        $quantity = intval($quantity);
        if (isQuantityValid($quantity)) {
            $totalPrice += $_POST['price'][$key] * $quantity;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Results</title>
</head>

<body>
<h2>Prix total</h2>
<h3 id="result"><?= $totalPrice ?> €</h3>
</body>

</html>