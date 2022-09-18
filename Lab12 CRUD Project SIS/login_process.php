<?php
session_start();
require_once('dbconnect.php');
if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
        header("location:index.php");
    }
    else{
        $query = "SELECT * FROM `tbl_users` WHERE user = '".$_POST['username']."' and pass = '".$_POST['password']."' ";
        $result = mysqli_query($conn,$query);
        $_SESSION['login_user'] = $_POST['username'];
        if(mysqli_fetch_assoc($result)){
            header("location:welcome.php");
        }
        else{
            header("location:index.php?Invalid=Invalid Credentials");
        }
    }
}
?>