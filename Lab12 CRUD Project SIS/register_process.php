<?php
require_once('connection.php');
if(isset($_POST['submit'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
        header("location:register.php");
    }
    else{
        $query = "INSERT INTO `users`(`uname`,`upass`) VALUES ('".$_POST['user']."', '".$_POST['pass']."'); ";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<h1 style=\"text-align:center;margin-top:100px\">A new user created successfully.";
            echo "<script>setTimeout(\"location.href = 'index.php';\",2000);</script>";
        }
        else{
            header('location:register.php');
        }
    }
}
else{
    echo "Something went wrong";
}
?>