<?php
// Lendo a entrada
$C = intval(fgets(STDIN));
$A = intval(fgets(STDIN));

// Calculando o número mínimo de viagens
$viagens = ceil($A / ($C - 1));

// Exibindo o resultado
echo $viagens;
?>
