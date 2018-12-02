<?php

include("functions.php");

$db=get_my_db();

$data_back = json_decode(file_get_contents('php://input'));

$contestid = $data_back->{"contestid"};
$matchid = $data_back->{"matchid"};

$result=get_allcontestusers($contestid,$matchid);

$allcontestusers=array();

foreach($result as $value){
	
	if(!empty($value['contest_id'])) {
		
		for($i=1;$i<=11;$i++) {
			
			$player_column = "player".$i;
			
			$query1="SELECT getpoints($value[$player_column])";	
			$sql=$db->query($query1) or die("error in query --> ".$db->error);
		   
		   $row = mysqli_fetch_row($sql);
		   $total+=$row[0];		   
		   
		}
		
		$username=$value['user_name'];
		$contestname=$value['contest_name'];
		$logo=$value['logo'];
		
		$allcontestusers[]=array('username'=>$username,'contestname'=>$contestname,'logo'=>$logo,'totalteampoints'=>$total);
	
	}
}

usort($allcontestusers,function($a,$b){
    $c = $b['totalteampoints'] - $a['totalteampoints'];
    return $c;
});

$alldata['contestuserdata']= $allcontestusers;

echo json_encode($alldata);


?>