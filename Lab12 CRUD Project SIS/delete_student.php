<?php
require_once('connection.php');
$id = $_GET['id'];
$sql = "DELETE FROM `students` WHERE `s_id`='$id' ";
$result = $conn->query($sql);

session_start();
if (isset($_SESSION['login_user'])) {
    if($result){
        echo "<h1 style=\"text-align:center;margin-top:100px\">A record has been deleted successfully.";
        echo "<script>setTimeout(\"location.href = 'welcome.php';\",2000);</script>";
    }
    else{
        echo "<h1 style=\"text-align:center;margin-top:100px\">Something went wrong.";
        echo "<script>setTimeout(\"location.href = 'welcome.php';\",2000);</script>";
    }
} else {
    header("location:index.php");
}
