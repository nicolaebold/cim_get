<?php

require "class.php";
require "functions.php";

$conn = connect_db();

echo '<hr />';

$sql = "SELECT * FROM test";
$result = $conn->query($sql);

$id_tests = array(); $data_test = array(); $avg_sc = array(); $no = array();

while($row = $result->fetch_assoc()) {
    $id_tests[] = $row['id_test'];
    $data_test[] = $row['data_gen'];
    $avg_sc[] = $row['avg_score'];
    $no[] = $row['no_responses'];
    
}

echo '<h2>Generated tests</h2>';

echo '<table id="teste">
    <thead>
        <tr>
            <th>Test ID</th>
            <th>Number of items</th>
            <th>Generation date</th>
            <th>Average score</th>
            <th>Number of responses</th>
        </tr>
    </thead>
    <tbody>';
    
    for($i = 0; $i < count($id_tests); $i++){
        
        $sql = "SELECT id_q FROM generation WHERE id_test = $id_tests[$i]";
        $result = $conn->query($sql);
        
        $j = 0;
        while($row = $result->fetch_assoc()) {
            $j++;
        }
        
        echo '<tr>';
            echo '<td>T' . $id_tests[$i] . '</td>';
            echo '<td>' . $j . '</td>';
            echo '<td>' . $data_test[$i] . '</td>';
            echo '<td>' . $avg_sc[$i] . '</td>';
            echo '<td>' . $no[$i] . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody>
</table>';

?>

