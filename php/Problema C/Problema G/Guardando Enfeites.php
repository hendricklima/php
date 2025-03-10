<?php
// Lendo o número de enfeites
$N = intval(fgets(STDIN));

// Lendo a matriz de confianças
$confiancas = [];
for ($i = 0; $i < $N; $i++) {
    $confiancas[$i] = array_map('intval', explode(' ', fgets(STDIN)));
}

// Encontrando a ordem que maximiza a confiança
$ordem = [];
for ($i = 0; $i < $N; $i++) {
    $maxConfianca = max($confiancas[$i]);
    $posicao = array_search($maxConfianca, $confiancas[$i]);
    $ordem[] = $posicao + 1; // +1 porque as posições começam em 1
}

// Exibindo a ordem
echo implode(' ', $ordem);
?>
