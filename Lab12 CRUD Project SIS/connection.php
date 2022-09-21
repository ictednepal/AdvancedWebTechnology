<?php
$conn = mysqli_connect('localhost','root','','db_sis');
if(!$conn){
    die('Please check your connection'.mysqli_errno($conn));
}
?>