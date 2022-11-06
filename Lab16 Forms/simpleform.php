<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Forms</title>
</head>
<body>
    <table>
        <form action="" method="get" autocomplete="on">
            <tr>
                <td><label for="name">Name :</label></td>
                <td><input type="text" name="name" id="name" autofocus required placeholder="Enter your name"></td>
            </tr>
            <tr>
                <td><label for="address">Address :</label></td>
                <td><input type="text" name="address" id="address" width="500" height="50"></td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="email" name="email" id="email" autocomplete="off"></td>
            </tr>
            <tr>
                <td><label for="age">Age :</label></td>
                <td><input type="number" name="age" id="age" min="1" max="29"></td>
            </tr>
            <tr>
                <td><label for="effi">Efficiency :</label></td>
                <td><input type="range" name="effi" id="effi" min="1" max="100"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="image" src="abc.png" alt="myimage" width="20" height="20"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </form>
    </table>
</body>
</html>