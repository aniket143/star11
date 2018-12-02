<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};

$result=get_kbd_result_match($userid);
$i=0;

$posts = array();

foreach($result as $val){
	
	if($val['sports_id']==3) {
		
	if(!empty($val['match_id'])) {
		
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

			$posts[] = array('matchid1'=>$matchid,'trnid1'=>$trnid,'teamid1'=>$teamid[0],'teamid2'=>$teamid[1],'start_time'=> $start_time, 'team1'=> $team[0],'team2'=> $team[1],'logo1'=> $logo[0],'logo2'=> $logo[1],'counts'=>$i); 
			//$posts1[] = array('start_time'=> $start_time, 'team1'=> $team[0],'team2'=> $team[1],'logo1'=> $logo[0],'logo2'=> $logo[1],'counts'=>$i); 

}
$i++;
}
}

$alldata['data1']= $posts;

echo json_encode($alldata);

?>