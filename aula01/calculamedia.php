<?php
    $nota1 = "3";
        echo "Nota 1: $nota1 <br>";
    $nota2 = "7";
        echo "Nota 2: $nota2 <br>";
    $nota3 = "9";
        echo "Nota 3: $nota3 <br>";

    $media = ($nota1 + $nota2 + $nota3 / 5);
        echo "Média: $media <br>";

    if ($media >= 7) {
        echo "Aprovado(a)! <br>";
    }else {
        echo "Reprovado(a) <br>";
    }


?>