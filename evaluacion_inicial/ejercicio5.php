<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n=rand(0,500);
    echo"El numero random es = $n.<br>";
    if($n<=100){
        echo"El número esta entre 0 y 100.";
    }else if($n>=101&&$n<=200){
        echo"El número esta entre 100 y 200.";
    }else if($n>=201&&$n<=300){
        echo"El número esta entre 200 y 300.";
    }else if($n>=301&&$n<=400){
        echo"El número esta entre 300 y 400.";
    }else if($n>=401&&$n<=500){
        echo"El número esta entre 400 y 500.";
    }
    ?>
</body>
</html>