<?php

//var_dump($_POST);

require "class.php";
require "functions.php";

$conn = connect_db();

$id_stud = $_POST['stud-id'];

$sql = "SELECT prenume, nume FROM student WHERE id_stud = $id_stud";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
        $prenume = $row['prenume'];
    }

//echo '<br /> Hello, '. $prenume;

$id_test = $_POST['test_ok'];

$sql = "SELECT id_q FROM generation WHERE id_test = $id_test";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $q[] = $row['id_q'];
}

//var_dump($q);

$rasp = array();
for($i = 0; $i < count($q); $i++){
    $rasp[$i] = $_POST[$q[$i]];
}

//var_dump($rasp);

$punctaj = 0;
$var_rasp = array();
for($i = 0; $i < count($rasp); $i++){
    if($rasp[$i] == 'a'){
        $punctaj++;
    }
}

//inseram in tabela responses
for($i = 0; $i < count($q); $i++){
    
    $idq = $q[$i]; $ridq = $rasp[$i];
    $sqls = "INSERT INTO response (id_stud,id_test,id_q,raspuns,corect) VALUES ($id_stud,$id_test,$idq,'$ridq','a')";
    
    $results = $conn->query($sqls);
}

//echo "ok1";

//inseram in tabela test

$sql = "UPDATE test SET avg_score = avg_score + $punctaj, no_responses = no_responses + 1 WHERE id_test=$id_test";
$result = $conn->query($sql);

//inseram in tabela questions
$l = 0;
for($i = 0; $i < count($q); $i++){
    
    if($rasp[$i] == 'a')
        $l++;
    
    $idq = $q[$i];
    
    $sql = "UPDATE item SET ta_q = ta_q + 1, l_q = l_q + $l, m_q = (l_q*point) / ta_q, dd=l_q/ta_q WHERE id_q=$idq";
    $result = $conn->query($sql);
}

//echo '<br />Ai obtinut '.$punctaj. ' puncte!';

?>