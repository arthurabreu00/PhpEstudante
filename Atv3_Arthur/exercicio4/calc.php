<?php

$distanciaPecorrida = $_POST['num1'];
$tempoGasto = $_POST['num2'];

$velocidadeMedia = $distanciaPecorrida / $tempoGasto;

echo "A velocidade média foi $velocidadeMedia km/h.";