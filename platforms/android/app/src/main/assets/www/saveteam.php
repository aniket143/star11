<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));
$cnt=0;
$allwk = $data_back->{"allwk"};
//echo json_encode($allwk);
$allplydata = $data_back->{"allplydata"};
$MATCHID = $data_back->{"MATCHID"};
$TRNID = $data_back->{"TRNID"};
$userid = $data_back->{"userid"};
$captain = $data_back->{"captain"};
$vice_captain = $data_back->{"vice_captain"};

$db = get_my_db();

$query="INSERT INTO inet_customer_team_cricket(cust_team_id,cust_id,trn_id,match_id,player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11,player12,captain,vice_captain,entrydate,status) 
VALUES ('','$userid','$TRNID','$MATCHID','$allwk','$allplydata[0]','$allplydata[1]','$allplydata[2]','$allplydata[3]','$allplydata[4]','$allplydata[5]','$allplydata[6]','$allplydata[7]','$allplydata[8]','$allplydata[9]','','$captain','$vice_captain',default,default)";

$res=$db->query($query) or die("error in insert inet_customer_team_cricket ".$db->error);

echo json_encode("Success");

?>