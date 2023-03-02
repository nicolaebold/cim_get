<?php

class Cromozom {

    public $no, $nr_gene, $gene, $fitness;
    
    function __construct($no, $nr_gene, $gene) {
        $this->no = $no;
        $this->nr_gene = $nr_gene;
        $this->gene = $gene;
        $this->fitness = $this->calcFitness($min, $max, $dd);
    }
    
    function calcFitness($min, $max, $dd): float{
        $val = 0.00; $fit = 0.00;
        for ($i = 0; $i < $this->nr_gene; $i++){
            $val += $dd[$this->gene[$i]];
        }
        
        $fit = abs($val - (($min + $max) / 2)); //echo $fit;
        
        settype($fit, "float");
        
        $this->fitness = $fit;
        
        return $fit;
    }

}

class Item{
    public $id, $st, $type, $dd, $tp, $pt, $kw, $vars;
    
     function __construct($id, $st, $type, $dd, $tp, $pt, $kw, $vars) {
        $this->id = $id;
        $this->st = $st;
        $this->type = $type;
        $this->dd = $dd;
        $this->tp = $tp;
        $this->pt = $pt;
        $this->kw = $kw;
        $this->vars = $vars;
    }
    
    function show($index){
        
        echo '<p class="">' . $index . ') '. $this->st . '</p>';
        
        if($this->type == 'm'){
            
            $vars_l = array('a', 'b', 'c', 'd');
            
            for($i = 0; $i < count($this->vars); $i++){
                
                echo '<div class="form-check">';
                    echo '<input class="form-check-input" type="radio" name="'. ($this->id - 1) .'" value="'. $vars_l[$i] .'">';
                    echo '<label class="form-check-label" for="'. $vars_l[$i] .'">';
                        echo $this->vars[$i];
                    echo '</label>';
                echo '</div>';
                
            }
            
        }
        else
            if($this->type == 's'){
                echo '<input type="text" name="" id="">';
            }
            else{
                echo '<textarea rows="20" cols="5" name="" id=""></textarea>';
            }
        
    }
}

class Test{
    
}

?>
