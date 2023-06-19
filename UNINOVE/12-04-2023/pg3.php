<?php
//         Operadores lógicos - E - and - &&

    $a=50;
    $b=120;
    $c=200;
    $d=(($a<=$b) and ($a<=$c));
    $e=(($a<=$b) && ($a>=$c));
    var_dump($d);
    echo "<br>";
    var_dump($e);

?><hr>
<a href="index.php">index.php</a><br>