<body>
<h2>Generation form</h2>

<form action="rezolva.php" method="POST" id="testg">
    
    <div class="form-group">
        <label for="m">Number of items:</label>
        <input type="number" class="form-control" id="m" name="m" aria-describedby="m" placeholder="Number of items">
    </div>
    
    <div class="form-group">
        <label for="np">Initial population size:</label>
        <input type="number" class="form-control" id="np" name="np" placeholder="Initial population size">
    </div>
    
    <div class="form-group">
        <label for="ng">Number of generations:</label>
        <input type="number" class="form-control" id="ng" name="ng" placeholder="Number of generations">
    </div>
    
    <div class="form-group">
        <label for="rm">Mutation rate:</label>
        <input type="number" class="form-control" id="rm" name="rm" placeholder="Mutation rate">
    </div>
    
    <div class="form-group">
        <label for="rc">Crossover rate:</label>
        <input type="number" class="form-control" id="rc" name="rc" placeholder="Crossover rate">
    </div>
    
    <div class="form-group">
        <label for="min">Minimum degree of difficulty:</label>
        <input type="number" class="form-control" id="min" name="min" placeholder="Minimum dd">
    </div>
    
    <div class="form-group">
        <label for="min">Maximum degree of difficulty:</label>
        <input type="number" class="form-control" id="max" name="max" placeholder="Maximum dd">
    </div>
    
    <div class="form-group">
        <label for="kw">Keywords:</label><br />
        <small>Input keywords separated by comma, no space</small>
        <input type="text" class="form-control" id="kw" name="kw" placeholder="Keywords">
    </div>
    
    <div class="form-group">
        <label for="nr_kw">Number of desired Keywords:</label><br />
        <small>Number of desired input keywords separated by comma, no space</small>
        <input type="text" class="form-control" id="nr_kw" name="nr_kw" placeholder="Keywords">
    </div>
    
    <div class="form-group">
        <label for="type">Predominant type:</label><br />
        <input type="text" class="form-control" id="type" name="type" placeholder="Type">
    </div>
    
    <input type="submit" class="btn btn-primary" value="Generate!" />
</form>

<hr />

<div id="gentest">
    
</div>

<?php

require 'test_gen.php';

?>


<script>
$('#testg').submit(function (event) {
   event.preventDefault();

   $.ajax({
      type: "POST",
      url: "rezolva.php",
      data: $(this).serialize(),
       success: function (data) {
         console.log(data);
       $('#gentest').html(data);
      }
    });
});
</script>

<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->

</body>
