<?php 
    session_start(); # Deve ser a primeira linha do arquivo

$soma = 0;

for ($i=0; $i < 4 ; $i++) { 
    $soma += isset($_POST['num'.$i]) ? $_POST['num'.$i] : 0;
}   

$media = $soma / count($numeros);

$resultado = 'A média obtida pela aluno foi: ' . $media;
$resultado .= '<br>'. ($media > 60 ? ' Aprovado': ' Reprovado');

$_SESSION['resultado'] = $resultado;
header('Location: index.php');
exit;

?>