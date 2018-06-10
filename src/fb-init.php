<?php
session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '597661813948669',
		'app_secret' => 'f83d82d1280b52c645701c618cb5f3b2',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>