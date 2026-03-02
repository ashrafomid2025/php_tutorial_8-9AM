<?php
function dbConnection(){
    $connect = new mysqli("localhost","root","","my_db");
    return $connect;
}

function showDepartments(){
   $connect =  dbConnection();
   $command = "SELECT * FROM department order by name desc";
  return  $connect->query($command); 
}

function insertDepartment(string $name,string $description){
   $connect =  dbConnection();
   $command = "INSERT INTO department(name,description) VALUES('$name','$description')";
   $connect->query($command);
   header("location:index.php");
}

function update(string $name,string $description, $id){
   
   $command = "UPDATE department SET name='$name', description ='$description' where id='$id'";
  $connect =  dbConnection();
 if( $connect->query($command)){
   header("location:index.php?message=department data updated successfully");
 }
 else{
   header("location:index.php?message=Something went wrong");
 }
}

function displayValues($id){
   $command = "SELECT * FROM department WHERE id = '$id'";
  $connect =  dbConnection();
 $result =  $connect->query($command);
 return $result;
}
function deleteDepartment($id){
  $sql = "DELETE FROM department WHERE id = '$id'";
 $connection =  dbConnection();
 if($connection->query($sql)){
  header("location:index.php?text=one item has been deleted");
 }
 else{
  header("location:index.php?text=something went wrong in deleting one item");
 }
}