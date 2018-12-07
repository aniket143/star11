<?php

header("Access-Control-Allow-Origin: *");

function get_my_db()
{
    static $db;
    if (!$db) {
					$db = new mysqli("localhost", "root", "", "star");
    }
    return $db;
}

function fetchmysqlDB($query)
{
	$db = get_my_db();
	if ((!$query) or (empty($query)))
	{   
	return false;   
	}
	$count = 0;
	$data = array();
	$nume=$query->num_rows;
	$data['totquery']=$nume;
	while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
	$data[$count] = $row;
	$count++;
	}
	$query->free();
	
	return $data;

}

function get_match(){
	
	$db = get_my_db();
	$data = array();
	
	$query="SELECT *,group_concat(team_id separator ',') as teamid,group_concat(team_code separator ',') as teamname,group_concat(logo_url separator ',') as logo FROM `inet_master_match` m 
	inner join inet_master_team t on m.sports_id=t.sports_id where m.start_date > NOW() 
	and(m.team1=t.team_id or m.team2=t.team_id) and m.status='Y' and t.status='Y' group by m.match_id";

	$sql=$db->query($query) or die("error in query load_match --> ".$db->error);
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_pcl_cricket($teamid1,$teamid2){
	
	$db = get_my_db();
	$data = array();
	
	/*$query="SELECT * FROM `inet_master_player` ply left join inet_master_playerclassification pcl 
	on ply.pcat_id=pcl.pcl_id left join inet_master_team t on t.team_id=ply.team_id 
	where pcl.sports_id=1 and ply.status='Y' and pcl.status='Y' 
	and (ply.team_id='$teamid1' or ply.team_id='$teamid2')";*/
	
	
	$query="SELECT * FROM `inet_master_player` ply left join inet_master_playerclassification pcl 
	on ply.pcat_id=pcl.pcl_id left join inet_master_team t on t.team_id=ply.team_id left join inet_cricket_playing11 p on p.team_id=t.team_id 
	where pcl.sports_id=1 and ply.status='Y' and pcl.status='Y' 
	and (ply.team_id='$teamid1' or ply.team_id='$teamid2') 
	and (p.player1=ply.player_id or p.player2=ply.player_id or p.player3=ply.player_id or p.player4=ply.player_id or p.player5=ply.player_id or p.player6=ply.player_id or p.player7=ply.player_id or p.player8=ply.player_id or p.player9=ply.player_id or p.player10=ply.player_id or p.player11=ply.player_id)";

	$sql=$db->query($query) or die("error in query load_pcl_cricket --> ".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_contest(){

	$db=get_my_db();
	
	$data=array();
	
	$query="select * from inet_master_contest mc inner join inet_create_contest cc on mc.contest_id=cc.contest_id 
	where mc.status='Y' and cc.status='Y' and cc.sports_id=1";
	
	$sql=$db->query($query) or die("error in query load contest---->".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}

function generateSalt($max = 64){
	
	$characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
	$i = 0;
	$salt = "";
	while ($i < $max) {
          $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
			 $i++;
			}
	return $salt;
}


function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function get_bonusamount(){
	
	$db=get_my_db();
	
	$data=array();
	
	$query="select amount,paytype_id from inet_master_payment_type where paytype_id=3 and status='Y'";
   $sql=$db->query($query) or die("error in query inet_master_payment_type---->".$db->error);
   
   $data=fetchmysqlDB($sql);
	return $data;

}

function get_joinedcontest($userid){

	$db=get_my_db();
	
	$data=array();
	
	$query="select * from inet_contest_join cj inner join inet_master_contest mc on cj.contest_id=mc.contest_id where cj.cust_id='$userid' and mc.status='Y'";
	
	$sql=$db->query($query) or die("error in query inet_contest_join---->".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_ckt_fixtures_match($userid){
	
	$db = get_my_db();
	$data = array();
	
	$query="SELECT *,group_concat(team_id separator ',') as teamid,group_concat(team_code separator ',') as teamname,group_concat(logo_url separator ',') as logo FROM `inet_master_match` m 
	inner join inet_master_team t on m.sports_id=t.sports_id  inner join inet_customer_team_cricket ct on ct.match_id=m.match_id inner join inet_contest_join cj on cj.cust_team_id=ct.cust_team_id where m.start_date > NOW() 
	and(m.team1=t.team_id or m.team2=t.team_id) and m.status='Y' and t.status='Y' and cj.cust_id='$userid' group by m.match_id";

	$sql=$db->query($query) or die("error in query get_ckt_fixtures_match --> ".$db->error);
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_ckt_live_match($userid){
	
	$today = date('Y-m-d H:i:s');
	
	$db = get_my_db();
	$data = array();
	
	
	$query="SELECT *,group_concat(team_id separator ',') as teamid,group_concat(team_code separator ',') as teamname,group_concat(logo_url separator ',') as logo FROM `inet_master_match` m 
	inner join inet_master_team t on m.sports_id=t.sports_id  inner join inet_customer_team_cricket ct on ct.match_id=m.match_id inner join inet_contest_join cj on cj.cust_team_id=ct.cust_team_id where (m.start_date <= '$today' && m.end_date >= '$today') 
	and(m.team1=t.team_id or m.team2=t.team_id) and m.status='Y' and t.status='Y' and cj.cust_id='$userid' group by m.match_id";


	$sql=$db->query($query) or die("error in query get_ckt_live_match --> ".$db->error);
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_ckt_result_match($userid){
	
	$db = get_my_db();
	$data = array();
	
	$query="SELECT *,group_concat(team_id separator ',') as teamid,group_concat(team_code separator ',') as teamname,group_concat(logo_url separator ',') as logo FROM `inet_master_match` m 
	inner join inet_master_team t on m.sports_id=t.sports_id  inner join inet_customer_team_cricket ct on ct.match_id=m.match_id inner join inet_contest_join cj on cj.cust_team_id=ct.cust_team_id where m.end_date < NOW() 
	and(m.team1=t.team_id or m.team2=t.team_id) and m.status='Y' and t.status='Y' and cj.cust_id='$userid' group by m.match_id";
	

	$sql=$db->query($query) or die("error in query get_ckt_result_match --> ".$db->error);
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_joinedcontestformatch($userid,$matchid){

	$db=get_my_db();
	
	$data=array();
	
	$query="select * from inet_contest_join cj inner join inet_master_contest mc on cj.contest_id=mc.contest_id inner join inet_customer_team_cricket cteam on cteam.cust_team_id=cj.cust_team_id 
	where cj.cust_id='$userid' and cteam.match_id='$matchid' and mc.status='Y'";
	
	$sql=$db->query($query) or die("error in query get_joinedcontestformatch--->".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_allcontestusers($contestid,$matchid){

	$db=get_my_db();
	
	$data=array();
	
	$query="select * from inet_contest_join cj inner join inet_master_contest mc on cj.contest_id=mc.contest_id
	inner join inet_customer_team_cricket cteam 
	on cteam.cust_team_id=cj.cust_team_id inner join inet_login_user u on u.user_id=cj.cust_id 
	where cj.contest_id='$contestid' and cteam.match_id='$matchid' and cj.status='Y'";
	
	$sql=$db->query($query) or die("error in query get_allcontestusers--->".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_player($pid){
	
	$db=get_my_db();
	
	$data=array();
	
	$query="select * from inet_master_player pl inner join inet_master_playerclassification pcl 
	on pl.pcat_id=pcl.pcl_id inner join inet_master_team t on t.team_id=pl.team_id where player_id='$pid' and pl.status='Y'";
	
   $sql=$db->query($query) or die("error in query inet_master_player---->".$db->error);
   
   $data=fetchmysqlDB($sql);
	return $data;

}	

function get_personaldetails($userid){
	
	$db=get_my_db();
	
	$data=array();
	
	$query="select * from inet_login_user where user_id='$userid' and status='Y'";
	
   $sql=$db->query($query) or die("error in query inet_login_user---->".$db->error);
   
   $data=fetchmysqlDB($sql);
	return $data;

}	

function get_pcl_kabbadi($teamid1,$teamid2){
	
	$db = get_my_db();
	$data = array();
	
	/*$query="SELECT * FROM `inet_master_player` ply left join inet_master_playerclassification pcl 
	on ply.pcat_id=pcl.pcl_id left join inet_master_team t on t.team_id=ply.team_id 
	where pcl.sports_id=3 and ply.status='Y' and pcl.status='Y' 
	and (ply.team_id='$teamid1' or ply.team_id='$teamid2')";*/
	
	
	$query="SELECT * FROM `inet_master_player` ply left join inet_master_playerclassification pcl 
	on ply.pcat_id=pcl.pcl_id left join inet_master_team t on t.team_id=ply.team_id left join inet_kabaddi_playing7 p on p.team_id=t.team_id 
	where pcl.sports_id=3 and ply.status='Y' and pcl.status='Y' 
	and (ply.team_id='$teamid1' or ply.team_id='$teamid2') 
	and (p.player1=ply.player_id or p.player2=ply.player_id or p.player3=ply.player_id or p.player4=ply.player_id or p.player5=ply.player_id or p.player6=ply.player_id or p.player7=ply.player_id or p.player8=ply.player_id or p.player9=ply.player_id or p.player10=ply.player_id)";

	$sql=$db->query($query) or die("error in query load_pcl_kabbadi --> ".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_kbdcontest(){

	$db=get_my_db();
	
	$data=array();
	
	$query="select * from inet_master_contest mc inner join inet_create_contest cc on mc.contest_id=cc.contest_id 
	where mc.status='Y' and cc.status='Y' and cc.sports_id=3";
	
	$sql=$db->query($query) or die("error in query load contest---->".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_kbdjoinedcontest($userid){

	$db=get_my_db();
	
	$data=array();
	
	$query="select * from inet_contest_join_kabaddi cj inner join inet_master_contest mc on cj.contest_id=mc.contest_id where cj.cust_id='$userid' and mc.status='Y'";
	
	$sql=$db->query($query) or die("error in query inet_contest_join---->".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}


function get_kbd_fixtures_match($userid){
	
	$db = get_my_db();
	$data = array();
	
	$query="SELECT *,group_concat(team_id separator ',') as teamid,group_concat(team_code separator ',') as teamname,group_concat(logo_url separator ',') as logo FROM `inet_master_match` m 
	inner join inet_master_team t on m.sports_id=t.sports_id  inner join inet_customer_team_kabaddi kb on kb.match_id=m.match_id inner join inet_contest_join_kabaddi cj on cj.cust_team_id=kb.cust_team_id where m.start_date > NOW() 
	and(m.team1=t.team_id or m.team2=t.team_id) and m.status='Y' and t.status='Y' and cj.cust_id='$userid' group by m.match_id";

	$sql=$db->query($query) or die("error in query get_kbd_fixtures_match --> ".$db->error);
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_kbd_live_match($userid){
	
	$today = date('Y-m-d H:i:s');
	
	$db = get_my_db();
	$data = array();
	
	
	$query="SELECT *,group_concat(team_id separator ',') as teamid,group_concat(team_code separator ',') as teamname,group_concat(logo_url separator ',') as logo FROM `inet_master_match` m 
	inner join inet_master_team t on m.sports_id=t.sports_id  inner join inet_customer_team_kabaddi kb on kb.match_id=m.match_id inner join inet_contest_join_kabaddi cj on cj.cust_team_id=kb.cust_team_id where (m.start_date <= '$today' && m.end_date >= '$today') 
	and(m.team1=t.team_id or m.team2=t.team_id) and m.status='Y' and t.status='Y' and cj.cust_id='$userid' group by m.match_id";


	$sql=$db->query($query) or die("error in query get_kbd_live_match --> ".$db->error);
	$data=fetchmysqlDB($sql);
	return $data;
}
	
function get_kbd_result_match($userid){
	
	$db = get_my_db();
	$data = array();
	
	$query="SELECT *,group_concat(team_id separator ',') as teamid,group_concat(team_code separator ',') as teamname,group_concat(logo_url separator ',') as logo FROM `inet_master_match` m 
	inner join inet_master_team t on m.sports_id=t.sports_id  inner join inet_customer_team_kabaddi kb on kb.match_id=m.match_id inner join inet_contest_join cj on cj.cust_team_id=kb.cust_team_id where m.end_date < NOW() 
	and(m.team1=t.team_id or m.team2=t.team_id) and m.status='Y' and t.status='Y' and cj.cust_id='$userid' group by m.match_id";
	

	$sql=$db->query($query) or die("error in query get_kbd_result_match --> ".$db->error);
	$data=fetchmysqlDB($sql);
	return $data;
}


function get_playername($c,$vc){
	
	$db = get_my_db();
	$data = array();
	
	$query="select player_name from inet_master_player where (player_id='$c' or player_id='$vc') 
	and status='Y'";

	$sql=$db->query($query) or die("error in query get_playername --> ".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}


function get_kbdteampre($custteamid){
	
	$db = get_my_db();
	$data = array();
	
	$query="SELECT * FROM `inet_customer_team_kabaddi` ct inner join inet_master_player ply 
	on (ct.player1=ply.player_id or ct.player2=ply.player_id or ct.player3=ply.player_id or ct.player4=ply.player_id or ct.player5=ply.player_id or ct.player6=ply.player_id or ct.player7=ply.player_id) 
	inner join inet_master_playerclassification pcl on ply.pcat_id=pcl.pcl_id 
	where ply.status='Y' and pcl.status='Y' and ply.sports_id=3 and ct.cust_team_id='$custteamid'";

	$sql=$db->query($query) or die("error in query get_kbdteampre --> ".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}

function get_tournament($trnid){
	
	$db = get_my_db();
	$data = array();
	
	$query="SELECT * FROM `inet_master_tournament` t inner join inet_master_tournamenttype ttype ON t.trn_trtype_id=ttype.trtype_id 
	WHERE trn_id='$trnid'";

	$sql=$db->query($query) or die("error in query get_tournament --> ".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}


function get_cktteampre($custteamid){
	
	$db = get_my_db();
	$data = array();
	
	$query="SELECT * FROM `inet_customer_team_cricket` ct inner join inet_master_player ply 
	on (ct.player1=ply.player_id or ct.player2=ply.player_id or ct.player3=ply.player_id or ct.player4=ply.player_id or ct.player5=ply.player_id or ct.player6=ply.player_id or ct.player7=ply.player_id or ct.player8=ply.player_id or ct.player9=ply.player_id or ct.player10=ply.player_id or ct.player11=ply.player_id) 
	inner join inet_master_playerclassification pcl on ply.pcat_id=pcl.pcl_id 
	where ply.status='Y' and pcl.status='Y' and ply.sports_id=1 and ct.cust_team_id='$custteamid'";

	$sql=$db->query($query) or die("error in query get_cktteampre --> ".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}


function get_playerkbd($pid){
	
	$db=get_my_db();
	
	$data=array();
	
	$query="select * from inet_master_player pl inner join inet_master_playerclassification pcl 
	on pl.pcat_id=pcl.pcl_id inner join inet_master_team t on t.team_id=pl.team_id where player_id='$pid' and pl.status='Y'";
	
   $sql=$db->query($query) or die("error in query inet_master_player---->".$db->error);
   
   $data=fetchmysqlDB($sql);
	return $data;

}	

function get_cktteamedit($custteamid){
	
	$db = get_my_db();
	$data = array();
	
	$query="SELECT * FROM `inet_customer_team_cricket` ct inner join inet_master_player ply 
	on (ct.player1=ply.player_id or ct.player2=ply.player_id or ct.player3=ply.player_id or ct.player4=ply.player_id or ct.player5=ply.player_id or ct.player6=ply.player_id or ct.player7=ply.player_id or ct.player8=ply.player_id or ct.player9=ply.player_id or ct.player10=ply.player_id or ct.player11=ply.player_id) 
	inner join inet_master_playerclassification pcl on ply.pcat_id=pcl.pcl_id left join inet_master_team t on t.team_id=ply.team_id
	where ply.status='Y' and pcl.status='Y' and ply.sports_id=1 and ct.cust_team_id='$custteamid'";

	$sql=$db->query($query) or die("error in query get_cktteampre --> ".$db->error);
	
	$data=fetchmysqlDB($sql);
	return $data;
}





?>
