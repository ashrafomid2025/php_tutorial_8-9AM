<?php 
// cookie, session $_SERVER, $_POST,$_GET, FILES, $_ENV
if($_SERVER["REQUEST_METHOD"]==="POST"){
  $password = $_POST["password"];
 $image =  $_FILES["image"];
 print_r($image);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <input name="password" type="password">
        <input type="file" name="image" accept="image/*">
        <button type="submit">Send</button>
    </form>
</body>
</html>