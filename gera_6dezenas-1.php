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
$total_sequencias = 2;

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
    echo "dezena1: $dezena1 \n";
    echo "<br>";

    $globo2 = null;
    $n = 1;
    $b = 0;
    while ($n <= 59) {
        if($dezena1 <> $n+$b){
            $globo2[$n] = $n+$b;
            $n=$n+1;
        }else{
            $b=$b+1;
        } 
               
    }


    $rand_keys_2 = array_rand($globo2, 1);
    $dezena2 = $globo2[$rand_keys_2];
    echo "dezena2: $dezena2 \n";
    echo "<br>";
    print_r($globo2);

    $globo3 = null;
    $n = 1;
    $b = 0;
    while ($n <= 58) {
        if($dezena1 <> $n && $dezena2 <> $n+$b){
            $globo3[$n] = $n+$b;
            $n=$n+1;
        }else{
            $b=$b+1;
        }            
    }



    $rand_keys_3 = array_rand($globo3, 1);
    $dezena3 = $globo3[$rand_keys_3];
    echo "dezena3: $dezena3 \n";
    echo "<br>";
    print_r($globo3);


    $globo4 = null;
    $n = 1;
    $b = 0;
    while ($n <= 57) {
        if($dezena1 <> $n && $dezena2 <> $n && $dezena3 <> $n+$b){
            $globo4[$n] = $n+$b;
            $n=$n+1;  
        }else{
            $b=$b+1;
        }
              
    }


    $rand_keys_4 = array_rand($globo4, 1);
    $dezena4 = $globo4[$rand_keys_4];

    $globo5 = null;
    $n = 1;
    $b = 0;
    while ($n <= 56) {
        if($dezena1 <> $n && $dezena2 <> $n && $dezena3 <> $n && $dezena4 <> $n+$b){
            $globo5[$n] = $n+$b;
            $n=$n+1;
        }else{
            $b=$b+1;
        }        
    }

    $rand_keys_5 = array_rand($globo5, 1);
    $dezena5 = $globo5[$rand_keys_5];

    $globo6 = null;
    $n = 1;
    $b = 0;
    while ($n <= 55) {
        if($dezena1 <> $n && $dezena2 <> $n && $dezena3 <> $n && $dezena4 <> $n && $dezena5 <> $n+$b){
            $globo6[$n] = $n+$b;
            $n=$n+1;
        }else{
            $b=$b+1;
        }        
    }

    $rand_keys_6 = array_rand($globo6, 1);
    $dezena6 = $globo6[$rand_keys_6];

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
