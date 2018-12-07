<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$pid = $data_back->{"pid"};

$result=get_playerkbd($pid);

$playerdata=array();

foreach($result as $val){

if(!empty($val['player_id'])){
	
	$credits=$val['player_valuation'];
	
	$pic=$val['player_pic'];
	
	$player_desc=$val['pcl_description'];
	
	$team=$val['team_code'];
	
	$playername=$val['player_name'];
	
	$playerdata[]=array('credits'=>$credits,'pic'=>$pic,'player_desc'=>$player_desc,'team'=>$team,'playername'=>$playername);

}

}

$allplayerdata['playerdata']=$playerdata;

echo json_encode($allplayerdata);



?>