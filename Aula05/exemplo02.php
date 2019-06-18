<?php

function multiplicar($numero)
{
    while ($numero <= 10) {
        $numero *= 2;
        multiplicar($numero);
    }

    return $numero;
}

echo multiplicar(1);