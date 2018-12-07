<?php
include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};
$matchid = $data_back->{"matchid"};
$trnid = $data_back->{"trnid"};

$db=get_my_db();

$query="select cust_team_id from inet_customer_team_cricket where cust_id='$userid' and trn_id='$trnid' and match_id='$matchid' and status='Y'";
$sql=$db->query($query) or die("error in query inet_customer_team_cricket---->".$db->error);

$num=$sql->num_rows;

foreach($sql as $val){
$custteamid=$val['cust_team_id'];
}

$data=array();

if($num>0){
	
	array_push($data,"team is created");
	array_push($data,$custteamid);
	
	echo json_encode($data);
}

else {
echo json_encode("fail");
}





?>