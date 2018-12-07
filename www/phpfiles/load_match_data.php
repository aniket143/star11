<?php

header("Access-Control-Allow-Origin: *");

include("functions.php");

$result=get_match();
$i=0;
$j=0;
$k=0;
$posts = array();
$posts1 = array();
$posts2 = array();
//$alldata=array();

foreach($result as $val){
	
	if($val['sports_id']==1) {
		
	if(!empty($val['match_id'])) {
		
	$trnid=$val['trn_id'];
	
	$res=get_tournament($trnid);
	
	$trnname=$res[0]['trn_name'];
	$trtypenname=$res[0]['trtype_name'];
		
	$sportsid=$val['sports_id'];
	$matchid=$val['match_id'];
	$trnid=$val['trn_id'];
	$teamid=$val['teamid'];
	$teamname=$val['teamname'];
	$start_time1=$val['start_date'];
	$start_time = date('M j,Y H:i:s', strtotime($start_time1));
	//$start_time = $start_time1;
	$logo=$val['logo'];
	$team=explode(',',$teamname);
	$logo=explode(',',$logo);
	$teamid=explode(',',$teamid);

			$posts[] = array('trtypenname'=>$trtypenname,'trnname'=>$trnname,'sportsid1'=>$sportsid,'matchid1'=>$matchid,'trnid1'=>$trnid,'teamid1'=>$teamid[0],'teamid2'=>$teamid[1],'start_time'=> $start_time, 'team1'=> $team[0],'team2'=> $team[1],'logo1'=> $logo[0],'logo2'=> $logo[1],'counts'=>$i); 
			//$posts1[] = array('start_time'=> $start_time, 'team1'=> $team[0],'team2'=> $team[1],'logo1'=> $logo[0],'logo2'=> $logo[1],'counts'=>$i); 

}
$i++;
}

else if($val['sports_id']==2) {
	if(!empty($val['match_id'])) {
		
		
	$sportsid=$val['sports_id'];		
	$matchid=$val['match_id'];
	$trnid=$val['trn_id'];
	$teamid=$val['teamid'];
	$teamname=$val['teamname'];
	$start_time1=$val['start_date'];
	$start_time = date('M j,Y H:i:s', strtotime($start_time1));
	//$start_time = $start_time1;
	$logo=$val['logo'];
	$team=explode(',',$teamname);
	$logo=explode(',',$logo);
	$teamid=explode(',',$teamid);

			$posts1[] = array('sportsid2'=>$sportsid,'matchid2'=>$matchid,'trnid2'=>$trnid,'teamid3'=>$teamid[0],'teamid4'=>$teamid[1],'start_time1'=> $start_time,'team3'=> $team[0],'team4'=> $team[1],'logo3'=> $logo[0],'logo4'=> $logo[1],'counts1'=>$j); 
			//$posts1[] = array('start_time'=> $start_time, 'team1'=> $team[0],'team2'=> $team[1],'logo1'=> $logo[0],'logo2'=> $logo[1],'counts'=>$i); 

}
$j++;
}


else if($val['sports_id']==3) {
	if(!empty($val['match_id'])) {
		
	$trnidkbd=$val['trn_id'];
	
	$reskbd=get_tournament($trnidkbd);
	
	$trnnamekbd=$reskbd[0]['trn_name'];
	$trtypennamekbd=$reskbd[0]['trtype_name'];
		
	$sportsid=$val['sports_id'];		
	$matchid=$val['match_id'];
	$trnid=$val['trn_id'];
	$teamid=$val['teamid'];
	$teamname=$val['teamname'];
	$start_time1=$val['start_date'];
	$start_time = date('M j,Y H:i:s', strtotime($start_time1));
	//$start_time = $start_time1;
	$logo=$val['logo'];
	$team=explode(',',$teamname);
	$logo=explode(',',$logo);
	$teamid=explode(',',$teamid);

			$posts2[] = array('trtypennamekbd'=>$trtypennamekbd,'trnnamekbd'=>$trnnamekbd,'sportsid3'=>$sportsid,'matchid3'=>$matchid,'trnid3'=>$trnid,'teamid5'=>$teamid[0],'teamid6'=>$teamid[1],'start_time2'=> $start_time,'team5'=> $team[0],'team6'=> $team[1],'logo5'=> $logo[0],'logo6'=> $logo[1],'counts2'=>$k); 
			//$posts1[] = array('start_time'=> $start_time, 'team1'=> $team[0],'team2'=> $team[1],'logo1'=> $logo[0],'logo2'=> $logo[1],'counts'=>$i); 

}
$k++;
}
}

$alldata['data1']= $posts;
$alldata1['data2']=$posts1;
$alldata2['data3']=$posts2;

//$myJSON = json_encode($alldata);
//$myJSON1 = json_encode($alldata1);

$mainarray['maindata']=array($alldata, $alldata1,$alldata2);

echo json_encode($mainarray);

?>