<?php
// $marks = array(
//     "Ram"=>99,
//     "Sita"=>66,
//     "Hari"=>55
// );

// echo "Marks of Ram is =".$marks["Ram"];


$address['ram'] = "Kathmandu";
$address['sita'] = "Bhakrapur";
$address['hari'] = "Lalitpur";

// echo "Sita lives in ".$address["sita"];
foreach ($address as $key => $value) {
    echo $key." lives in ".$value."<br/>";
}


?>