<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};
$matchid = $data_back->{"matchid"};

$result=get_joinedcontestformatch($userid,$matchid);

$joinedcontestformatchdata=array();

foreach($result as $value){
	
	if(!empty($value['contest_create_id'])) {

  $contestname=$value['contest_name'];
  $contestid=$value['contest_id'];
  
  $joinedcontestformatchdata[]=array('contestname'=>$contestname,'contestid'=>$contestid);
} 
}

$alldata['joinedcontestformatchdata']= $joinedcontestformatchdata;

echo json_encode($alldata);

?>