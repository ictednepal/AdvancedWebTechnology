<?php
    // $student = array(
    //     "ram" => array(
    //         "address" => "Kathmandu",
    //         "marks" => 58,
    //         "email" => "ram@gmail.com"
    //     ),
    //     "sita" => array(
    //         "address" => "Bhaktapur",
    //         "marks" => 78,
    //         "email" => "sita@gmail.com"
    //     ),
    //     "hari" => array(
    //         "address" => "Lalitpur",
    //         "marks" => 99,
    //         "email" => "hari@gmail.com"
    //     ),
    // );

    // echo "Hari lives in ".$student["hari"]["address"];

    $student = array(
        array(
            "address" => "Kathmandu",
            "marks" => 58,
            "email" => "ram@gmail.com"
        ),
        array(
            "address" => "Bhaktapur",
            "marks" => 78,
            "email" => "sita@gmail.com"
        ),
        array(
            "address" => "Lalitpur",
            "marks" => 99,
            "email" => "hari@gmail.com"
        ),
    );

    // echo $student[2]["address"];
    $keys = array_keys($student);
    for ($i=0; $i < count($student) ; $i++) { 
        echo "<br/>";
        foreach ($student[$keys[$i]] as $key => $value) {
            echo $value . "<br/>";
        }
    }
?>