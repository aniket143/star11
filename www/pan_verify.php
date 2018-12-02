<?php

include("functions.php");

$db = get_my_db();
 
$data_back = json_decode(file_get_contents('php://input'));

$userid = $data_back->{"userid"};
$username = $data_back->{"username"};
$panno = $data_back->{"panno"};
$birthdate = $data_back->{"birthdate"};
$state = $data_back->{"state"};
$file1= $_FILES['panimage']['name'];

$query="INSERT INTO inet_pancard_info(id,userid,username,panno,birthdate,state,photo,status) 
VALUES ('','$userid','$username','$panno','$birthdate','$state','$file',default)";

$res=$db->query($query) or die("error in insert inet_pancard_info".$db->error);

echo json_encode("success");




?>