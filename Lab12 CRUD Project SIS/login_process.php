<?php
session_start();
require_once('connection.php');
if(isset($_POST['submit'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
        header("location:index.php");
    }
    else{
        $query = "SELECT * FROM `users` where uname ='".$_POST['user']."' and upass ='".$_POST['pass']."'  ";
        $result = mysqli_query($conn,$query);
        if(mysqli_fetch_assoc($result)){
            $_SESSION['login_user'] = $_POST['user'];
            header("location:welcome.php");
        }
        else{
            header("location:index.php?Invalid=Invalid Credentials");
        }
    }
}
?>