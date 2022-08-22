<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // $gender = "male";
    // if ($gender == "male") {
    //     echo "Hello Mister";
    // }

    // $num = 56;
    // if($num >0){
    //     echo $num." is +ve number";
    // }

    // $num = -56;
    // if($num >0){
    //     echo $num." is +ve number";
    // }
    // else{
    //     echo $num." is -ve number";
    // }


    // $per = 99;
    // if($per>=80){
    //     echo "Distinction";
    // }
    // else if($per>=60){
    //     echo "First";
    // }
    // else if($per>=45){
    //     echo "Second";
    // }
    // else if($per>=32){
    //     echo "Third";
    // }
    // else{
    //     echo "Failed";
    // }

    // $num = 2;
    // switch ($num) {
    //     case 1:
    //         echo "Sunday";
    //         break;
    //     case 2:
    //         echo "Monday";
    //         break;
    //     case 3:
    //         echo "Tuesday";
    //         break;
    //     case 4:
    //         echo "Wednesday";
    //         break;
    //     case 5:
    //         echo "Thursday";
    //         break;
    //     case 6:
    //         echo "Friday";
    //         break;
    //     case 7:
    //         echo "Saturday";
    //         break;

    //     default:
    //         echo "Invalid input";
    //         break;
    // }
    // letter = 'c';
    // switch ($letter) {
    //     case 'a':
    //         echo "Apple";
    //         break;
    //     case 'b':
    //         echo "Ball";
    //         break;
    //     case 'c':
    //         echo "Cat";
    //         break;     
    //     default:
    //         echo "Invalid input";
    //         break;
    // }$


    // $a = 1;
    // while ($a <= 10) {
    //     echo $a."<br/>";
    //     $a++;
    // }

    // $a =10;
    // do {
    //     echo $a."<br/>";
    //     $a--;
    // } while ($a >= 1);

    // for ($i=1; $i<=10; $i++) { 
    //     echo $i."<br/>";
    // }

    // $names = array('Ram','Sita','Hari','Gita','Nita','Mita');
    // $num = count($names);
    // foreach ($names as $name) {
    //     echo $name."<br/>";
    // }
    // echo $num;

    // for ($i=1; $i<=10; $i++) { 
    //     if($i==4){
    //         break;
    //     }
    //     echo $i."<br/>";
    // }

    // for ($i=1; $i<=10; $i++) { 
    //     if($i==4){
    //         continue;
    //     }
    //     echo $i."<br/>";
    // }

    // $age =5;
    // $result = $age>17?"Voter":"Non-voter";
    // echo $result;

    $age = 5;
    if ($age >= 18)
        goto voter;
    echo "Non-voter";
    return;
    voter:
    echo "Voter";
    ?>
</body>

</html>