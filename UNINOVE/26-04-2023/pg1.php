<?php

    $destino="New York";
    switch ($destino) {
        case "São Paulo":
            echo 'Seja bem vindo a cidade que nunca para!';
            break;
        case "New York":
            echo 'Seja bem vindo a Big Apple!';
            break;
        case "Paris":
            echo 'Seja bem vindo a cidade Luz!';
            break;
        default: // default é a representação do else "se não"
            echo 'Não encontramos seu destino!';
    }
?><hr>
<a href="index.php">index.php</a><br>