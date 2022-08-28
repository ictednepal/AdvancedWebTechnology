<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with date and time</title>
</head>
<body>
    <?php
        //Working with DATE
        // echo "Today is ". date("y/m/d")."<br/>";
        // echo "Today is ". date("y-m-d")."<br/>";
        // echo "Today is ". date("y.m.d")."<br/>";
        // echo "Today is ". date("Y/m/d")."<br/>";
        // echo "Today is ". date("Y/M/d")."<br/>";
        // echo "Today is ". date("Y/M/D")."<br/>";
        // echo "Today is ". date("l")."<br/>";

        //Working with TIME
        //h -12 hours time format with leading 0 (01-12)
        //i -minutes leading with 0 (00-59)
        //s -seconds leading with 0 (00-59)
        //a -AM or PM

        // echo "The time is ". date("h:i:s")."<br/>";
        // echo "The time is ". date("h:i:sa")."<br/>";

        // date_default_timezone_set("Asia/Kathmandu");
        // echo "The time is ". date("h:i:sa")."<br/>";

        //strtotime : it is used to convert human understandable string time into unix time

        $mytime = strtotime("09:45am August 25 2021");
        echo "The date and the time is ".date("Y-m-d h:i:sa",$mytime);
    ?>
</body>
</html>