<?php 
date_default_timezone_set("Asia/Kabul");
$now = new DateTime();
$now = $now->format('H:i:s');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clock</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box{
            padding: 20px;
            border: 1px solid black;
            border-radius: 12px;
        }
    </style>
</head>
<body>
     <div class="container">
        <div class="box" id="clock"></div>
     </div>

     <script>
        let now = "<?php echo $now ?>".split(":");
        let hour = parseInt(now[0]);
        let minute = parseInt(now[1]);
        let second = parseInt(now[2]);
        function showClock(){
            second++;
            if(second === 60){
                second=0;
                minute++;
            }
            if(minute ===60){
                minute=0;
                hour++;
            }
            if(hour ===24){
                hour =0
            }

            document.getElementById("clock").innerHTML = 
            String(hour).padStart(2,"0")+":"+ String(minute).padStart(2,"0")+":"+String(second).padStart(2,"0")
        } 
        setInterval(showClock, 1000); 
        showClock();
    </script>
</body>
</html>