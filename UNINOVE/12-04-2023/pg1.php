
<?php

//                           Operadores de comparação (relacional)
// Igualdade ==
    $a = 10;
    $b = "10";
    $c = $a==$b;
    var_dump($c);
echo "<br><br>";
// Idêntico ===
    $a = 10;
    $b = "10";
    $c = $a===$b;
    var_dump($c);
echo "<br><br>";
// Não igual != Diferente <>
    $a = 10;
    $b = "10";
    $c = $a!=$b;
    $d = $a<>$b;
    var_dump($c);
    echo "<br>";
    var_dump($d);
echo "<br><br>";
//Não idêntico !==
    $a = 10;
    $b = "10";
    $c = $a!==$b;
    var_dump($c);
echo "<br><br>";
// Menor < Menor ou igual <=
    $a = 10;
    $b = 10;
    $c = $a<$b;
    $d = $a<=$b;
    var_dump($c);
    echo "<br>";
    var_dump($d);
echo "<br><br>";
// Maior > Maior ou igual >=
    $a = 10;
    $b = 10;
    $c = $a>$b;
    $d = $a>=$b;
    var_dump($c);
    echo "<br>";
    var_dump($d);
echo "<br><br>";

?><hr>
<a href="index.php">index.php</a><br>