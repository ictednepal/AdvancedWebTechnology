<?php
require_once('connection.php');

session_start();
if (isset($_SESSION['login_user'])) {

    if (isset($_POST['btnSubmit'])) {
        if (!empty($_FILES['s_photo']['name'])) {
            $s_photo = "sis_" . rand(0, 9999999999) . "_" . $_FILES['s_photo']['name'];
            $mainPath = "images/" . $s_photo;
            $tempPath = $_FILES['s_photo']['tmp_name'];
            move_uploaded_file($tempPath, $mainPath);
        } else {
            $s_photo = '';
        }
        $stname = $_POST['name'];
        $staddress = $_POST['address'];
        $stclass = $_POST['class'];
        $stemail = $_POST['email'];
        $stcontactno = $_POST['contactno'];
        $stcrn = $_POST['crn'];
        $stregno = $_POST['regno'];
        $stdob = $_POST['dob'];
        $stgender = $_POST['gender'];
        $stguardiansname = $_POST['guardiansname'];

    
        $sql = "INSERT INTO `students`(`s_name`, `s_address`, `s_class`, `s_email`, `s_con_no`, 
        `s_crn`, `s_reg_no`, `s_dob`, `s_gender`, `s_guar_name`, `s_photo`) 
        VALUES ('$stname','$staddress','$stclass','$stemail','$stcontactno','$stcrn','$stregno',
        '$stdob','$stgender','$stguardiansname','$s_photo')";
        $query = $conn->query($sql);
        if ($query) {
            echo "Student Record Inserted Successfully ";
        } else {
            echo "Ooops ! Error In System !!!";
        }
    }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <title>Adding a new Student</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SIS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="welcome.php">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item text-light">Welcome <?php echo ucwords($_SESSION['login_user']); ?></li>
                        <li>&nbsp;</li>
                        <li class="nav-item text-light"><a href="logout.php?Logout" class="link-warning text-decoration-none">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form class="mt-3" method="POST" enctype="multipart/form-data">
                        <h4 class="text-center">Adding a new student</h4>
                        <div class="row">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Full name" aria-label="Full name">
                            </div>
                            <div class="col">
                                <input type="text" name="address" class="form-control" placeholder="Address" aria-label="Address">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" name="class" class="form-control" placeholder="Class" aria-label="Class">
                            </div>
                            <div class="col">
                                <input type="text" name="email" class="form-control" placeholder="Email" aria-label="Email">
                            </div>
                            <div class="col">
                                <input type="text" name="contactno" class="form-control" placeholder="Contact no" aria-label="Contact no">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" name="crn" class="form-control" placeholder="College roll no" aria-label="College roll no">
                            </div>
                            <div class="col">
                                <input type="text" name="regno" class="form-control" placeholder="Registration no" aria-label="Address">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" name="dob" class="form-control" placeholder="Enter Date of birth" aria-label="Date of birth" 
                                onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
                            </div>
                            <div class="col mt-1">
                                Gender :
                                <input class="form-check-input" type="radio" name="gender" value="1" checked> Male
                                <input class="form-check-input" type="radio" name="gender" value="0"> Female
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" name="guardiansname" class="form-control" placeholder="Guardian's name" aria-label="Guardian's name">
                            </div>
                            <div class="col">
                                <input type="file" name="s_photo" class="form-control" placeholder="Upload Photo" aria-label="Photo">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="submit" name="btnSubmit" class="btn btn-success text-uppercase" value="Submit" role="button">
                                <input type="reset" class="btn btn-primary text-uppercase" value="Reset" role="button">
                                <a class="btn btn-warning text-uppercase" href="welcome.php" role="button">back to students list</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>





        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>
<?php
} else {
    header("location:index.php");
}
//mysqli_free_result($query);
?>