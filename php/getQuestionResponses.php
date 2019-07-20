<?php 


class getQuestionResponses	{
	public function get($id){
	$link=mysqli_connect("localhost", "root", "", "mbti");
	$result=mysqli_query($link,"SELECT * FROM `question_responses` WHERE id=$id");
	$responses = array();
	while ($row = mysqli_fetch_array($result)) 
	{
		$obj=new stdClass(); 
		$obj->id=$row["id"];
		$obj->q1=$row["q1"];
		$obj->q2=$row["q2"];
		$obj->q3=$row["q3"];
		$obj->q4=$row["q4"];
		$obj->q5=$row["q5"];
		$obj->q6=$row["q6"];
		$obj->q7=$row["q7"];
		$obj->q8=$row["q8"];
		$obj->q9=$row["q9"];
		$obj->q10=$row["q10"];
		$obj->email=$row["email"];


		array_push($responses,$obj); 
	  
	}

	return $responses;
	}
}


?>
