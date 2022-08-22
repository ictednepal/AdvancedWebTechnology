<?php
// function add($a,$b){
    //     return($a+$b);
    // }
    // $x=56;
    // $y=89;

    // $result = add($x,$y);
    // // echo "The result is $result";
    // echo "$result is the result.";


    // function addMarks($marks){
    //     $sum = 0;
    //     foreach ($marks as $value) {
    //         $sum+=$value; //sum = sum + value
    //     }
    //     return $sum;
    // }
    // $ramThapa = [45,67,89,99,56,87];
    // $sumMarks = addMarks($ramThapa);
    // echo "The total marks is = ".$sumMarks;


    class Student{
        public $name;
        public $address;

        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_address($address){
            $this->address = $address;
        }
        function get_address(){
            return $this->address;
        }
    }
    $stu1 = new Student(); //creating an object
    $stu1->set_name("Ram");
    $stu1->set_address("Kathmandu");
    echo "The name is =".$stu1->get_name();
    echo "<br/>";
    echo "The address is =".$stu1->get_address();
