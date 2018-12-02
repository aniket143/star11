<?php
include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};
//echo json_encode($userid);

$db=get_my_db();

$query="select amount from inet_customer_amountdetails where cust_id='$userid' and status='Y'";
$sql=$db->query($query) or die("error in query inet_customer_amountdetails---->".$db->error);

foreach($sql as $val){
$custbalance=$val['amount'];
}

echo json_encode($custbalance);


?>