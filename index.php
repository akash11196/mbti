<?php 


require_once __DIR__."/php/getQuestions.php";
$getQuestions=new getQuestions();
$questions=$getQuestions->get();


?>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script  src="js/getQuestionsController.js"></script>
<link rel="stylesheet" type="text/css" href="assets/main.css">


<div class="text-center"><h3>Discover your Perspective<h3></div>
	<br/>
<div class="text-center"><h2>Complete the 7 min test and get a detailed report of your lenses on the world</h2></div>
<?php foreach ($questions as $question) { ?>
<div class="div1">
	

<p class="text-center"><?php echo $question->description ?></p>
<div style="margin-top:10px; margin-left: 50px">
<label class="custom-control-label" for="customRadioInline1" style="color:Red">Disagree</label>
<div class="custom-control custom-radio custom-control-inline">

  <input type="radio" id="option1<?php echo $question->id ?>" name="question<?php echo $question->id ?>" class="custom-control-input" value="1">
  <label class="custom-control-label" for="option1<?php echo $question->id ?>"></label>
  
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="option2<?php echo $question->id ?>" name="question<?php echo $question->id ?>" class="custom-control-input" value="2">
  <label class="custom-control-label" for="option2<?php echo $question->id ?>"></label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="option3<?php echo $question->id ?>" name="question<?php echo $question->id ?>" class="custom-control-input" value="3">
  <label class="custom-control-label" for="option3<?php echo $question->id ?>"></label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="option4<?php echo $question->id ?>" name="question<?php echo $question->id ?>" class="custom-control-input" value="4">
  <label class="custom-control-label" for="option4<?php echo $question->id ?>"></label>
</div>

<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="option5<?php echo $question->id ?>" name="question<?php echo $question->id ?>" class="custom-control-input" value="5">
  <label class="custom-control-label" for="option5<?php echo $question->id ?>"></label>
</div>

<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="option6<?php echo $question->id ?>" name="question<?php echo $question->id ?>" class="custom-control-input" value="6">
  <label class="custom-control-label" for="option6<?php echo $question->id ?>"></label>
</div>

<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="option7<?php echo $question->id ?>" name="question<?php echo $question->id ?>" class="custom-control-input" value="7">
  <label class="custom-control-label" for="option7<?php echo $question->id ?>"></label>
</div>

<label class="custom-control-label" for="customRadioInline1" style="color:Green">Agree</label>
</div>
</div>




<?php } ?>

<div class="div1">
	    <div class="form-group col-md-6">
      
      <input type="email" class="form-control text-center" id="email" placeholder="Email" style="margin-top:25px; margin-left: 120px">
    </div>

	</div>	


	    <button type="button" class="btn btn-primary submit"  onclick="saveResponse()">Save And Continue</button>

	

