<?php
$host = "localhost";
$datatbasename = "testing_db";
$username = "root";
$password = "";

try{
    $dbs = "mysql:port=".$host. ";dbname=".$datatbasename.";";
  $connect =  new PDO($dbs, $username,$password);
 
  return $connect;
}
catch(Exception $error){
    echo $error->getMessage();
}

?>