<?php



$host='localhost';
$user='root';
$pass='';
$my_database='realestate';
if(mysql_connect($host,$user,$pass))

{
if(mysql_select_db($my_database))
{



}}
ELSE
{
die(mysql_error());
}



?>