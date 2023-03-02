<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<?php

//require "class.php";
//require "functions.php";

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

$sql = "SELECT id_test FROM test";
$result = $conn->query($sql);

$tests = array();

while($rows = $result->fetch_assoc()) {
    $tests[] = $rows['id_test'];
}

echo '<form action="test_solvers.php" method="POST">';

    echo '<div class="form-group">
        <label for="stud-id">Student ID:</label>
        <input type="text" class="form-control" id="stud-id" name="stud-id" aria-describedby="m" placeholder="Student ID">
    </div>';
    
    $id_test = rand(1, count($tests));
    
    echo '<p>Select the test:</p>';
    
    echo '<select class="form-select" name="test">';
        for($i = 0; $i < count($tests); $i++){
            if((int)$tests[$i] == $id_test){
                echo '<option value="'.$tests[$i].'" selected>'.$tests[$i].'</option>';
            }
            else
                echo '<option value="'.$tests[$i].'">'.$tests[$i].'</option>';
        }
    echo '</select>';
    
    echo '<input type="text" style="display:none" name="test_ok" value="'.$id_test.'" />';
    
    echo '<hr />';
    
    echo '<h3>Solve the next test:</h3>';
    
    $sql = "SELECT id_q FROM generation WHERE id_test = $id_test";
    $result = $conn->query($sql);
    
    $id_q = array();
    while($rows = $result->fetch_assoc()) {
        $id_q[] = $rows['id_q'];
    }
    
    var_dump($id_q);

    for($i = 0; $i < count($id_q); $i++){
        $items[$id_q[$i]]->show($id_q[$i]);
    }
    
    echo '<input type="submit" class="btn btn-primary" value="Solve!" />';

?>