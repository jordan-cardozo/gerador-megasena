<?php
$cont = 1;


$primos = array(
    2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59
);

$fibonacci = array(
    1, 2, 3, 5, 8, 13, 21, 34, 55
);

$quadrante1 = array(
    1,     2,     3,     4,     5,
    11,    12,    13,    14,    15,
    21,    22,    23,    24,    25
);

$quadrante2 = array(
    6,     7,     8,     9,     10,
    16,    17,    18,    19,    20,
    26,    27,    28,    29,    30
);

$quadrante3 = array(
    31,    32,    33,    34,    35,
    41,    42,    43,    44,    45,
    51,    52,    53,    54,    55
);

$quadrante4 = array(
    36,    37,    38,    39,    40,
    46,    47,    48,    49,    50,
    56,    57,    58,    59,    60
);

$taufic1 = array(
    1,	2,
    11,	12
);

$taufic2 = array(
    3,	4,
    13,	14
);

$taufic3 = array(
    5,	6,
    15,	16
);

$taufic4 = array(
    7,	8,
    17,	18
);

$taufic5 = array(
    9,	10,
    19,	20
);

$taufic6 = array(
    21,	22,
    31,	32
);

$taufic7 = array(
    23,	24,
    33,	34
);

$taufic8 = array(
    25,	26,
    35,	36
);

$taufic9 = array(
    27,	28,
    37,	38

);

$taufic10 = array(
    29,	30,
    39,	40
);

$taufic11 = array(
    41,	42,
    51,	52
);

$taufic12 = array(
    43,	44,
    53,	54
);

$taufic13 = array(
    45,	46,
    55,	56
);

$taufic14 = array(
    47,	48,
    57,	58
);

$taufic15 = array(
    49,	50,
    59,	60
);


$n = 1;
$name = "sequencia";
$filename = $name . '.txt';
while (file_exists($filename)) {
    $filename = $name . $n . '.txt';
    $n = $n + 1;
}

$fp = fopen($filename, 'w');

$total_dezenas = 6;
$total_sequencias = 2445;

// $min1 = 3;
// $max1 = 48;

// $min2 = 11;
// $max2 = 23;

// $min3 = 20;
// $max3 = 28;

// $min4 = 28;
// $max4 = 42;

// $min5 = 37;
// $max5 = 51;

// $min6 = 48;
// $max6 = 57;

$min_fibonacci = 0;
$max_fibonacci = 2;

$min_primo = 0;
$max_primo = 3;

$min_multiplo3 = 1;
$max_multiplo3 = 3;

$min_pares = 2;
$max_pares = 4;


$min_quadrantes = 1;
$max_quadrantes = 2;

$min_soma_dezenas_sena = 151;
$max_soma_dezenas_sena = 215;

$min_soma_dezenas_quina1 = 151;
$max_soma_dezenas_quina1 = 215;

$min_soma_dezenas_quina2 = 151;
$max_soma_dezenas_quina2 = 215;

$min_soma_dezenas_quina3 = 119;
$max_soma_dezenas_quina3 = 182;

$min_soma_dezenas_quina4 = 119;
$max_soma_dezenas_quina4 = 282;

$min_soma_dezenas_quina5 = 119;
$max_soma_dezenas_quina5 = 182;

$min_soma_dezenas_quina6 = 86;
$max_soma_dezenas_quina6 = 150;

$min_taufic = 0;
$max_taufic = 2;


