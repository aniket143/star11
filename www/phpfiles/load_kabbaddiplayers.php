<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$teamid1 = $data_back->{"teamid1"};
$teamid2 = $data_back->{"teamid2"};
//echo json_encode($teamid2);

$result=get_pcl_kabbadi($teamid1,$teamid2);

$i=$j=$k=0;

$posts = array();
$posts1 = array();
$posts2 = array();

foreach($result as $val){
	
	if($val['pcl_id']==5) {
		
	if(!empty($val['player_id'])) {
		
	$defendername=$val['player_name'];
	$pval=$val['player_valuation'];
	$defender_teamcode=$val['team_code'];
	$defenderid=$val['player_id'];
	$defenderplayerpic=$val['player_pic'];
	
	$posts[] = array('defendername'=>$defendername,'pvalue'=>$pval,'defenderteamcode'=>$defender_teamcode,'counts'=>$i,'defenderplayerid'=>$defenderid,'defenderplayerpic'=>$defenderplayerpic); 
}
$i++;
}

else if($val['pcl_id']==6) {
	
	if(!empty($val['player_id'])) {
		
	$ARname=$val['player_name'];
	$pval1=$val['player_valuation'];
	$AR_teamcode=$val['team_code'];
	$ARid=$val['player_id'];
	$ARplayerpic=$val['player_pic'];

	$posts1[] = array('ARname'=>$ARname,'pvalue1'=>$pval1,'ARteamcode'=>$AR_teamcode,'counts1'=>$j,'ARplayerid'=>$ARid,'ARplayerpic'=>$ARplayerpic); 

}
$j++;
}

else if($val['pcl_id']==7) {
	
	if(!empty($val['player_id'])) {
		
	$raidername=$val['player_name'];
	$pval2=$val['player_valuation'];
	$raider_teamcode=$val['team_code'];
	$raiderid=$val['player_id'];
	$raiderplayerpic=$val['player_pic'];
	
	$posts2[] = array('raidername'=>$raidername,'pvalue2'=>$pval2,'raiderteamcode'=>$raider_teamcode,'counts2'=>$k,'raiderplayerid'=>$raiderid,'raiderplayerpic'=>$raiderplayerpic); 
 
}
$k++;
}
}

$defenderdata['data1']= $posts;
$ARdata['data2']= $posts1;
$raiderdata['data3']= $posts2;

$mainarray['kabaddidata']=array($defenderdata,$ARdata,$raiderdata);

echo json_encode($mainarray);

?>