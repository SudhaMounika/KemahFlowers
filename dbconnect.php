<?php

if(!isset($_SESSION)){
session_start();
}
	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	
	define('DBHOST', 'sharpfinance4ucom.ipagemysql.com');
	define('DBUSER', 'kemahflowers1_db');
	define('DBPASS', 'kemahflowers1_db');
	define('DBNAME', 'kemahflowers1_db');

	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}
	
	
	
	
	//tables

$table_User = 'users';
$table_User_Progress='user_progress';