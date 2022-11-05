<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with PHP strings</title>
</head>

<body>
    <?php
    //strlen
    // $text = "hello sanothimi";
    // echo strlen($text);

    // $username = "ram";
    // $password = "ram@1234";
    // if($username=="ram" && $password=="ram@1234" && strlen($password)>=8){
    //     echo "Hello ".$username;
    // }
    // else{
    //     echo "Something went wrong";
    // }


    //strstr
    // $text = "hellosanothimi";
    // if(strstr($text,"sa")){
    //     echo "Text exist";
    // }
    // else{
    //     echo "Something went wrong";
    // }

    //strpos
    // $text = "hellosanothimi";
    // echo strpos($text,"th");

    //substr
    // $text = "hellosanothimi";
    // $trimone = substr($text,3);
    // $trimtwo = substr($text,3,3);
    // echo $trimone."<br>";
    // echo $trimtwo;

    //printf
    // printf("Hello Sanothimi");
    // printf("The number is %d",67);
    // printf("The octal equivalent is %o",155);
    // printf("The letter is %c",65);
    // printf("The hex lowercase is %x",478);
    // printf("The hex uppercase is %y",546);

    //strtoupper
    // $text = "hellosanothimi";
    // echo strtoupper($text);

    //strtolower
    // $text = "heLlOsAnoTHimI";
    // echo strtolower($text);

    //capitalize each string
    // $name = "ram thapa";
    // echo ucwords($name);

    //capitalize first character
    // $quote = "this is my classroom, please be quite.";
    // echo ucfirst($quote);

    //working with printf()
    // printf("Hello Nepal");
    // printf("The number is %d",35);
    // printf("The octal equivalent is %o",155);
    // printf("The letter is %c",65);

    // $number = 203;
    // printf("Decimal: %d<br/>", $number);
    // printf("Binary: %b<br/>", $number);
    // printf("Double: %f<br/>", $number);
    // printf("Octal: %o<br/>", $number);
    // printf("String: %s<br/>", $number);
    // printf("hex (lower): %x<br/>", $number);
    // printf("Hex(upper): %X<br/>", $number);

    // $red = 204;
    // $green = 112;
    // $blue = 204;
    // printf("#%X%X%X",$red,$green,$blue);

    // $products = array(
    //     "Momo" => "220",
    //     "Chowmin" => "180",
    //     "Ice Cream" => "120"
    // );
    // echo "<pre>";
    // printf("%-20s%20s\n", "Name", "Price");
    // printf("%-40s\n","");
    // foreach($products as $key => $val){
    //     printf("%-20s%20.2f\n",$key, $val);
    // }
    // echo "<pre/>"

    // $cash = sprintf("%.3f",21.56894206); // sprintf() to round a double
    // echo "You have \$$cash to spend.";

    // $test = "sanothimi";
    // echo $test[0]."<br>";
    // echo $test[4];

    // $string = "One line\n";
    // $string .= "another line\n";
    // $string .= "a third line\n";
    // echo nl2br($string); // the nl2br function conveniently converts every new line into an HTML break.


    // $string = "Given a ling line, wordwrap() is usefule as a means of ";
    // $string .= " breaking it into a column and thereby making it easier to read";
    // echo wordwrap($string);

    $start_date = "2012-02-19";
    $date_array = explode("-", $start_date);
    // $date_array[0] = "2012";
    // $date_array[1] = "02";
    // $date_array[2] = "19";
    echo $date_array[0] . "-" . $date_array[1] . "-" . $date_array[2];
    ?>
</body>

</html>