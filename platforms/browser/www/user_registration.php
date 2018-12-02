<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$mailid = $data_back->{"mailid"};
$password = $data_back->{"password"};
$contactno = $data_back->{"contactno"};
$birthdate = $data_back->{"birthdate"};
$state = $data_back->{"state"};
$referral = $data_back->{"referral"};

$db = get_my_db();

$user_salt = generateSalt();
$randomstring=generateRandomString();

$query1="select * from inet_login_user where email='$mailid' and status='Y'";
$sql1=$db->query($query1) or die("error in query inet_login_user---->".$db->error);

$num=$sql1->num_rows;


if($num>0){
echo json_encode("fail");
}

$query11="select * from inet_login_user where mobile_no='$contactno' and status='Y'";
$sql11=$db->query($query11) or die("error in query inet_login_user---->".$db->error);

$num11=$sql11->num_rows;


if($num11>0){
echo json_encode("failed");
}

else {
$query2="select * from 	inet_user_refarralcode where refarral_code='$referral' and status='Y'";
$sql2=$db->query($query2) or die("error in query inet_user_refarralcode---->".$db->error);

$num1=$sql2->num_rows;
//echo json_encode($num1);

if($num1>0){	
foreach($sql2 as $row){
	if(!empty($row['ref_id'])){
$refarralid=$row['user_id'];
}
}
}

$bonusamt=get_bonusamount();

foreach($bonusamt as $amt){

$bonus=$amt['amount'];
$paytype_id=$amt['paytype_id'];
}

$query3="INSERT INTO inet_login_user(user_name,password,salt_key,encrypted_id,email,mobile_no,date_of_birth,state,reference_id) VALUES('$mailid','$password','$user_salt','$randomstring','$mailid','$contactno','$birthdate','$state','$refarralid')";
$res=$db->query($query3) or die("error in insert inet_login_user ".$db->error);

$query4="select user_id from inet_login_user where user_id = (select MAX(user_id) from inet_login_user)";
$res=$db->query($query4) or die("error in select inet_login_user ".$db->error);

foreach($res as $val){

$userid=$val['user_id'];

}

$query="INSERT INTO inet_customer_amountdetails(cust_id,paytype_id,amount) VALUES('$userid','$paytype_id','$bonus')";
$res=$db->query($query) or die("error in insert  inet_customer_amountdetails ".$db->error);

echo json_encode("Success");

}

?>