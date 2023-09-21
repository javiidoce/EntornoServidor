<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1=$_GET["numero1"];
    $n2=$_GET["numero2"];

    echo"La suma de los dos numeros da = ",$n1+$n2;
    echo"<br>La resta de los dos numeros da = ",$n1-$n2;
    echo"<br>La multiplicacion de los dos numeros da = ",$n1*$n2;
    echo"<br>La division de los dos numeros da = ",$n1/$n2;
    ?>
</body>
</html>