<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Output attributes</title>
</head>

<body>
    <form action="" id="numform" oninput="a.value=parseInt(x.value)+parseInt(y.value)">
        <input type="range" id="x" name="x" value="50"> + <input type="number" id="y" name="y" value="25">
        <output id="a" name="a" for="x+b"></output>
        <input type="submit">
    </form>
</body>
</html>