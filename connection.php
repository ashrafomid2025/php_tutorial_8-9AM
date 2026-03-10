<?php
class DBConnection{
    private $hostname = "localhost";
    private $dbname = "testing_db";
    private $username = "root";
    private $password = "";
    

    public function connect(){
     try{
      $dbsource = "mysql:host=".$this->hostname.";dbname=".$this->dbname.";"; 
      $connect =  new PDO($dbsource,$this->username, $this->password);
      echo "db connected us successfully";
      return $connect;
     }
    //  postman, testing api,
     catch(Exception $e){
        echo "something went wrong". $e->getMessage();
     }
      }
    // public function __construct($hostname, $dbname, $username, $password)
    // {
    //     $this->hostname = $hostname;
    //     $this->dbname = $dbname;
    //     $this->password = $password;
    //     $this->username = $username;        
    // }
}
$db = new DBConnection();
$db->connect();