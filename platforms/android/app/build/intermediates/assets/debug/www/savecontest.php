<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};
$userteamid = $data_back->{"userteamid"};
$contestid = $data_back->{"contestid"};
//echo json_encode($contestid);
$db = get_my_db();

$query1="select * from inet_contest_join_kabaddi where cust_id='$userid' and contest_id='$contestid' and status='Y'";
$sql1=$db->query($query1) or die("error in query inet_contest_join---->".$db->error);

$num=$sql1->num_rows;
//echo json_encode($num);

if($num>0){
echo json_encode("fail");
}

else {
$query="INSERT INTO inet_contest_join_kabaddi(contest_create_id,cust_id,cust_team_id,contest_id,status) VALUES ('','$userid','$userteamid','$contestid',default)";

$res=$db->query($query) or die("error in insert inet_contest_join ".$db->error);

echo json_encode("success");
}
?>