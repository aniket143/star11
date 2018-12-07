<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$cktcustteamid = $data_back->{"cktcustteamid"};

$result=get_cktteampre($cktcustteamid);

$posts = array();
$posts1 = array();
$posts2 = array();
$posts3 = array();


foreach($result as $val){
	
	if($val['pcl_id']==1) {
		
	if(!empty($val['player_id'])) {
		
	$wkname=$val['player_name'];
	$pval=$val['player_valuation'];
	//$wk_teamcode=$val['team_code'];
	$wkid=$val['player_id'];
	$wkplayerpic=$val['player_pic'];
	
	$posts[] = array('wicketkeepername'=>$wkname,'pvalue'=>$pval,'wkplayerid'=>$wkid,'wkplayerpic'=>$wkplayerpic); 
}
}


else if($val['pcl_id']==2) {
	
	if(!empty($val['player_id'])) {
		
	$batsmanname=$val['player_name'];
	$pval1=$val['player_valuation'];
	//$batsman_teamcode=$val['team_code'];
	$batid=$val['player_id'];
	$batplayerpic=$val['player_pic'];

	$posts1[] = array('batsname'=>$batsmanname,'pvalue1'=>$pval1,'batsmanplayerid'=>$batid,'batplayerpic'=>$batplayerpic); 

}
}


else if($val['pcl_id']==4) {
	
	if(!empty($val['player_id'])) {
		
	$arname=$val['player_name'];
	$pval2=$val['player_valuation'];
	//$ar_teamcode=$val['team_code'];
	$ARid=$val['player_id'];
	$ARplayerpic=$val['player_pic'];
	
	$posts2[] = array('allroundername'=>$arname,'pvalue2'=>$pval2,'ARplayerid'=>$ARid,'ARplayerpic'=>$ARplayerpic); 
 

}
}

else if($val['pcl_id']==3) {
	
	if(!empty($val['player_id'])) {
		
	$ballername=$val['player_name'];
	$pval3=$val['player_valuation'];
	//$baller_teamcode=$val['team_code'];
	$ballerid=$val['player_id'];
	$ballerplayerpic=$val['player_pic'];
	
	$posts3[] = array('ballername'=>$ballername,'pvalue3'=>$pval3,'ballerplayerid'=>$ballerid,'ballerplayerpic'=>$ballerplayerpic); 
 

}
}
}

$alldata['data1']= $posts;
$alldata1['data2']=$posts1;
$alldata2['data3']=$posts2;
$alldata3['data4']=$posts3;


$mainarray['cricketdata']=array($alldata,$alldata1,$alldata2,$alldata3);

echo json_encode($mainarray);
	
?>