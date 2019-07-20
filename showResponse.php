<?php
$responseId=$_GET['id'];
require_once __DIR__."/php/getQuestions.php";
require_once __DIR__."/php/getQuestionResponses.php";

$getQuestions=new getQuestions();
$questions=$getQuestions->get();

$getResponses=new getQuestionResponses();
$responses=$getResponses->get($responseId);
$response=array();
foreach ($responses as $res) {
	$response['q1']=$res->q1;
	$response['q2']=$res->q2;
	$response['q3']=$res->q3;
	$response['q4']=$res->q4;
	$response['q5']=$res->q5;
	$response['q6']=$res->q6;
	$response['q7']=$res->q7;
	$response['q8']=$res->q8;
	$response['q9']=$res->q9;
	$response['q10']=$res->q10;
}

$countE=0;
$countI=0;
$countS=0;
$countN=0;
$countT=0;
$countF=0;
$countJ=0;
$countP=0;
$EI='';
$SN='';
$JP='';
$TF='';



?>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script  src="js/getResponseController.js"></script>
<link rel="stylesheet" type="text/css" href="assets/main.css">

<div class="div2">
<div class="header"><h3> Your Perspective<h3></div>
	<div><h5> Your Perspective type is <label type="label" id="result1"> </label><h5>
		
		
	</div>
<?php foreach ($questions as $question) {
	$qno="q".$question->id;
	switch ($question->dimension) {
		case 'EI':
			
			
			if($question->direction==1){
				if($response[$qno]>4){
					$countI=$countI+1;
				}
				else if($response[$qno]==4){
					$countE=$countE+1;
				}
				else{
					$countE=$countE+1;
				}
			}
			else if($question->direction==-1){
				if($response[$qno]>4){
					$countE=$countE+1;
				}
				else if($response[$qno]==4){
					$countE=$countE+1;
				}
				else{
					$countI=$countI+1;
				}

			}
			
			break;
		case 'SN':
				
			
			if($question->direction==1){
				if($response[$qno]>4){
					$countN=$countN+1;
				}
				else if($response[$qno]==4){
					$countS=$countS+1;
				}
				else{
					$countS=$countS+1;
				}
			}
			else if($question->direction==-1){
				if($response[$qno]>4){
					$countS=$countS+1;
				}
				else if($response[$qno]==4){
					$countS=$countS+1;
				}
				else{
					$countN=$countN+1;
				}

			}
			break;
		case 'TF':
			
			
			if($question->direction==1){
				if($response[$qno]>4){
					$countF=$countF+1;
				}
				else if($response[$qno]==4){
					$countT=$countT+1;
				}
				else{
					$countT=$countT+1;
				}
			}
			else if($question->direction==-1){
				if($response[$qno]>4){
					$countT=$countT+1;
				}
				else if($response[$qno]==4){
					$countT=$countT+1;
				}
				else{
					$countF=$countF+1;
				}

			}
			break;
		case 'JP':
			if($question->direction==1){
				if($response[$qno]>4){
					$countP=$countP+1;
				}
				else if($response[$qno]==4){
					$countJ=$countJ+1;
				}
				else{
					$countJ=$countJ+1;
				}
			}
			else if($question->direction==-1){
				if($response[$qno]>4){
					$countJ=$countJ+1;
				}
				else if($response[$qno]==4){
					$countJ=$countJ+1;
				}
				else{
					$countP=$countP+1;
				}
				echo $countJ.$countP;
			}

			break;
		default:
			
			break;
	}
}


 ?>


<?php if($countJ<$countP){ ?>
<div class="progress report">
  <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #bbc2ca;color:black" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Judging(J)</div>
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%;color:black" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Percieving(P)</div>
</div>
<?php 
$JP='P';} ?>
<?php if($countJ>=$countP){ ?>
<div class="progress report">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%;color:black" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Judging(J)</div>
  <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #bbc2ca;color:black" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Percieving(P)</div>
</div>
<?php 
$JP='J';} ?>

<?php if($countT<$countF){ ?>
<div class="progress report">
  <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #bbc2ca;color:black" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Thinking(T)</div>
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%;color:black" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Feeling(F)</div>
</div>

<?php 
$TF='F';
	} ?>
<?php if($countT>=$countF){ ?>
<div class="progress report">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%;color:black" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Thinking(T)</div>
  <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #bbc2ca;color:black" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Feeling(F)</div>
</div>
<?php 
$TF='T';} ?>
<?php if($countS<$countN){ ?>
<div class="progress report">
  <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #bbc2ca;color:black" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Sensing(S)</div>
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%;color:black" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Intuition(N)</div>
</div>
<?php 
$SN='N';
	} ?>
<?php if($countS>=$countN){ ?>
<div class="progress report">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%;color:black" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Sensing(S)</div>
  <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #bbc2ca;color:black" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Intuition(N)</div>
</div>
<?php
$SN='S'; 
	} ?>

	<?php if($countE<$countI){ ?>
<div class="progress report">
  <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #bbc2ca;color:black" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Extraversion(E)</div>
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%;color:black" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Introversion(I)</div>
</div>
<?php 
$EI='I';
} ?>
<?php if($countE>=$countI){ ?>
<div class="progress report">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%;color:black" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Extraversion(E)</div>
  <div class="progress-bar" role="progressbar" style="width: 50%;background-color: #bbc2ca;color:black" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Introversion(I)</div>
</div>
<?php 
$EI='E';
}
 ?>



<input type="text" id="result" value="<?php echo  $EI.$SN.$TF.$JP?>" hidden>
</div>	
