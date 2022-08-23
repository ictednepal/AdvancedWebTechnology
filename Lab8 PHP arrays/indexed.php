<?php
// $nums = array(12,23,45,69,78,46);
// foreach ($nums as $value) {
//     echo "Number is $value <br/>";
// }


// $name[0] = "Ram";
// $name[1] = "Sita";
// $name[2] = "Hari";
// $name[3] = "Gita";
// $name[4] = "Nita";
// $name[5] = "Mita";
// $name[6] = "Hina";
// foreach ($name as $value) {
//     echo "Name is $value <br/>";
// }



//Boardwork given to Ritu Shrestha
$salary = [100,200,300,400,500,600,700];
$a = count($salary);
$sum=0;
for ($i=0; $i <$a ; $i++) { 
    $sum+=$salary[$i];
}
$avg = $sum/$a;
echo "$avg";

?>