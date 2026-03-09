<?php
date_default_timezone_set("Asia/Kabul");
$time = date('H:i:s');

$date = new DateTime();
$date->modify('+1 year');
$interval = new DateInterval('P1M');
$date->add($interval);
echo $date->format("Y-m-d")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>live clock</div>
    <div id="clock"></div>

    <script>
        let time = "<?php echo $time; ?>".split(":");
        let h = parseInt(time[0]);
        let m = parseInt(time[1]);
        let s = parseInt(time[2]);
        function updateClock(){
            s++;
            if(s==60){
                s=0;
                m++;
            }
            if(m==60){
                m=0;
                h++;
            }
            if(h==24){
                h=0;
            }

            document.getElementById("clock").innerHTML =
            String(h).padStart(2,'0')+ ":"+
            String(m).padStart(2,'0')+":"+
            String(s).padStart(2,'0');
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</body>
</html>