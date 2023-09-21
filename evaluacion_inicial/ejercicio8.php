<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        $n=20;
        $Fibonacci = array();
        $Fibonacci[0] = 0;
        $Fibonacci[1] = 1;

        for ($i = 2; $i < $n; $i++) {
            $Fibonacci[$i] = $Fibonacci[$i - 1] + $Fibonacci[$i - 2];
        }
        echo "Los primeros $n términos de la serie de Fibonacci son:<br>";
        foreach ($Fibonacci as $numero) {
            echo "$numero <br>";
        }
    ?>
</body>
</html>