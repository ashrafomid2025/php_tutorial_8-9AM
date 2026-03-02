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
      body{
         width: 100%;
         height: 100vh;
         display: flex;
         justify-content: center;
         align-items: center;
      }
      div{
         width: 70%;
         border: 1px solid black;
         border-radius: 12px;
         padding: 12px;
         display: flex;
         flex-direction: column;
         gap: 12px;
         align-items: center;

      }
      form{
         display: flex;
         flex-direction: column;
         gap: 12px;
         width: 100%;
      }
      input, select{
         height: 25px;
         width: 100%;
      }
      button{
         padding: 12px 0;
         border-radius: 9px;
         background-color: blue;
         color: white;
         border: none;
      }
   </style>
</head>
<body>
    <div>
      <h1>Calculator</h1>
      <?php if(isset($_GET['name']) && isset($_GET['lastName']) && isset($_GET['age'])){ ?>
           <p>Hi <?php echo $_GET['name'] .' '?> <?php echo $_GET['lastName'] ?> you are <?php echo $_GET['age'] ?> years old </p>
      <?php } ?>
      <!-- $_SESSION, $_SERVER -->
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
         <input type="number" name="number1">
         <select name="operator">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
         </select>
         <input type="number" name="number2">
         <button type="submit">Calculate</button>
      </form>
      <?php if(isset($result)){ ?>
      <p><?php echo $result ?></p>
       <?php } else{ ?>
         <p>this is the first time </p>
       <?php } ?>
    </div>
</body>
</html>