<?php 
if(isset($_GET["id"])){
    include("db.php");
  $data =   displayValues($_GET["id"]);
  $result = $data->fetch_assoc();
  
}
if($_SERVER["REQUEST_METHOD"]==="POST"){
include("db.php");
$name =  $_POST["name"];    
$desc =  $_POST["desc"];  
$id = $_POST["id"];  
update($name,$desc,$id );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
        padding: 0;
    box-sizing: border-box;        }
    div{
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    form{
        width: 60%;
        border: 1px solid black;
        border-radius: 9px;
        display: flex;
        flex-direction: column;
        gap: 5px;
        padding: 12px;
    }
    form > input{
        height: 30px;
    }
    form > textarea{
        height: 80px;
        resize: none;
    }
    form > button{
        padding: 8px 0;
        background-color: blue;
        color: white;
        border: none;
    }
    </style>
</head>
<body>
    <div>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
            <h1 style="text-align:center">Update form</h1>
            <input style="display: none;" name="id" type="number" value="<?php echo $result['id'] ?>">
            <input value="<?php echo $result["name"] ?>" name="name" type="text" placeholder="Department name">
            <textarea  name="desc" placeholder="Department description add some details">
                <?php echo $result["description"] ?>
            </textarea>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>