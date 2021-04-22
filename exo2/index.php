<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>
<body>
    <?php
        $x = 0;
        $y = 48;

        do {
           $z = $x * $y;
           echo "le produit de $x * $y est: $z <br>";
           $x++;
        } while ($x <= 20);
    ?>
</body>
</html>