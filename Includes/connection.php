<?php
require("constants.php");
//creating db connection
$connection=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if(!$connection){
	die("Database connection failed".mysql_error());
}
//select db
$db_select=mysql_select_db(DB_NAME,$connection);
if(!$db_select){
	die("database selection failed".mysql_error());
}
?>
