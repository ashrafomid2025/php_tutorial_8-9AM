<?php 
date_default_timezone_set("Asia/Kabul");
$now = new DateTime();
$now = $now->format('Y:m:d:w:H:i:s');
// 9.7
echo rand();
// 0, 1
// oop mysqli
// PDO => PHP Data Objects, class

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
        let hour = parseInt(now[4]);
        let minute = parseInt(now[5]);
        let second = parseInt(now[6]);
        let year = now[0];
        let month = now[1];
        let day =  now[2];
        const dayNumber = now[3];
        console.log(dayNumber);
        let dayName = "";
        switch(dayNumber){
            case "1":
                dayName = "دوشنبه"
                break;
            case "2":
                dayName = "سه شنبه";
                break;
            case "3":
                dayName = "چهارشنبه"
                break;
            case "4":
                dayName = "پنجشنبه"
                break;
            case "5":
                dayName = "جمعه";
                break;
            case "6":
                dayName = "شنبه";
                break;
            default:
                dayName = "یکشنبه";
                break;
        }
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
            String(hour).padStart(2,"0")+":"+ String(minute).padStart(2,"0")+":"+String(second).padStart(2,"0")+ "<br>"+
            year+"-"+month+"-"+day+"<br>"+
            dayName
            document.getElementById("clock").style.cssText = "text-align:center; font-size:28px; font-weight:900";

        } 
        setInterval(showClock, 1000); 
        showClock();
    </script>
</body>
</html>