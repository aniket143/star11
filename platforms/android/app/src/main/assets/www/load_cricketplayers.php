<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$teamid1 = $data_back->{"teamid1"};
$teamid2 = $data_back->{"teamid2"};
//echo json_encode($teamid2);


$result=get_pcl_cricket($teamid1,$teamid2);

$i=$j=$k=$l=0;

$posts = array();
$posts1 = array();
$posts2 = array();
$posts3 = array();
//$alldata=array();

foreach($result as $val){
	
	if($val['pcl_id']==1) {
		
	if(!empty($val['player_id'])) {
		
	$wkname=$val['player_name'];
	$pval=$val['player_valuation'];
	$wk_teamcode=$val['team_code'];
	$wkid=$val['player_id'];
	$wkplayerpic=$val['player_pic'];
	
	$posts[] = array('wicketkeepername'=>$wkname,'pvalue'=>$pval,'wkteamcode'=>$wk_teamcode,'counts'=>$i,'wkplayerid'=>$wkid,'wkplayerpic'=>$wkplayerpic); 
}
$i++;
}

else if($val['pcl_id']==2) {
	
	if(!empty($val['player_id'])) {
		
	$batsmanname=$val['player_name'];
	$pval1=$val['player_valuation'];
	$batsman_teamcode=$val['team_code'];
	$batid=$val['player_id'];
	$batplayerpic=$val['player_pic'];

	$posts1[] = array('batsname'=>$batsmanname,'pvalue1'=>$pval1,'batteamcode'=>$batsman_teamcode,'counts1'=>$j,'batsmanplayerid'=>$batid,'batplayerpic'=>$batplayerpic); 

}
$j++;
}


else if($val['pcl_id']==4) {
	
	if(!empty($val['player_id'])) {
		
	$arname=$val['player_name'];
	$pval2=$val['player_valuation'];
	$ar_teamcode=$val['team_code'];
	$ARid=$val['player_id'];
	$ARplayerpic=$val['player_pic'];
	
	$posts2[] = array('allroundername'=>$arname,'pvalue2'=>$pval2,'arteamcode'=>$ar_teamcode,'counts2'=>$k,'ARplayerid'=>$ARid,'ARplayerpic'=>$ARplayerpic); 
 

}
$k++;
}

else if($val['pcl_id']==3) {
	
	if(!empty($val['player_id'])) {
		
	$ballername=$val['player_name'];
	$pval3=$val['player_valuation'];
	$baller_teamcode=$val['team_code'];
	$ballerid=$val['player_id'];
	$ballerplayerpic=$val['player_pic'];
	
	$posts3[] = array('ballername'=>$ballername,'pvalue3'=>$pval3,'ballerteamcode'=>$baller_teamcode,'counts3'=>$l,'ballerplayerid'=>$ballerid,'ballerplayerpic'=>$ballerplayerpic); 
 

}
$l++;
}
}

$alldata['data1']= $posts;
$alldata1['data2']=$posts1;
$alldata2['data3']=$posts2;
$alldata3['data4']=$posts3;


$mainarray['cricketdata']=array($alldata, $alldata1,$alldata2,$alldata3);

echo json_encode($mainarray);

?>