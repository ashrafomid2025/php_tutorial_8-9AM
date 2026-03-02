<?php 
include "db.php";
// insertDepartment();
if($_SERVER["REQUEST_METHOD"]==="POST"){
  $name =   $_POST["name"];
 $description =  $_POST["desc"];
 insertDepartment($name,$description);
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
            <input name="name" type="text" placeholder="Department name">
            <textarea name="desc" placeholder="Department description add some details"></textarea>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>