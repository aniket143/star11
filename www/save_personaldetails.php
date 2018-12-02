<?php

include("functions.php");

$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};
$teamname = $data_back->{"teamname"};
$fullname = $data_back->{"fullname"};
$dob = $data_back->{"dob"};
$state = $data_back->{"state"};

$db = get_my_db();

$query="UPDATE inet_login_user set teamname='$teamname',user_name='$fullname',date_of_birth='$dob',state='$state' where user_id='$userid'";

$res=$db->query($query) or die("error in insert inet_login_user ".$db->error);

echo json_encode("Success");

?>