<?php

$num = 1;
$name = "sequencia";
$filename = $name . '.txt';
while (file_exists($filename)) {
    $filename = $name . $num . '.txt';
    $num = $num + 1;
}

$fp = fopen($filename, 'w');

$total_dezenas = 6;
$total_sequencias = 250000000;

$min1 = 1;
$max1 = 60;

$min2 = 11;
$max2 = 23;

$min3 = 20;
$max3 = 28;

$min4 = 28;
$max4 = 42;

$min5 = 37;
$max5 = 51;

$min6 = 48;
$max6 = 57;

$cont = 1;

while ($cont <= $total_sequencias) {
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


    if($dezena1 < $min1 || $dezena1 > $max1){

        while ($dezena1 < $min1 || $dezena1 > $max1) {
            $rand_keys_1s = array_rand($globo1, 1);
            $dezena1 = $globo1[$rand_keys_1s];
        }
    }

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


    if($dezena2 < $min2 || $dezena2 > $max2){

        while ($dezena2 < $min2 || $dezena2 > $max2) {
            $rand_keys_2s = array_rand($globo2, 1);
            $dezena2 = $globo2[$rand_keys_2s];
        }
    }

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

    if($dezena3 < $min3 || $dezena3 > $max3){

        while ($dezena2 < $min2 || $dezena2 > $max2) {
            $rand_keys_3s = array_rand($globo3, 1);
            $dezena3 = $globo3[$rand_keys_3s];
        }
    }

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


    if($dezena4 < $min4 || $dezena4 > $max4){

        while ($dezena4 < $min4 || $dezena4 > $max4) {
            $rand_keys_4s = array_rand($globo4, 1);
            $dezena4 = $globo4[$rand_keys_4s];
        }
    }


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


    if($dezena5 < $min5 || $dezena5 > $max5){

        while ($dezena5 < $min5 || $dezena5 > $max5) {
            $rand_keys_5s = array_rand($globo5, 1);
            $dezena5 = $globo5[$rand_keys_5s];
        }
    }

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

    if($dezena6 < $min6 || $dezena6 > $max6){

        while ($dezena6 < $min6 || $dezena6 > $max6) {
            $rand_keys_6s = array_rand($globo6, 1);
            $dezena6 = $globo6[$rand_keys_6s];
        }
    }

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


    echo "$dezena1 $dezena2 $dezena3 $dezena4 $dezena5 $dezena6";

    echo "<br>";
    fwrite($fp, "$dezena1 $dezena2 $dezena3 $dezena4 $dezena5 $dezena6\n");


    $cont = $cont + 1;
}
