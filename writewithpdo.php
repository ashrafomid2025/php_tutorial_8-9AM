<?php 
require_once "connection.php";
if($_SERVER["REQUEST_METHOD"]==="POST"){
   $name =  $_POST["name"];
   $lastname =  $_POST["lastname"];
   $class =  $_POST["class"];
   $query = "INSERyT INTO students(name,lastname,class) VALUES(:name,:lastname,:class)";
   $statement = $connect->prepare($query);
    $statement->execute([
        ":name"=>$name,
        ":lastname"=>$lastname,
        ":class"=> $class
    ]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <section>
            <h1>Student Registration</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <input type="text" placeholder="Enter your Name " name="name">
        <input type="text" placeholder="Enter your lastName" name="lastname">
        <input type="text" placeholder="Enter your class" name="class">
        <input type="submit" value="Send">
    </form>
    </section>
    </div>
</body>
</html>