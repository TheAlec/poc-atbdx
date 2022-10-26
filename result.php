<?php
// votre code PHP ici :)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Results</title>
</head>

<body>
    <h2>Results</h2>
    <h3 id="result"><?php echo $_POST['prix'][0] * $_POST['quantity'][0] ?></h3>
</body>

</html>