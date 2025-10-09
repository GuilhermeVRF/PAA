<?php

$list = [
    [10,15,9,15],
    [5,7,5,10],
    [12,5,2,14]
];

$tamanhoEsteira = count($list[0]);
$numeroEsteiras = count($list);

$posicaoAtual = null;

$solucao = [];
for($coluna = 0; $coluna < $tamanhoEsteira; $coluna++){
    $valoresCandidatos = [];
    for($linha = 0; $linha < $numeroEsteiras; $linha++){
        if( !is_null($posicaoAtual) &&
            $linha != $posicaoAtual + 1 &&
            $linha != $posicaoAtual &&
            $linha != $posicaoAtual - 1
        ) continue;


        $valoresCandidatos[$linha] = $list[$linha][$coluna];
    }

    arsort($valoresCandidatos);

    $sortedKeys = array_keys($valoresCandidatos);
    $posicaoAtual = $sortedKeys[0];

    $solucao[] = "Esteira $coluna: $valoresCandidatos[$posicaoAtual]";
}

print_r($solucao);