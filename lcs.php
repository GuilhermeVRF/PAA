<?php

$firstString = "GUIDE";
$secondString = "GUIDE";

$lcs_table = [];

// Inicializando a matriz com 0
for($i = 0; $i < strlen($firstString); $i++){
    for($j = 0; $j < strlen($secondString); $j++){
        $lcs_table[$i][$j] = 0;
    }
}

// Implementando o LCS
for($i = 1; $i < strlen($firstString); $i++){
    for($j = 1; $j < strlen($secondString); $j++){
        if($firstString[$i] === $secondString[$j]){
            $lcs_table[$i][$j] = $lcs_table[$i - 1][$j - 1] + 1;
        } else {
            $lcs_table[$i][$j] = max($lcs_table[$i - 1][$j], $lcs_table[$i][$j - 1]);
        }
    }
}

// Obtendo o resultado final
print_r($lcs_table);