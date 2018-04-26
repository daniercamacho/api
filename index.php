<?php 
	require_once('vendor/autoload.php');
	require_once('app/clases/google_auth.php');
	require_once('app/init.php');


	$googleclient= new Google_Client();
	$auth =new GoogleAuth($googleclient);




 ?>