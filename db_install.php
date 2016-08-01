<?php
  include("info.inc.php");
  $link=mysql_connect($hostname,$username,$password);
  if(!$link)
    die("Could not Connect : ".mysqli_error());
  if(!mysql_select_db($dbname,$link))
    die("Could not Connect to DB : ".mysql_error());

  $query="CREATE TABLE IF NOT EXISTS prospector_details(prospector_id int(21) PRIMARY KEY AUTO_INCREMENT,clearbit_id int(21), given_name varchar(50), family_name varchar(50), full_name varchar(50), title varchar(30), role varchar(30), seniority varchar(30), email_id varchar(100) UNIQUE, verified varchar(10), query_id int(21), FOREIGN KEY(query_id) REFERENCES prospector_query(query_id) );";

if(mysql_query($query,$link))
    echo " Prospector Details Table created ";

$query="CREATE TABLE IF NOT EXISTS prospector_query(query_id int(21) PRIMARY KEY AUTO_INCREMENT,domain_name varchar(100), person_name varchar(50));";

  if(mysql_query($query,$link))
    echo " Prospector Query Table created ";

    mysql_close($link);
?>
