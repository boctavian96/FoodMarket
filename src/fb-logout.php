<?php

session_destroy();

$user = $facebook->getUser();
$access_token = $facebook->getAccessToken();
$logoutUrl = $facebook->getLogoutUrl();
?>