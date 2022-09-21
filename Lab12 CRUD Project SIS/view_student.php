<?php
require_once('connection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM `students` WHERE `s_id` = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

session_start();
if (isset($_SESSION['login_user'])) {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <title>Student Information System</title>
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

        <div class="container-fluid">
            <div class="row">
                <div class="col mt-2">
                    <a href="add_student.php" role="button" class="btn btn-success rounded-0 text-light text-capitalize">add a new student</a>
                </div>
            </div>
            <h4 class="text-center text-capitalize mt-3 mb-3">viewing the details of <span class="text-info fw-bold"><?php echo $row['s_name']; ?></span></h4>
            <div class="col-md-4 offset-md-4">
                <table class="table table-bordered table-striped border border-dark border-2">
                    <tbody>
                        <tr>
                            <th scope="row">SNo :</th>
                            <td><?php echo $row['s_id']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Name :</th>
                            <td><?php echo $row['s_name']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Address :</th>
                            <td><?php echo $row['s_address']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Class :</th>
                            <td><?php echo $row['s_class']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email :</th>
                            <td><?php echo $row['s_email']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Contact no :</th>
                            <td><?php echo $row['s_con_no']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">College roll no :</th>
                            <td><?php echo $row['s_crn']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Registration no :</th>
                            <td><?php echo $row['s_reg_no']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Date of birth :</th>
                            <td><?php echo $row['s_dob']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Gender :</th>
                            <td><?php echo ($row['s_gender'] == 1) ? "Male" : "Female"; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Guardian's name :</th>
                            <td><?php echo $row['s_guar_name']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Photo :</th>
                            <td>
                                <?php
                                $s_photo = $row['s_photo'];
                                if (!empty($s_photo) && file_exists("images/" . $s_photo)) {
                                ?>
                                    <img src="images/<?php echo $s_photo; ?>" width="75" />
                                <?php
                                } else {
                                    echo "No Photo Available";
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-primary text-uppercase" href="#" role="button">Edit</a>
                <a class="btn btn-warning text-uppercase" href="welcome.php" role="button">back to students list</a>
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
mysqli_free_result($result);
?>