while ($cont <= $total_sequencias) {
    $dezena1 = 0;
    $dezena2 = 0;
    $dezena3 = 0;
    $dezena4 = 0;
    $dezena5 = 0;
    $dezena6 = 0;

    $qtd_fibonacci = 0;
    $qtd_primos = 0;
    $qtd_pares = 0;
    $qtd_impares = 0;
    $qtd_multiplo3 = 0;
    $soma_dezenas_sena = 0;
    $soma_dezenas_quina1 = 0;
    $soma_dezenas_quina2 = 0;
    $soma_dezenas_quina3 = 0;
    $soma_dezenas_quina4 = 0;
    $soma_dezenas_quina5 = 0;
    $soma_dezenas_quina6 = 0;
    $qtd_quadrante1 = 0;
    $qtd_quadrante2 = 0;
    $qtd_quadrante3 = 0;
    $qtd_quadrante4 = 0;
    $qtd_taufic1 = 0;
    $qtd_taufic2 = 0;
    $qtd_taufic3 = 0;
    $qtd_taufic4 = 0;
    $qtd_taufic5 = 0;
    $qtd_taufic6 = 0;
    $qtd_taufic7 = 0;
    $qtd_taufic8 = 0;
    $qtd_taufic9 = 0;
    $qtd_taufic10 = 0;
    $qtd_taufic11 = 0;
    $qtd_taufic12 = 0;
    $qtd_taufic13 = 0;
    $qtd_taufic14 = 0;
    $qtd_taufic15 = 0;
    $rest1 = 10;
    $rest2 = 10;
    $rest3 = 10;
    $rest4 = 10;
    $rest5 = 10;
    $rest6 = 10;

    while (

        // ($qtd_fibonacci < $min_fibonacci || $qtd_fibonacci > $max_fibonacci) ||
        // ($qtd_primos < $min_primo || $qtd_primos > $max_primo) ||
        ($qtd_pares < $min_pares || $qtd_pares > $max_pares) ||
        // ($qtd_multiplo3 < $min_multiplo3 || $qtd_multiplo3 > $max_multiplo3) ||
        ($qtd_quadrante1 < $min_quadrantes || $qtd_quadrante1 > $max_quadrantes) ||
        ($qtd_quadrante2 < $min_quadrantes || $qtd_quadrante2 > $max_quadrantes) ||
        ($qtd_quadrante3 < $min_quadrantes || $qtd_quadrante3 > $max_quadrantes) ||
        ($qtd_quadrante4 < $min_quadrantes || $qtd_quadrante4 > $max_quadrantes) ||
        ($soma_dezenas_sena < $min_soma_dezenas_sena || $soma_dezenas_sena > $max_soma_dezenas_sena)
        // ($soma_dezenas_quina1 < $min_soma_dezenas_quina1 || $soma_dezenas_quina1 > $max_soma_dezenas_quina1) ||
        // ($soma_dezenas_quina2 < $min_soma_dezenas_quina2 || $soma_dezenas_quina2 > $max_soma_dezenas_quina2) ||
        // ($soma_dezenas_quina3 < $min_soma_dezenas_quina3 || $soma_dezenas_quina3 > $max_soma_dezenas_quina3) ||
        // ($soma_dezenas_quina4 < $min_soma_dezenas_quina4 || $soma_dezenas_quina4 > $max_soma_dezenas_quina4) ||
        // ($soma_dezenas_quina5 < $min_soma_dezenas_quina5 || $soma_dezenas_quina5 > $max_soma_dezenas_quina5)
        // // ($soma_dezenas_quina6 < $min_soma_dezenas_quina6 || $soma_dezenas_quina6 > $max_soma_dezenas_quina6)
        // ($qtd_taufic1 < $min_taufic || $qtd_taufic1 > $max_taufic) ||
        // ($qtd_taufic2 < $min_taufic || $qtd_taufic2 > $max_taufic) ||
        // ($qtd_taufic3 < $min_taufic || $qtd_taufic3 > $max_taufic) ||
        // ($qtd_taufic4 < $min_taufic || $qtd_taufic4 > $max_taufic) ||
        // ($qtd_taufic5 < $min_taufic || $qtd_taufic5 > $max_taufic) ||
        // ($qtd_taufic6 < $min_taufic || $qtd_taufic6 > $max_taufic) ||
        // ($qtd_taufic7 < $min_taufic || $qtd_taufic7 > $max_taufic) ||
        // ($qtd_taufic8 < $min_taufic || $qtd_taufic8 > $max_taufic) ||
        // ($qtd_taufic9 < $min_taufic || $qtd_taufic9 > $max_taufic) ||
        // ($qtd_taufic10 < $min_taufic || $qtd_taufic10 > $max_taufic) ||
        // ($qtd_taufic11 < $min_taufic || $qtd_taufic11 > $max_taufic) ||
        // ($qtd_taufic12 < $min_taufic || $qtd_taufic12 > $max_taufic) ||
        // ($qtd_taufic13 < $min_taufic || $qtd_taufic13 > $max_taufic) ||
        // ($qtd_taufic14 < $min_taufic || $qtd_taufic14 > $max_taufic) ||
        // ($qtd_taufic15 < $min_taufic || $qtd_taufic15 > $max_taufic)
        // ($dezena1 == $dezena2-1 && $dezena2 == $dezena3-1 && $dezena3 == $dezena4-1) ||
        // ($dezena3 == $dezena4-1 && $dezena4 == $dezena5-1 && $dezena5 == $dezena6-1)
    ) {
        $dezena1 = 0;
        $dezena2 = 0;
        $dezena3 = 0;
        $dezena4 = 0;
        $dezena5 = 0;
        $dezena6 = 0;

        $globo1 = null;
        $n = 1;
        while ($n <= 60) {
            $globo1[$n] = $n;
            $n=$n+1;
        }
    
        $rand_keys_1 = array_rand($globo1, 1);
        $dezena1 = $globo1[$rand_keys_1];
        // echo "dezena1: $dezena1 \n";
        // echo "<br>";
    
        $globo2 = null;
        $n = 1;
        while ($n <= 59) {
            if($dezena1 <> $n){
                $globo2[$n] = $n;
            } 
            $n=$n+1;       
        }
    
    
        $rand_keys_2 = array_rand($globo2, 1);
        $dezena2 = $globo2[$rand_keys_2];
        // echo "dezena2: $dezena2 \n";
        // echo "<br>";
    
        $globo3 = null;
        $n = 1;
        while ($n <= 58) {
            if($dezena1 <> $n && $dezena2 <> $n){
                $globo3[$n] = $n;
            } 
            $n=$n+1;       
        }
    
    
    
        $rand_keys_3 = array_rand($globo3, 1);
        $dezena3 = $globo3[$rand_keys_3];
        // echo "dezena2: $dezena3 \n";
        // echo "<br>";
    
    
        $globo4 = null;
        $n = 1;
        while ($n <= 57) {
            if($dezena1 <> $n && $dezena2 <> $n && $dezena3 <> $n){
                $globo4[$n] = $n;
            }
            $n=$n+1;        
        }
    
    
        $rand_keys_4 = array_rand($globo4, 1);
        $dezena4 = $globo4[$rand_keys_4];
        // echo "dezena4: $dezena4 \n";
        // echo "<br>";
    
    
        $globo5 = null;
        $n = 1;
        while ($n <= 56) {
            if($dezena1 <> $n && $dezena2 <> $n && $dezena3 <> $n && $dezena4 <> $n){
                $globo5[$n] = $n;
            } 
            $n=$n+1;       
        }
    
        $rand_keys_5 = array_rand($globo5, 1);
        $dezena5 = $globo5[$rand_keys_5];
        // echo "dezena5: $dezena5 \n";
        // echo "<br>";
    
        $globo6 = null;
        $n = 1;
        while ($n <= 55) {
            if($dezena1 <> $n && $dezena2 <> $n && $dezena3 <> $n && $dezena4 <> $n && $dezena5 <> $n){
                $globo6[$n] = $n;
            }   
            $n=$n+1;     
        }
    
        $rand_keys_6 = array_rand($globo6, 1);
        $dezena6 = $globo6[$rand_keys_6];
        // echo "dezena6: $dezena6 \n";
        // echo "<br>";
    
    
        $a = 0;
    
        while (!($dezena1 < $dezena2 && $dezena2 < $dezena3 && $dezena3 < $dezena4 && $dezena4 < $dezena5 && $dezena5 < $dezena6)) {
            if ($dezena1 > $dezena2) {
                $a = $dezena2;
                $dezena2 = $dezena1;
                $dezena1 = $a;
            }
    
            if ($dezena2 > $dezena3) {
                $a = $dezena3;
                $dezena3 = $dezena2;
                $dezena2 = $a;
            }
    
            if ($dezena3 > $dezena4) {
                $a = $dezena4;
                $dezena4 = $dezena3;
                $dezena3 = $a;
            }
    
            if ($dezena4 > $dezena5) {
                $a = $dezena5;
                $dezena5 = $dezena4;
                $dezena4 = $a;
            }
    
            if ($dezena5 > $dezena6) {
                $a = $dezena6;
                $dezena6 = $dezena5;
                $dezena5 = $a;
            }
        }

        $sequencia = array($dezena1, $dezena2, $dezena3, $dezena4, $dezena5, $dezena6);

        // array_multisort($sequencia, SORT_NUMERIC, SORT_DESC);
        // echo "<br>";
        // print_r($sequencia);
        // echo "<br>";

        $qtd_fibonacci = 0;
        $qtd_primos = 0;
        $qtd_pares = 0;
        $qtd_impares = 0;
        $qtd_multiplo3 = 0;
        $soma_dezenas_sena = 0;
        $soma_dezenas_quina1 = 0;
        $soma_dezenas_quina2 = 0;
        $soma_dezenas_quina3 = 0;
        $soma_dezenas_quina4 = 0;
        $soma_dezenas_quina5 = 0;
        $soma_dezenas_quina6 = 0;
        $qtd_quadrante1 = 0;
        $qtd_quadrante2 = 0;
        $qtd_quadrante3 = 0;
        $qtd_quadrante4 = 0;
        $qtd_taufic1 = 0;
        $qtd_taufic2 = 0;
        $qtd_taufic3 = 0;
        $qtd_taufic4 = 0;
        $qtd_taufic5 = 0;
        $qtd_taufic6 = 0;
        $qtd_taufic7 = 0;
        $qtd_taufic8 = 0;
        $qtd_taufic9 = 0;
        $qtd_taufic10 = 0;
        $qtd_taufic11 = 0;
        $qtd_taufic12 = 0;
        $qtd_taufic13 = 0;
        $qtd_taufic14 = 0;
        $qtd_taufic15 = 0;
        $rest1 = 10;
        $rest2 = 10;
        $rest3 = 10;
        $rest4 = 10;
        $rest5 = 10;
        $rest6 = 10;


        for ($i = 0; $i <= 5; $i++) {

            foreach ($fibonacci as $value) {
                if ($sequencia[$i] == $value) {
                    $qtd_fibonacci = $qtd_fibonacci + 1;
                }
            }

            foreach ($primos as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_primos = $qtd_primos + 1;
                }
            }

            foreach ($quadrante1 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_quadrante1 = $qtd_quadrante1 + 1;
                }
            }

            foreach ($quadrante2 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_quadrante2 = $qtd_quadrante2 + 1;
                }
            }

            foreach ($quadrante3 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_quadrante3 = $qtd_quadrante3 + 1;
                }
            }

            foreach ($quadrante4 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_quadrante4 = $qtd_quadrante4 + 1;
                }
            }

            foreach ($taufic1 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic1 = $qtd_taufic1 + 1;
                }
            }

            foreach ($taufic2 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic2 = $qtd_taufic2 + 1;
                }
            }

            foreach ($taufic3 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic3 = $qtd_taufic3 + 1;
                }
            }
            
            foreach ($taufic4 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic4 = $qtd_taufic4 + 1;
                }
            }

            foreach ($taufic5 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic5 = $qtd_taufic5 + 1;
                }
            }

            foreach ($taufic6 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic6 = $qtd_taufic6 + 1;
                }
            }

            foreach ($taufic7 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic7 = $qtd_taufic7 + 1;
                }
            }

            foreach ($taufic8 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic8 = $qtd_taufic8 + 1;
                }
            }

            foreach ($taufic9 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic9 = $qtd_taufic9 + 1;
                }
            }

            foreach ($taufic10 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic10 = $qtd_taufic10 + 1;
                }
            }

            foreach ($taufic11 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic11 = $qtd_taufic11 + 1;
                }
            }

            foreach ($taufic12 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic12 = $qtd_taufic12 + 1;
                }
            }

            foreach ($taufic13 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic13 = $qtd_taufic13 + 1;
                }
            }

            foreach ($taufic14 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic14 = $qtd_taufic14 + 1;
                }
            }

            foreach ($taufic15 as $value) {
                if ($sequencia[$i]  == $value) {
                    $qtd_taufic15 = $qtd_taufic15 + 1;
                }
            }

            if ($sequencia[$i] % 3 == 0) {
                $qtd_multiplo3 = $qtd_multiplo3 + 1;
            }

            if ($sequencia[$i] % 2 == 0) {
                $qtd_pares = $qtd_pares + 1;
            }

            if ($sequencia[$i] % 2 == 1) {
                $qtd_impares = $qtd_impares + 1;
            }

            $soma_dezenas_sena = $soma_dezenas_sena + $sequencia[$i];

            if($i<>6){
                $soma_dezenas_quina6 = $soma_dezenas_quina6 + $sequencia[$i];
            }

            if($i<>5){
                $soma_dezenas_quina5 = $soma_dezenas_quina5 + $sequencia[$i];
            }

            if($i<>4){
                $soma_dezenas_quina4 = $soma_dezenas_quina4 + $sequencia[$i];
            }

            if($i<>3){
                $soma_dezenas_quina3 = $soma_dezenas_quina3 + $sequencia[$i];
            }

            if($i<>2){
                $soma_dezenas_quina2 = $soma_dezenas_quina2 + $sequencia[$i];
            }

            if($i<>1){
                $soma_dezenas_quina1 = $soma_dezenas_quina1 + $sequencia[$i];
            }

            // echo $soma_dezenas_quina6;
            // echo "<br>";
            // echo $soma_dezenas_quina5;
            // echo "<br>";
            // echo $soma_dezenas_quina4;
            // echo "<br>";
            // echo $soma_dezenas_quina3;
            // echo "<br>";
            // echo $soma_dezenas_quina2;
            // echo "<br>";
            // echo $soma_dezenas_quina1;
            // echo "<br>";
        }
    }

    // https://www.lotodicas.com.br/mega-sena/estatisticas

    echo "$dezena1 $dezena2 $dezena3 $dezena4 $dezena5 $dezena6\n";
    echo "<br>";
    echo "Qtd Fibonacci: $qtd_fibonacci, ";
    echo "Qtd Primos: $qtd_primos, ";
    echo "Qtd multiplo de Três: $qtd_multiplo3, ";
    echo "Qtd pares: $qtd_pares, ";
    echo "Qtd impares: $qtd_impares, ";
    echo "Qtd Quadrante Um: $qtd_quadrante1, ";
    echo "Qtd Quadrante Dois: $qtd_quadrante2, ";
    echo "Qtd Quadrante Três: $qtd_quadrante3, ";
    echo "Qtd Quadrante Quatro: $qtd_quadrante4, ";
    echo "soma das dezena: $soma_dezenas_sena\n";

    echo "<br>";
    fwrite($fp, "$dezena1 $dezena2 $dezena3 $dezena4 $dezena5 $dezena6\n");


    $cont = $cont + 1;
}
