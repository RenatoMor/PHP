<?php
    //                CONSTANTES
    // Constantes devem ser declaradas em maiúsculas.
    // Constantes não podem ter um sinal de cifrão ( $ ) antes delas;
    // Constantes só podem ser definidas utilizando a função define();
    /* Constantes podem ser definidas e acessadas de qualquer lugar sem
    que as regras de escopo de variáveis sejam aplicadas;*/
    /* Constantes não podem ser redefinidas ou eliminadas depois que
       elas são criadas;*/
    /* Constantes só podem conter valores escalares (integer, float, string
        ou boolean).*/

    // SINTAXE - define ("nome_da_constante" , valor da constante);

    define("PI" , 3.14159);
    define("HOST", "localhost");
    $valor = 2 * PI;
    echo HOST . " - " . $valor;
?><hr>
<a href="index.php">index.php</a><br>