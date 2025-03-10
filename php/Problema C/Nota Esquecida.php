<?php
// Lendo a entrada
$A = intval(fgets(STDIN));
$M = intval(fgets(STDIN));

// Calculando a outra nota
$B = 2 * $M - $A;

// print
echo $B;
?>