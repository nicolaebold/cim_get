<?php


//functii de conectare mysql

function connect_db(){
    $servername = "localhost";
    $username = "nicolaeb_cim";
    $password = "aparecesifresh";
    $db = "nicolaeb_cim";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        
         echo "disConnected successfully";
    }
    echo "Connected successfully";
    
    return $conn;
}


//functii de generare

function generare($N, $NP, $M, $item, $kw, $nr_kw, $type) {
    
    $CHR = array();
    for ($i = 0; $i < $NP; $i++) {
        $gene = array();
        $ind = 0;
        
        for($k = 0; $k < count($nr_kw); $k++){
            
            for($j = $ind ; $j < $ind + $nr_kw[$k]; $j++){
                do{
                    $R = rand(1, $N);
                    $sw = 1;
                    if(in_array($R, $gene))
                        $sw = 0;
                    if($item[$R]->type != $type)
                        $sw = 0;
                    /*if(count(array_intersect($kw, $item[$R]->kw)) == 0) //in_array($kw[$k])
                        $sw = 0;*/
                }while ($sw == 0);
            
            array_push($gene, $R);
            }
            
            $ind += $nr_kw[$k];
            
        }
        
        $C = new Cromozom($i, $M, $gene);
        array_push($CHR, $C);
    }
    return $CHR;
}

function mutatie(&$CHR, $chr, $NP, $ch_mare, $N) {
    
    $newC = $chr;
    
    do{
        $R = rand(1, $N);
        $pos = rand(0, $chr->nr_gene - 1);
        $sw = 1;
        if(in_array($R, $chr->gene))
            $sw = 0;
        if($ch_mare[$R] != $ch_mare[$newC->gene[$pos]])
            $sw = 0;
    }while ($sw == 0);
    
    //realizam mutatia
    $newC->gene[$pos] = $R;

    array_push($CHR, $newC);
}

function crossover(&$CHR, $NP, $M) {
    
    $P = rand(1, $M-1);
    
    do{
        $sw = 1;
        
        //selectam aleatoriu 2 cromozomi si o pozitie aleatorie
        $C1 = rand(0, $NP - 1);
        $C2 = rand(0, $NP - 1);
        
        //verificam unicitatea genelor
        $newCa = array_merge(array_slice($CHR[$C1]->gene, 0, $P), array_slice($CHR[$C2]->gene, $P, $CHR[$C2]->nr_gene-$P));
        $newCa2 = array_merge(array_slice($CHR[$C2]->gene, 0, $P), array_slice($CHR[$C1]->gene, $P, $CHR[$C1]->nr_gene-$P));
        /*echo "<br>".$C1." ".$C2." | ";
        for($i = 0; $i < $M; $i++){
            echo $newC[$i]." ";
        }
        echo "<br>";*/
        if(count($newCa)!= count(array_unique($newCa))){
            $sw = 0;
        }
        if(count($newCa2)!= count(array_unique($newCa2))){
            $sw = 0;
        }
        if($C1 == $C2)
            $sw = 0;
    }while($sw == 0);
    $newC = new Cromozom(count($CHR), $M, $newCa);
    $newC2 = new Cromozom(count($CHR), $M, $newCa2);
    array_push($CHR, $newC);
    array_push($CHR, $newC2);
}

function ordonare($CHR) {
    
}

function valid($chr){
    return 1;
}


//functii de calcul indicatori
function corr($a, $b) {
    $sum_ab = 0;
    $sum_a = 0;
    $sum_b = 0;
    $sum_a_sqr = 0;
    $sum_b_sqr = 0;
    $n = min(array(count($a), count($b)));
    for ($i = 0; $i < $n; $i++) {
        if (!isset($a[$i]) || !isset($b[$i])) { continue; }
        $sum_ab += $a[$i] * $b[$i];
        $sum_a += $a[$i];
        $sum_b += $b[$i];
        $sum_a_sqr += pow($a[$i], 2);
        $sum_b_sqr += pow($b[$i], 2);
    }
    return ($sum_ab/$n - $sum_a/$n * $sum_b/$n) / (sqrt($sum_a_sqr/$n - pow($sum_a/$n, 2)) * sqrt($sum_b_sqr/$n - pow($sum_b/$n, 2)));
}


//functii de afisare


//functii de preluare a raspunsurilor


?>
