<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};

$result=get_personaldetails($userid);

$personaldata=array();

foreach($result as $value){

	if(!empty($value['user_id'])){
	
	$username=$value['user_name'];
	$email=$value['email'];
	$state=$value['state'];
	$dob=$value['date_of_birth'];
	$gender=$value['gender'];
	$teamname=$value['teamname'];
	
	
	$personaldata[]=array('username'=>$username,'email'=>$email,'state'=>$state,'dob'=>$dob,'gender'=>$gender,'teamname'=>$teamname);

	}

}

$allpersonaldata['personaldata']=$personaldata;

echo json_encode($allpersonaldata);

?>