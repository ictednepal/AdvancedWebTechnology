<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Datalist</title>
</head>
<body>
    <table>
        <form action="">
            <tr>
                <td><label for="country">Country :</label></td>
                <td>
                    <input list="country">
                    <datalist id="country">
                        <option value="Nepal"></option>
                        <option value="China"></option>
                        <option value="India"></option>
                        <option value="Bhutan"></option>
                        <option value="Korea"></option>
                        <option value="Japan"></option>
                    </datalist>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>