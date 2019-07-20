<?php

function saveResponse(){
	$data=getDataFromRequest();
	$link=mysqli_connect("localhost", "root", "", "mbti");
	$result=mysqli_query($link,"INSERT INTO `question_responses`( `q1`, `q2`, `q3`,`q4`,`q5`,`q6`,`q7`,`q8`,`q9`,`q10`,`email`) VALUES ('$data->q1','$data->q2','$data->q3','$data->q4','$data->q5','$data->q6','$data->q7','$data->q8','$data->q9','$data->q10','$data->email')");
	$result1=mysqli_query($link,"SELECT id FROM `question_responses` WHERE email='$data->email' ORDER BY id DESC LIMIT 1");
	$response = array();
	while ($row = mysqli_fetch_array($result1)) 
	{
		$obj=new stdClass(); 
		$obj->id=$row["id"];
		$obj->description=$row["description"];
		$obj->direction=$row["direction"];
		$obj->dimension=$row["name"];


		array_push($response,$obj); 
	  
	}
	echo json_encode($response);
}
function getDataFromRequest(){
	 $questionResponse = new stdClass();
	 $questionResponse->q1=$_POST['q1'];
	 $questionResponse->q2=$_POST['q2'];
	 $questionResponse->q3=$_POST['q3'];
	 $questionResponse->q4=$_POST['q4'];
	 $questionResponse->q5=$_POST['q5'];
	 $questionResponse->q6=$_POST['q6'];
	 $questionResponse->q7=$_POST['q7'];
	 $questionResponse->q8=$_POST['q8'];
	 $questionResponse->q9=$_POST['q9'];
	 $questionResponse->q10=$_POST['q10'];
	 $questionResponse->email=$_POST['email'];
	 return $questionResponse;
}
saveResponse();
?>