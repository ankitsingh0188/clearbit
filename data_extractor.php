<?php
  include ('info.inc.php');
  $domain=$_POST['domain'];
  $query=$_POST['query'];

  $dbconn = mysql_connect($hostname,$username,$password);
  if(!$dbconn){
    die("Could not connect to the database : ".mysql_error());
  }
  else{
    $dbselect = mysql_select_db($dbname,$dbconn);
    if(!$dbselect){
      die("Could not select the database : ".mysql_error());
    }
    else{
    $query = "INSERT into prospector_query values(NULL,'$domain','$query')";
      if(mysql_query($query)){
        header("Location: details_form.html");
      }
    }
  mysql_close($dbconn);
  }
?>
