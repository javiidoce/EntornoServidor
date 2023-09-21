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
        echo"Los numeros divisores de $n son:<br>";
        for($i=1;$i<=$n;$i++){
            if($n%$i==0){
                echo "$i<br>";
            }
        }
    ?>
</body>
</html>