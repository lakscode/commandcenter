<?php
$data_type="json";
if($data_type == "db")
{
$hostname="";
$username="";
$password="";
$dbname="";

$hostname="localhost";
$username="root";
$password="";
$dbname="commandcenter";


$mysql_conn=mysql_connect($hostname,$username,$password) or die("No connection is there".mysql_error());
$mysql_db=mysql_select_db($dbname) or die("No database selected".mysql_error());
mysql_set_charset('utf8', $mysql_conn);
}
if($data_type == "json")
{
$filename_data= "config/twitter.json";
$filename_theme= "config/theme.json";
}
  

?>






