<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="matriz.php" method="post">
    <?php
    for($i = 1; $i <= 6; $i++) {

    ?>
    <p>
        Número <?php echo $i; ?>: 
        <input type="text" name="num<?php echo $i; ?>">
    </p>
    <?php
    }
    ?>

    <p>
        <button type="submit"> Cruzeiro </button>
    </p>

</form>

</body>
</html>


