<?php

include("functions.php");

$result=get_kbdcontest();

$contestdata=array();

foreach($result as $value){

	if(!empty($value['contest_id'])){
	
	$contestname=$value['contest_name'];
	$entryfee=$value['entry_fee'];
	$logo=$value['logo'];
	$winningamt=$value['total_winning_amount'];
	$winners=$value['total_winner'];
	$contestid=$value['contest_id'];
	
	$contestdata[]=array('contestid'=>$contestid,'contestname'=>$contestname,'entryfee'=>$entryfee,'logo'=>$logo,'winningamount'=>$winningamt,'winners'=>$winners);

	}

}

$allcontestdata['contestdata']=$contestdata;

echo json_encode($allcontestdata);

?>