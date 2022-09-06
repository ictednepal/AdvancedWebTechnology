<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading CSV File</title>
</head>
<body>
    <?php
        $file = "students.csv";
        $file_handler = fopen($file,"r");
        while(!feof($file_handler)){
            print_r(fgetcsv($file_handler));
        }
        fclose($file_handler);
    ?>
</body>
</html>