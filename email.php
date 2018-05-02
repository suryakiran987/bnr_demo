<?php
$secret = "6LcEaskjdhjksdhkjAAasdasdasH233adsadYZZadadr2";

if (!$_GET['key'])
	die("Failure");

$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_GET['key']."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
if($response['success'] == false)
	die("Failure");

echo("withoutshade86@gmail.com");
?>
