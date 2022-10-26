<?php
require_once __DIR__ . '/functions/isQuantityValid.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Results</title>
</head>

<body>
    <h2>Prix total</h2>
    <table>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
        <?php
        $totalPrice = 0;
        if (isset($_POST['quantity']) and isset($_POST['price'])) {
            foreach ($_POST['quantity'] as $key => $quantity) {
                $quantity = intval($quantity);
                if (isQuantityValid($quantity) and $quantity > 0) {
                    $productTotal = $_POST['price'][$key] * $quantity;
                    $totalPrice += $productTotal;
                    echo "<tr>";
                    echo "<td>" . $_POST['name'][$key] . "</td>";
                    echo "<td>" . $_POST['price'][$key] . "</td>";
                    echo "<td>" . $quantity . "</td>";
                    echo "<td class='TotalDuProduit'>" . $productTotal . "</td>";
                    echo "</tr>";
                }
            }
        }
        ?>
    </table>

    <h3>Total :<span id="result"><?= $totalPrice ?></span> €</h3>

</body>

</html>