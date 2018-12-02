<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));
$cnt=0;

$allplykbddata = $data_back->{"allplykbddata"};
$MATCHID_KBD = $data_back->{"MATCHID_KBD"};
$TRNID_KBD = $data_back->{"TRNID_KBD"};
$userid = $data_back->{"userid"};
$captain = $data_back->{"captain"};
$vice_captain = $data_back->{"vice_captain"};

$db = get_my_db();

$query="INSERT INTO inet_customer_team_kabaddi(cust_team_id,cust_id,trn_id,match_id,player1,player2,player3,player4,player5,player6,player7,captain,vice_captain,entrydate,status) 
VALUES ('','$userid','$TRNID_KBD','$MATCHID_KBD','$allplykbddata[0]','$allplykbddata[1]','$allplykbddata[2]','$allplykbddata[3]','$allplykbddata[4]','$allplykbddata[5]','$allplykbddata[6]','$captain','$vice_captain',default,default)";

$res=$db->query($query) or die("error in insert inet_customer_team_kabaddi ".$db->error);

echo json_encode("Success");

?>