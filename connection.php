<?php


$host="localhost";
$user="u359406020_omrn";
$password="Project123";
$con=mysql_connect($host,$user,$password);

if(!$con) {
  echo 'Connected to MySQL';

  //if connected then Select Database.
  $db=mysql_select_db("u359406020_omrn",$con);

}
else {
  echo 'MySQL Server is not connected';
}


?>