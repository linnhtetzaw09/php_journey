<?php

date_default_timezone_set("Asia/Yangon");

$getDate = getdate();
var_dump($getDate);
echo "<pre>".print_r($getDate,true)."</pre>";

echo "This is seconds = ".$getDate["seconds"];
echo "This is minutes = ".$getDate["minutes"];
echo "This is hours = ".$getDate["hours"];

echo "This is wday = ".$getDate["wday"];  // 0 Sun 1 Mon
echo "This is weekday = ".$getDate["weekday"];  // day monday as like
echo "This is yday = ".$getDate["yday"];  //day of the year


echo "This is month = ".$getDate["month"];  // month
echo "This is mon = ".$getDate["mon"];  // day of month
echo "This is mday = ".$getDate["mday"];  //month day

echo "This is year = ".$getDate["year"];  //2024
echo "This is 0 = ".$getDate["0"];  //1709654321


$time = time();
echo "This is 0 = ".$time;  //1709654321

// Date/Time Format

// https://www.php.net/manual/en/timezones.asia.php

// date(format,timestampe)

$date = date("a",$time);
echo "This is format = ".$date;   //am pm

$date = date("A",$time);
echo "This is format = ".$date;   //Am Pm

$date = date("d",$time);
echo "This is format = ".$date;   //05 leading 0

$date = date("D",$time);
echo "This is format = ".$date;   //Day mon tue wed

$date = date("F",$time);
echo "This is format = ".$date;   //month

$date = date("g",$time);
echo "This is format = ".$date;   //hours no leading 0, 12 hours format

$date = date("G",$time);
echo "This is format = ".$date;   //hours no leading 0, 24 hours formats

$date = date("h",$time);
echo "This is format = ".$date;   //hours leading 0, 12 hours format

$date = date("H",$time);
echo "This is format = ".$date;   //hours leading 0, 24 hours format

$date = date("i",$time);
echo "This is format = ".$date;   //minutes leading 0

$date = date("j",$time);
echo "This is format = ".$date;   //date of month no leading 0

$date = date("l",$time);
echo "This is format = ".$date;   //day Monday 

$date = date("L",$time);
echo "This is format = ".$date;   //leap year (1 or 0)

$date = date("m",$time);
echo "This is format = ".$date;   //day of month leading0

$date = date("M",$time);
echo "This is format = ".$date;   //month Jan , Feb

$date = date("n",$time);
echo "This is format = ".$date;   //day no leading 0

$date = date("r",$time);
echo "This is format = ".$date;   //Tue, 05 Mar 2024 23:10:54 +0630

$date = date("s",$time);
echo "This is format = ".$date;   //seconds

$date = date("U",$time);
echo "This is format = ".$date;   //milli seconds

$date = date("y",$time);
echo "This is format = ".$date;   //24 year short code

$date = date("Y",$time);
echo "This is format = ".$date;   //2024 year long code

$date = date("z",$time);
echo "This is format = ".$date;   //64 day of 365



// =>date_create (time,timezone optional) with date_format('Y/m/d) with date_diff(new,old)
// eg. date_create(timestamp,timezone_open("Asia/Yangon"));


$date1 = date_create("10-01-2024");
// echo date_format($date1,"Y/m/d");   //2024/01/10
$date2 = date_create("20-05-2024");
// echo date_format($date2,"Y-m-d");   //2024-05-20     

$diffone = date_diff($date2,$date1);
echo $diffone->format("%d days");   //10 days
echo $diffone->format("%m months");   //4 months
echo $diffone->format("%y year");   //0 year
echo $diffone->format("%Y year");   //00 year


$date3 = "{$getDate['mday']}-{$getDate['mon']}-{$getDate['year']}";
// echo $date3;   //10-06-2024
$date4 = date_create($date3);
// echo date_format($date4,"Y-m-d");  //2024-06-10

$difftwo = date_diff($date4,$date2);
echo $difftwo->format("%d days");   //20 days
echo $difftwo->format("%m months");   //0 months
echo $difftwo->format("%y year");   //0 year
echo $difftwo->format("%Y year");   //00 year


echo $difftwo->format("%R%d day");  //+21 day
echo $difftwo->format("%R%a day");   //+21 day



?>

<!-- https://www.php.net/manual/en/timezones.asia.php -->