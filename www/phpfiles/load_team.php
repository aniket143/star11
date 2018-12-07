<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};
$matchid = $data_back->{"matchid"};
$trnid = $data_back->{"trnid"};

$db = get_my_db();

$query="SELECT * FROM inet_customer_team_kabaddi WHERE status='Y' and cust_id='$userid' 
and match_id='$matchid' and trn_id='$trnid'";

$sql=$db->query($query) or die("error in query inet_customer_team_kabaddi --> ".$db->error);

//$num=$sql->num_rows;

//echo json_encode($num);


$plyname = array();

$i=1;
foreach($sql as $row){
	
	if(!empty($row['cust_team_id'])) {
		
	$custteamid=$row['cust_team_id'];
		
	$result=get_playername($row['captain'],$row['vice_captain']);
	
	$captain=$result[0]['player_name'];
	$vc=$result[1]['player_name'];
	
	$plyname[]=array('captain'=>$captain,'vicecaptain'=>$vc,'teamcount'=>$i,'customerteamid'=>$custteamid);
	
	}	
$i++;

}

$plydata['player']= $plyname;

echo json_encode($plydata);

?>