<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));
//$cnt=0;
$allwk = $data_back->{"allwk"};
//echo json_encode($allwk);
$allplydata = $data_back->{"allplydata"};
$MATCHID = $data_back->{"MATCHID"};
$TRNID = $data_back->{"TRNID"};
if(!empty($data_back->{"userid"})){
	$userid = $data_back->{"userid"};
}
else{
	$userid=0;
}
$captain = $data_back->{"captain"};
$vice_captain = $data_back->{"vice_captain"};
if(!empty($data_back->{"action"})){
$action=$data_back->{"action"};
}
else {
	$action='';
	}

if(!empty($data_back->{"cktcustteamid"})){
$cktcustteamid=$data_back->{"cktcustteamid"};
}
else {
	$cktcustteamid='';
	}

$db = get_my_db();


if($action == "Edit") {

	$query="update inet_customer_team_cricket set player1='$allwk',player2='$allplydata[0]',
	player3='$allplydata[1]',player4='$allplydata[2]',player5='$allplydata[3]',player6='$allplydata[4]',
	player7='$allplydata[5]',player8='$allplydata[6]',player9='$allplydata[7]',player10='$allplydata[8]',
	player11='$allplydata[9]',captain='$captain',vice_captain='$vice_captain' where cust_team_id ='$cktcustteamid' ";
	
 $res=$db->query($query) or die("error in update inet_customer_team_cricket ".$db->error);
 
	}

else {
$query="INSERT INTO inet_customer_team_cricket(cust_team_id,cust_id,trn_id,match_id,player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11,player12,captain,vice_captain,entrydate,status) 
VALUES ('','$userid','$TRNID','$MATCHID','$allwk','$allplydata[0]','$allplydata[1]','$allplydata[2]','$allplydata[3]','$allplydata[4]','$allplydata[5]','$allplydata[6]','$allplydata[7]','$allplydata[8]','$allplydata[9]','','$captain','$vice_captain',default,default)";

$res=$db->query($query) or die("error in insert inet_customer_team_cricket ".$db->error);

}

echo json_encode("Success");

?>