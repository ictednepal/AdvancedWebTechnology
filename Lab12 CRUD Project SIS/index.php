<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Welcome to Student Information System</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <!-- Login form -->
                <div class="d-flex align-items-center justify-content-center vh-100">
                <form action="login_process.php" method="POST">
                    <img src="images/sisLogo.png" class="img-fluid mx-auto d-block" width="50%" alt="Logo Here">
                    <h4 class="text-center text-capitalize">student information system</h4>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="username" name="user" placeholder="Username...">
                       </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="pass" placeholder="Password...">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary text-uppercase">Submit</button>
                    <a class="btn btn-success" href="register.php" role="button">Register</a>
                    <?php
                    if(@$_GET['Invalid'] == true){
                    ?>
                        <div class="alert alert-danger text-center" role="alert"><?php echo $_GET['Invalid']; ?></div>
                    <?php
                    }
                    ?>
                </form>
                </div>
                <!-- /Login form -->
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>