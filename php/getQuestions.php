<?php 


class getQuestions	{
	public function get(){
	$link=mysqli_connect("localhost", "root", "", "mbti");
	$result=mysqli_query($link,"SELECT q.description,d.name,q.id,q.direction FROM `questions` q,`dimension` d WHERE q.dimension_id=d.id");
	$questions = array();
	while ($row = mysqli_fetch_array($result)) 
	{
		$obj=new stdClass(); 
		$obj->id=$row["id"];
		$obj->description=$row["description"];
		$obj->direction=$row["direction"];
		$obj->dimension=$row["name"];


		array_push($questions,$obj); 
	  
	}

	return $questions;
	}
}


?>
