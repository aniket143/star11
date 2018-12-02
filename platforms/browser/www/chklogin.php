<?php

include("functions.php");
 
$db = get_my_db();

$data_back = json_decode(file_get_contents('php://input'));

$email = $data_back->{"email"};
$pass = $data_back->{"pass"};

$query="select * from inet_login_user where email='$email' and status='Y'";
$sql=$db->query($query) or die("error in query inet_login_user---->".$db->error);

$data=array();

foreach($sql as $row){
	
if(!empty($row['user_id'])){
	
$userid=$row['user_id'];
$salt=$row['salt_key'];
$password=$row['password'];
$enc_id=$row['encrypted_id'];

}
}

$combo_main = $salt . $password;       
$md_main=md5($combo_main);

$combo_chk = $salt . $pass;   
$md_chk=md5($combo_chk);

if(strcmp($md_main,$md_chk) == 0){
	
	array_push($data,"Success");
	array_push($data,$userid);
	array_push($data,$enc_id);
	
	echo json_encode($data);
}

else{
	echo json_encode("Fail");
}

?>