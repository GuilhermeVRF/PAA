<?php

function busca_profundidade($grafo, &$visitados, $v_corrente) {
    echo "visitando " . ($v_corrente + 1) . "\n";

    // Marca como visitado
    $visitados[$v_corrente] = 1;

    for ($c = count($grafo) - 1; $c >= 0; $c--) {
        if ($grafo[$v_corrente][$c] != 0 && $visitados[$c] != 1) {
            busca_profundidade($grafo, $visitados, $c);
        }
    }
}

function main() {
    $grafo = [
        [0, 1, 1, 0, 0, 0, 0, 0],
        [1, 0, 0, 0, 1, 1, 0, 0],
        [1, 0, 0, 1, 0, 0, 0, 0],
        [0, 0, 1, 0, 0, 0, 0, 0],
        [0, 1, 0, 0, 0, 1, 1, 0],
        [0, 1, 0, 0, 1, 0, 1, 1],
        [0, 0, 0, 0, 1, 1, 0, 1],
        [0, 0, 0, 0, 0, 1, 1, 0]
    ];


    $visitados = array_fill(0, count($grafo), 0);

    busca_profundidade($grafo, $visitados, 0);
}

main();

?>