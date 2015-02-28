<?php
$array = array();
$array[] = array('fbool'=>true,'fint'=>42,'fstring'=>'Test','color'=>'red');
$array[] = array('fbool'=>false,'fint'=>89,'fstring'=>'Test2','color'=>'green');
echo json_encode($array);
