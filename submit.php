<?php
$response = array();
if(array_key_exists('errors',$_GET)){
	$response['success']=false;
	foreach($_POST as $k=>$v){
		$response['errors'][$k]='Error in '.$k;
	}
}else{
	$response['success']=true;
	$response['data'] = $_POST;
}
echo json_encode($response);