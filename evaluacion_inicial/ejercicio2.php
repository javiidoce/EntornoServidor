<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n=$_GET["numero"];
        $nn=$n*$n;
        $pi=pi();
        $pipi=2*pi();
        $longitud=$pipi*$n;
        $area=$nn*$pi;
        echo"La longitud del circulo sera de = $longitud";
        echo"<br>El area del circulo sera de = $area";
    ?>
</body>
</html>