<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};

$result=get_joinedcontest($userid);

$joinedcontestdata=array();

foreach($result as $value){
	
	if(!empty($value['contest_create_id'])) {

  $contestname=$value['contest_name'];
  
  $joinedcontestdata[]=array('contestname'=>$contestname);
} 
}

$alldata['joinedcontestdata']= $joinedcontestdata;

echo json_encode($alldata);

?>