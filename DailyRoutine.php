<!DOCTYPE html>
<!-- Name : Abhay Panchal 
     Student Number : 000813104
     Date : 02-10-2020 -->

<!-- This php file take user input from html form and then store every thing in array and
     represent the array on the screen with all the tasks along with deadlines. -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Daily Routine</title>
</head>
<body>
    <h1 class="h1"> This is your Today's Plan </h1>

    
<?php
/* declaring variables */
$day = filter_input(INPUT_GET , "day");
$month = filter_input(INPUT_GET , "month");
$year = filter_input(INPUT_GET , "year", FILTER_VALIDATE_INT);

$name1 = filter_input(INPUT_GET,"time1");
$name2 = filter_input(INPUT_GET,"time2");
$name3 = filter_input(INPUT_GET,"time3");
$name4 = filter_input(INPUT_GET,"time4");
$name5 = filter_input(INPUT_GET,"time5");
$name6 = filter_input(INPUT_GET,"time6");
$name7 = filter_input(INPUT_GET,"time7");
$name8 = filter_input(INPUT_GET,"time8");
$name9 = filter_input(INPUT_GET,"time9");
$name10= filter_input(INPUT_GET,"time10");
$name11= filter_input(INPUT_GET,"time11");
$name12= filter_input(INPUT_GET,"time12");
$name13= filter_input(INPUT_GET,"time13");
$name14= filter_input(INPUT_GET,"time14");
$name15= filter_input(INPUT_GET,"time15");
$name16= filter_input(INPUT_GET,"time16");
$name17= filter_input(INPUT_GET,"time17");
$name18= filter_input(INPUT_GET,"time18");
$name19= filter_input(INPUT_GET,"time19");
$name20= filter_input(INPUT_GET,"time20");
$name21= filter_input(INPUT_GET,"time21");
$name22= filter_input(INPUT_GET,"time22");
$name23= filter_input(INPUT_GET,"time23");
$name24= filter_input(INPUT_GET,"time24");



$date = []; /* crating both empty arrays */
$hours = [];

/* pushing everything into the array */
array_push($date, $day , $month , $year); 
array_push($hours , $name1 ,$name2,$name3 , $name4,$name5,$name6,$name7,$name8,$name9,$name10,$name11);
array_push($hours, $name12,$name13,$name14,$name15,$name16,$name17,$name18,$name19,$name20,$name21,$name22,$name23,$name24);


echo '<span class="date">Day - Month - Year </span><br>';
echo "<div class='date1'>$date[0] - $date[1] - $date[2] </div><br>";
echo " <h1 class='h1'> THESE ARE THE TASKS YOU CHOSE TO DO!! </h1>";
?>
 <!-- Usinng for loop and if statement to clearly output the tasks on the screen -->
<div class="for">
    <?php
    for($i=0; $i< count($hours); $i++){
        
        if(strlen($hours[$i]) > 0){
            if($i == 0 && strlen($name1) >0 ){
                echo "<div class='hours'> 12:00 AM to 1:00 AM :  </div>";
            }
            if($i == 1 && strlen($name2) >0 ){
                echo "<div class='hours'> 1:00 AM to 2:00 AM : </div>";
            }
            if($i == 2 && strlen($name3) >0 ){
                echo "<div class='hours'> 2:00 AM to 3:00 AM : </div>";
            }
            if($i == 3 && strlen($name4) >0 ){
                echo "<div class='hours'> 3:00 AM to 4:00 AM :</div>";
            }
            if($i == 4 && strlen($name5) >0 ){
                echo "<div class='hours'> 4:00 AM to 5:00 AM : </div>";
            }
            if($i == 5 && strlen($name6) >0 ){
                echo "<div class='hours'> 5:00 AM to 6:00 AM : </div>";
            }
            if($i == 6 && strlen($name7) >0 ){
                echo "<div class='hours'> 6:00 AM to 7:00 AM : </div>";
            }
            if($i == 7 && strlen($name8) >0 ){
                echo "<div class='hours'> 7:00 AM to 8:00 AM : </div>";
            }
            if($i == 8 && strlen($name9) >0 ){
                echo "<div class='hours'> 8:00 AM to 9:00 AM : </div>";
            }
            if($i == 9 && strlen($name10) >0 ){
                echo "<div class='hours'> 9:00 AM to 10:00 AM : </div>";
            }
            if($i == 10 && strlen($name11) >0 ){
                echo "<div class='hours'> 10:00 AM to 11:00 AM : </div>";
            }
            if($i == 11 && strlen($name12) >0 ){
                echo "<div class='hours'> 11:00 AM to 12:00 PM : </div>";
            }
            if($i == 12 && strlen($name13) >0 ){
                echo "<div class='hours'> 12:00 PM to 1:00 PM : </div>";
            }
            if($i == 13 && strlen($name14) >0 ){
                echo "<div class='hours'> 1:00 PM to 2:00 PM :</div>";
            }
            if($i == 14 && strlen($name15) >0 ){
                echo "<div class='hours'> 2:00 PM to 3:00 PM :</div>";
            }
            if($i == 15 && strlen($name16) >0 ){
                echo "<div class='hours'> 3:00 PM to 4:00 PM :</div>";
            }
            if($i == 16 && strlen($name17) >0 ){
                echo "<div class='hours'> 4:00 PM to 5:00 PM :</div>";
            }
            if($i == 17 && strlen($name18) >0 ){
                echo "<div class='hours'> 5:00 PM to 6:00 PM :</div>";
            }
            if($i == 18 && strlen($name19) >0 ){
                echo "<div class='hours'> 6:00 PM to 7:00 PM :</div>";
            }
            if($i == 19 && strlen($name20) >0 ){
                echo "<div class='hours'> 7:00 PM to 8:00 PM :</div>";
            }
            if($i == 20 && strlen($name21) >0 ){
                echo "<div class='hours'> 8:00 PM to 9:00 PM :</div>";
            }if($i == 21 && strlen($name22) >0 ){
                echo "<div class='hours'> 9:00 PM to 10:00 PM :</div>";
            }
            if($i == 22 && strlen($name23) >0 ){
                echo "<div class='hours'> 10:00 PM to 11:00 PM :</div>";
            }
            if($i == 23 && strlen($name24) >0 ){
                echo "<div class='hours'> 11:00 PM to 12:00 AM :</div>";
            }
            echo "<div class='hourss'>$hours[$i] </div><br>";
        }

    }

    ?>
</div>
</body>
</html>

