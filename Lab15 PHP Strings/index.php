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

        //strtoupper
        $text = "heLlOsAnoTHimI";
        echo strtolower($text);
    ?>
</body>
</html>