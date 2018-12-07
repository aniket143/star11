<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$kbdcustteamid = $data_back->{"kbdcustteamid"};

$result=get_kbdteampre($kbdcustteamid);

$posts = array();
$posts1 = array();
$posts2 = array();


foreach($result as $val){
	
	if($val['pcl_id']==5) {
		
	if(!empty($val['player_id'])) {
		
		$a=$val['pcl_id'];
		
	$defendername=$val['player_name'];
	$pval=$val['player_valuation'];
	//$defender_teamcode=$val['team_code'];
	$defenderid=$val['player_id'];
	$defenderplayerpic=$val['player_pic'];
	
	$posts[] = array('defendername'=>$defendername,'pvalue'=>$pval,'defenderplayerid'=>$defenderid,'defpic'=>$defenderplayerpic); 
}
}

else if($val['pcl_id']==6) {
	
	if(!empty($val['player_id'])) {
		
	$ARname=$val['player_name'];
	$pval1=$val['player_valuation'];
	//$AR_teamcode=$val['team_code'];
	$ARid=$val['player_id'];
	$ARplayerpic=$val['player_pic'];

	$posts1[] = array('ARname'=>$ARname,'pvalue1'=>$pval1,'ARplayerid'=>$ARid,'ARplayerpic'=>$ARplayerpic); 

}
}

else if($val['pcl_id']==7) {
	
	if(!empty($val['player_id'])) {
		
	$raidername=$val['player_name'];
	$pval2=$val['player_valuation'];
	//$raider_teamcode=$val['team_code'];
	$raiderid=$val['player_id'];
	$raiderplayerpic=$val['player_pic'];
	
	$posts2[] = array('raidername'=>$raidername,'pvalue2'=>$pval2,'raiderplayerid'=>$raiderid,'raiderplayerpic'=>$raiderplayerpic); 
 
}
}
}

$defenderdata['defdata']= $posts;
$ARdata['ardata']= $posts1;
$raiderdata['raiderdata']= $posts2;

$mainarray['kabaddidata']=array($defenderdata,$ARdata,$raiderdata);

echo json_encode($mainarray);

		
?>