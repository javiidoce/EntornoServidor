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
    if($n==1){
        echo"Es lunes, dia laborable";
    }else if($n==2){
        echo"Es martes, dia laborable";
    }else if($n==3){
        echo"Es miercoles, dia laborable";
    }else if($n==4){
        echo"Es jueves, dia laborable";
    }else if($n==5){
        echo"Es viernes, dia laborable";
    }else if($n==6){
        echo"Es sabado, dia festivo";
    }else if($n==7){
        echo"Es domingo, dia festivo";
    }else if($n<=0){
        echo"ERROR, numero menor a 1. <br> <a href='ejercicio3.html'><input type='button' value='Volver'></a>";
    }else if($n>=8){
        echo"ERROR, numero mayor a 7. <br> <a href='ejercicio3.html'><input type='button' value='Volver'></a>";

    }
    ?>
</body>
</html>