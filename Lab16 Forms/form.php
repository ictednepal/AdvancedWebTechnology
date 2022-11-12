<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form attributes</title>
</head>

<body>
    <table>
        <form action="" name="myform">
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name" placeholder="Enter name.." ></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Submit"></td>
            </tr>

        </form>
        <textarea name="address" id="" cols="30" rows="10" form="myform" placeholder="Enter address...">

        </textarea>
    </table>

</body>

</html>