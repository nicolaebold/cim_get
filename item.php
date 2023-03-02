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

echo '<h1>Item Analysis</h1>';

echo '<div class="row">';
    echo'<div class="col-md-12">';
    
    echo '<hr />';
    
    echo '<h3>List of revisable concepts</h3>';
    
    $revised = array();
    for($i = 0; $i < count($items); $i++){
        
        $id = $items[$i]->id;
        $sql = "SELECT m_q FROM item WHERE id_q=$id";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $score = $row['m_q'];
        }
                
        if($score < (0.27 * count($items)) && $score != 0){
            array_push($revised, implode(", ",$items[$i]->kw));
        }
    }
    
    echo 'The next concepts need to be revised:';
    echo '<ul type="square" class="list-group col-md-12">';
    for($i = 0; $i < count($revised); $i++)
        echo '<li class="list-group-item">'.$revised[$i].'</li>';
    echo '</ul>';
    
    echo '<hr />';
    
    echo '<h3>Analysis of generated items</h3>';
    
    echo '<table class="table table-hover" id="itemi">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Statement</th>
                    <th>Keywords</th>
                    <th>Type</th>
                    <th>Score</th>
                    <th>Difficulty</th>
                    <th>Average score</th>
                    <th>St dev</th>
                    <th>Discrimination</th>
                    <th>PBS</th>
                    <th>Number of correct answers</th>
                </tr>
            </thead>
            <tbody>';
            
            for($i = 0; $i < count($items); $i++){
                
                switch ($items[$i]->type){
                    case 'm': $type = "multiple-choice"; break;
                    case 'e': $type = "essay"; break;
                    case 's': $type = "short"; break;
                    default: $type = "multiple-choice";
                }
                
                $id = $items[$i]->id;
                $sql = "SELECT l_q FROM item WHERE id_q=$id";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    $score = $row['l_q'];
                    
                }
                
                $id = $items[$i]->id;
                $sql = "SELECT l_q FROM item WHERE id_q=$id";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    $score = $row['l_q'];
                    
                }
                
                $sql = "SELECT m_q FROM item WHERE id_q=$id";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    $avg = $row['m_q'];
                    
                }
                
                $sql = "SELECT point FROM item WHERE id_q=$id";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    $p = $row['point'];
                    
                }
                
                $scoruri = array(); $corecte = array();
                
                $sql = "SELECT m_q,l_q FROM item ORDER BY m_q DESC";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    $scoruri[] = (float)$row['m_q'];
                    $corecte[] = (int)$row['l_q'];
                }
                
                $nl = 0;
                
                $nl = (int)(0.27 * count($scoruri));
                
               $uc_q = 0; $ucq = array();
                for($j = 0; $j < $nl; $j++){
                    $uc_q += $corecte[$j];
                    $ucq[] = $corecte[$j];
                }
                
                $lc_q = 0; $lcq = array();
                for($j = (count($scoruri) - $nl); $j < count($scoruri); $j++){
                    $lc_q += $corecte[$j];
                    $lcq[] = $corecte[$j];
                }
                
                if($score)
                    $d_q = sqrt( ($uc_q - $lc_q) / $nl );
                else $d_q = 0;
                
                if($score)
                    $st_d = number_format(sqrt( ($score * $p - $avg) / $score),2);
                
                //$pbs = corr($ucq,$lcq);
                $pbs = 0;
                
                echo '<tr>
                        <td>'.$items[$i]->id.'</td>
                        <td>'.$items[$i]->st.'</td>
                        <td>'.implode(",",$items[$i]->kw).'</td>
                        <td>'.$type.'</td>
                        <td>'.$score * $p.'</td>
                        <td>'.number_format($items[$i]->dd,2).'</td>
                        <td>'.number_format($avg,2).'</td>
                        <td>'.$st_d.'</td>
                        <td>'.number_format($d_q,2).'</td>
                        <td>'.number_format($pbs,2).'</td>
                        <td>'.number_format($pbs,2).'</td>
                    </tr>';
            }
            
            echo '</tbody>
        </table>';
    
    echo '</div>';
echo '</div>';

?>
