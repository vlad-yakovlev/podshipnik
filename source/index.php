<?php

$home = 'https://podshipnik161.ru';

$pages = [
	'/' => 'index',
	'/bearings' => 'bearings',
	'/contact' => 'contact',
];


$url = $_SERVER['REQUEST_URI'];
$page = $pages[$url];

if (is_null($page)) {
    http_response_code(404);
	require('pages/404.php');
	exit(0);
}

require('pages/' . $page . '.php');