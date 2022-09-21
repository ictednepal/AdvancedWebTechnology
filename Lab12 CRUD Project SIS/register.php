<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Registering a new User</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <!-- Register form -->
                <div class="d-flex align-items-center justify-content-center vh-100">
                    <form action="register_process.php" method="POST">
                        <h4 class="text-center text-capitalize">adding a new user</h4>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="username" name="user" placeholder="Enter a username">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="pass" placeholder="Enter a password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success text-uppercase">create</button>
                        <a class="btn btn-primary" href="index.php" role="button">Go to Login Page</a>
                    </form>
                </div>
                <!-- /Register form -->
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>