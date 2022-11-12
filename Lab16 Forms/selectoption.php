<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select option</title>
</head>

<body>
    <table>
        <form action="" name="myform">
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name" placeholder="Enter name.."></td>
            </tr>
            <tr>
                <td><label for="country">Country:</label></td>
                <td>
                    <select name="country" id="country">
                        <option value="0" selected>Choose your country</option>
                        <option value="1">Nepal</option>
                        <option value="2">India</option>
                        <option value="3">China</option>
                        <option value="4">Japan</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </form>
        <fieldset form="myform">
            <legend>Pesonal</legend>
            <label for="name">Name:</label></td>
            <input type="text" name="name" id="name" placeholder="Enter name..">
        </fieldset>
    </table>
</body>

</html>