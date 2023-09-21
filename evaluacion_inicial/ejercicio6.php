<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n=$_GET["numero1"];
        $contador1=1;

        echo"Con for: <br>";
        for($i=1;$i<=10;$i++){
            $multiplicacion=$n*$i;
            echo"$n x $i = $multiplicacion<br>";
        }
        //nipa, con if ni idea
        //de todos modos creo que la idea era usar las tres estructuras a la vez, osea que sacada
        echo"<br><br>Con if: <br>";
        $contador1=1;
        if($contador1<=10){
            $mul=$n*$contador1;
            echo "$n x $contador1 = $mul";
            $contador1++;
        }

        echo"<br><br>Con while: <br>";
        $j=1;
        while ($j <= 10) {
            $resultado = $n * $j;
            echo "$n x $j = $resultado<br>";
            $j++;
        }
    ?>
</body>
</html>