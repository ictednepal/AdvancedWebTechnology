<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing CSV file</title>
</head>
<body>
    <?php
        $names = array(
            "Ram,25,Kathmandu,ram@gmail.com",
            "Sita,22,Pokhara,sita@gmail.com",
            "Hari,25,Nepalgunj,hari@gmail.com",
            "Gita,20,Kathmandu,gita@yahoomail.com",
        );

        $file = fopen("students.csv","w");
        foreach ($names as $line) {
            fputcsv($file,explode(',',$line));
        }
        fclose($file);
    ?>
</body>
</html>