<?php

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

require "class.php";
require "functions.php";

//preiau intrebarile din db

$items = array();

$conn = connect_db();

$sql = "SELECT * FROM item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $kw_i = explode(',' , $row['keywords']);
        
        $vars = array();
        
        if($row['var_a'] != ''){
            array_push($vars, $row['var_a']);
        }
        
        if($row['var_b'] != ''){
            array_push($vars, $row['var_b']);
        }
        
        if($row['var_c'] != ''){
            array_push($vars, $row['var_c']);
        }
        
        if($row['var_d'] != ''){
            array_push($vars, $row['var_d']);
        }
        
        $items[] = new Item((int)$row['id_q'], $row['enunt'], $row['type'], (float)$row['dd'], (float)$row['tp'], (float)$row['point'], $kw_i, $vars);
    }
} else {
  echo "0 results";
}

//$conn->close();

//preiau datele din formular

$N = count($items);
$M = (int)$_POST['m'];
$NP = (int)$_POST['np'];
$rm = (float)$_POST['rm'];
$rc = (float)$_POST['rc'];
$NG = (float)$_POST['ng'];
$min = (int)$_POST['min'];
$max = (int)$_POST['max'];
$type = $_POST['type'];

echo 'debug only: input in regula?<br>';
echo $N." ".$M." ".$NP." ".$rm." ".$rc;

$kw_string = $_POST['kw'];
$nr_kw_string = $_POST['nr_kw'];

$kw = explode(',',$kw_string);
$nr_kw = explode(',',$nr_kw_string);

//generez testul

for($i = 0; $i < count($items); $i++){
    echo count(array_intersect($kw, $items[$i]->kw));
}

$CHR = generare($N, $NP, $M, $items, $kw, $nr_kw, $type);

/*

echo "<br><br>Populatia initiala:<br>";

for($i = 0; $i < $NP; $i++){
    echo ($i + 1).": ";
    for($j = 0; $j < $M; $j++){
        echo $CHR[$i]->gene[$j]." ";
    }
    echo "| fitness = ".$CHR[$i]->calcFitness($min, $max, $items[$CHR[$i]->gene[$j]]->dd)."<br>";
}

*/

/*

for($i = 1; $i <= $NG; $i++){
    
    //mutatie
    if($rm > rand(0, 1))
        mutatie($CHR, $CHR[rand(0, $NP-1)], $NP, $, $N);
    
    //crossover
    if($rc > rand(0, 1))
        crossover($CHR, $NP, $M);
    
    //sortam in functie de fitness
    usort($CHR, function ($x, $y) {
        return $x->fitness > $y->fitness;
    });
}

*/


//afisez testul

echo '<p>The next test was generated:</p>';

    echo '<div class="form-group">
        <label for="stud-id">Student ID:</label>
        <input type="text" class="form-control" id="stud-id" name="stud-id" aria-describedby="m" placeholder="Student ID">
    </div>';

$test = array();

for($i = 0; $i < count($CHR[0]->gene); $i++){
    $items[$CHR[0]->gene[$i]]->show($CHR[0]->gene[$i]);
    $test[$i] = $CHR[0]->gene[$i];
}

//introducem generarile iin db

$sql = "INSERT INTO test (data_gen) VALUES (CURRENT_TIMESTAMP())";
$result = $conn->query($sql);

$sql = "SELECT id_test FROM test ORDER BY id_test DESC LIMIT 1";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    $id_test = $row['id_test'];
}

for($i = 0; $i < count($test); $i++){
    $sql = "INSERT INTO generation (id_test, id_q, data_g) VALUES ($id_test, $test[$i], CURRENT_TIMESTAMP())";
    $result = $conn->query($sql);
}

?>