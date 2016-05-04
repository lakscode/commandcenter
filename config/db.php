<?php
$hostname="";
$username="";
$password="";
$dbname="";
 $mysql_conn=mysql_connect($hostname,$username,$password) or die("No connection is there".mysql_error());
 $mysql_db=mysql_select_db($dbname) or die("No database selected".mysql_error());
  mysql_set_charset('utf8', $mysql_conn);

?>






