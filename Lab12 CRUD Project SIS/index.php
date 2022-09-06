<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information System - Login Please</title>
</head>
<body>
    <h2 style="text-align:center; text-transform:uppercase">student information system</h2>
    <table align="center">
        <form action="login_process.php" method="POST">
            <tr>
                <td><label for="username">Username :</label></td>
                <td><input type="text" id="username" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" id="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">Log In</button>
                    <button type="reset">Clear</button>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>