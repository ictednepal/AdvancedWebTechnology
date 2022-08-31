<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to HELLO BABY application</title>
    <style>
        table{
            margin: 0 auto;
        }
        th{
            text-align: right;
        }
    </style>
</head>
<body>
    <h2 align="center">Hello Baby</h2>
    <table>
        <form action="process.php" method="post">
            <tr>
                <th><label for="mname">Mother's Name :</label></th>
                <td><input type="text" id="mname" name="mother_name" placeholder="Enter mother's name" /></td>
            </tr>
            <tr>
                <th>Baby's DOB :</th>
                <td><input type="date" name="baby_dob" /></td>
            </tr>
            <tr>
                <th>Birth Time :</th>
                <td><input type="time" name="birth_time" /></td>
            </tr>
            <tr>
                <th>Gender :</th>
                <td>
                    <input type="radio" name="gender" value="1" /> Male
                    <input type="radio" name="gender" value="0" /> Female
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Submit" /> <input type="reset" value="Clear" /></td>
            </tr>
        </form>
    </table>
</body>
</html>