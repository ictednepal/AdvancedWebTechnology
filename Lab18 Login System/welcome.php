<?php
session_start();
if (isset($_SESSION['login_user'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome Page</title>
    </head>

    <body>
        <h1>Student Login System</h1>
        <h2><?php echo ucwords ($_SESSION['login_user']); ?></h2>
        <h2><a href="logout.php?Logout">Logout</a></h2>
    </body>

    </html>
<?php
} 
else {
    header("location:index.php");
}
?>