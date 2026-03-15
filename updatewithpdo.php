<?php
require_once "connection.php" ;
session_start();
$_SESSION["id"];
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $_SESSION["id"] = $id;
    $query = "SELECT * FROM students WHERE id = :id";
    
   $statement =  $connect->prepare($query);
   $statement->bindParam(':id',$id,PDO::PARAM_INT);
   $statement->setFetchMode(PDO::FETCH_ASSOC);
   $statement->execute();
 

   
}
if($_SERVER["REQUEST_METHOD"] ==="POST"){
   $name =  $_POST["name"];
   $id =  $_SESSION["id"];
   
   $lastname =  $_POST["lastname"];
   $class =  $_POST["class"];
   $query = "UPDATE students SET name=:name, lastname=:lastname, class=:class WHERE id=:id";
   $dastor = $connect->prepare($query);
   $dastor->bindParam(':name',$name,PDO::PARAM_STR);
   $dastor->bindParam(':lastname',$lastname,PDO::PARAM_STR);
   $dastor->bindParam(':class',$class,PDO::PARAM_STR);
   $dastor->bindParam(':id',$id,PDO::PARAM_INT);
   if($dastor->execute()){
    header("location:readwithpdo.php");
   }
   else{
    header("location:readwithpdo.php");
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div>
        <section>
            <h1>Update Student Information</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <?php foreach($statement as $row){ ?>
        <input type="text" value="<?php echo $row["name"] ?>" placeholder="Enter your Name " name="name">
        <input type="text" value="<?php echo $row["lastname"] ?>" placeholder="Enter your lastName" name="lastname">
        <input type="text" value="<?php echo $row["class"] ?>" placeholder="Enter your class" name="class">
        <?php } ?>
        <input type="submit" value="Send">
    </form>
    </section>
    </div>
</body>
</html>