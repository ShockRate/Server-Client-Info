<?php  
 # $_SERVER SUPERGLOBAL

	//Create a server array
	$server = [
		'Host server name' => $_SERVER['SERVER_NAME'],
		'Host header' => $_SERVER['HTTP_HOST'],
		'Server admin' => $_SERVER['SERVER_ADMIN'],
		'Server software' => $_SERVER['SERVER_SOFTWARE'],
		'Document root' => $_SERVER['DOCUMENT_ROOT'],
		'Current page' => $_SERVER['PHP_SELF'],
		'Script name' => $_SERVER['SCRIPT_NAME'],
		'Absulute path' => $_SERVER['SCRIPT_FILENAME']
	];

	//Create client array
	$client =[
		'Client system info' => $_SERVER['HTTP_USER_AGENT'],
		'Client IP' => $_SERVER['REMOTE_ADDR'],
		'Remote port' => $_SERVER['REMOTE_PORT']
	];
 	
?>