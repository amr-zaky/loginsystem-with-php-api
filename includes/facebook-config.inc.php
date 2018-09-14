<?php 

require_once 'C:\xampp\htdocs\first-project\php-graph-sdk\vendor\autoload.php';

$fb=new \Facebook\Facebook([
	'app_id'=>'297542034390136
',
	'app_secret'=>'3328e6394af8b16947ac2c4aab15d2c4',
	'default_graph_version'=>'v3.1'

]);


$helper=$fb->getRedirectLoginHelper();
