<?php

include("functions.php");

$db = get_my_db();
 
$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};
$email = $data_back->{"email"};
$mobileno = $data_back->{"mobileno"};

$query="select * from inet_login_user where email='$email' and mobile_no='$mobileno' and status='Y' and user_id='$userid'";
$sql=$db->query($query) or die("error in query inet_login_user---->".$db->error);

$num=$sql->num_rows;

if($num == 1) {
	echo json_encode("success");
}
else {
echo json_encode("failed");
}

?>