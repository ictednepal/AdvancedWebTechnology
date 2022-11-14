<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLS - LOGIN</title>
</head>
<body>
    <h1>Student Login System - Please Login</h1>
    <table>
        <form action="login_process.php" method="POST">
            <tr>
                <td><label for="username">Username :</label></td>
                <td><input type="text" name="user" id="username" placeholder="Enter username"></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" name="pass" id="password" placeholder="Enter password"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <button type="submit" name="submit">Login</button>
                </td>
            </tr>
            <?php
                if(@$_GET['Invalid']==true){
                    echo $_GET['Invalid'];
                }
            ?>
        </form>
    </table>
</body>
</html>