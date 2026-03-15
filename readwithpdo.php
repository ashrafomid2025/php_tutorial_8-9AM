<?php
require_once "connection.php";
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
            box-sizing: border-box
        }
        .container{
            width: 90%;
            margin: 10px auto;
            padding: 12px;
        }
      table{
        width: 100%;
        border: 1px solid black;
        border-collapse: collapse;
      }
      tr:first-child{
        background-color: rgba(0,0,0,0.5);
        color:white;
        padding: 12px;
      }
      tr:first-child > th{
        padding: 9px;
        text-align: center;
      }
      td,th{
        padding: 7px;
        text-align: center;
        border-bottom: 1px solid black;
      }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="background-color: rgba(0,0,230,0.4); padding: 12px;text-align:center; color: white">Reading data with PHP Data Objects</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Class</th>
                <th>Update</th>
            </tr>
            <?php 
            $query = "SELECT * FROM students";
           $statement =  $connect->prepare($query);
           $statement->setFetchMode(PDO::FETCH_ASSOC);
           $statement->execute();
           foreach($statement as $row){
?>  <tr>
      <td><?php echo $row["id"] ?> </td>
      <td><?php echo $row["name"] ?></td>
      <td><?php echo $row["lastname"] ?></td>
      <td><?php echo $row["class"] ?></td>
      <td><a href="<?php echo 'updatewithpdo.php?id='.$row["id"] ?>">Update</a></td>
</tr>
        <?php
           }
            ?>
            
        </table>
    </div>
</body>
</html>