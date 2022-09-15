<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Repeticao</title>
</head>
<body>
<?php
    $v = isset($_GET["num"])?$_GET["num"]:0;
    echo "<h2>Mostrando a tabuada do: $v</h2>";
    echo "<h3><br/>MULTIPLICAÇÃO:</h3>";
    $c = 1;
    do{
        echo "<h3>$v x $c = " . ($v * $c) . "<br/> </h3>";
        $c++;
    } while($c <= 10);

    echo "<h3><br/>ADIÇÃO:</h3>";
    $v = isset($_GET["num"])?$_GET["num"]:0;
    $c = 1;
    do {
        echo "<h3> $v + $c = " . ($v + $c) . "</h3>";
        $c++;
    }
    while($c <= 10);
?>
</body>
</html>

