<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>
<body>
    <?php
         $x = 100;
         $y = 22;
 
         do {
            $z = $x * $y;
            echo "le produit de $x * $y est: $z <br>";
            $x--;
         } while ($x >= 10);
    ?>
</body>
</html>