<?php 
if(isset($_GET["message"])){
  $message =  $_GET["message"];
   echo "<script> alert('$message')</script>";

}
if(isset($_GET["text"])){
      $text = $_GET["text"];
      echo "<script> alert('$text')</script>";
   
}
 include('db.php');

 $result =  showDepartments()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showing the data from db</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        div{
            width: 90%;
            margin: 12px auto;
        }
        div > table{
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse
        }
        div > table  th,td{
            border: 1px solid black;
            text-align: center;
        }
        /* create, read , update, delete */
    </style>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Update</th>
            </tr>
            <?php while($dep =$result->fetch_assoc()){ ?>
            <tr>
              <td><?php echo $dep["id"] ?></td>
              <td><?php echo $dep["name"] ?></td>
              <td><?php echo $dep["description"] ?></td>
              <td><a href="update.php?id=<?php echo $dep["id"] ?>">Update</a>
              <a href="delete.php?id=<?php echo $dep["id"] ?>">Delete</a>
            </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>