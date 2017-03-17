<?php


function Connect()
{
 $dbhost = "impuls08.mysql.ukraine.com.ua";
 $dbuser = "impuls08_testdb";
 $dbpass = "8ka6psef";
 $dbname = "impuls08_testdb";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}
 
?>