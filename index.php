<?php

	require('DBSessionHandler.php');
	
	$session_handler = new DbSessionHandler();
	$session_handler->pdo_data_source_name = 'mysql:dbname=test;host=127.0.0.1';
	$session_handler->pdo_username = 'root';
	$session_handler->pdo_password = 'root';
	$session_handler->session_db_table = 'php_sessions';
	$session_handler->session_name = 'member_key';
	$session_handler->initialize();
	
	session_start();
	$_SESSION['User'] = array('username' => 'kahwee', 'country_id' => 'US', 'first_name' => 'Kah Wee', 'last_name' => 'Teng');
	$_SESSION['User']['country_id'] = 'US';
	$_SESSION['User']['start_ip'] = '';
	unset($_SESSION['User']['first_name']);
	unset($_SESSION['User']['last_name']);
	var_dump($_SESSION);

?>