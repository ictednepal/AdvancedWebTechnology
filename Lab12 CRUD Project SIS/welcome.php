<?php
require_once('connection.php');
$sql = "SELECT * FROM `students` ORDER By `s_name` DESC";
$result = $conn->query($sql);

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
                <div class="col mt-2">
                    <img src="images/sislogo.png" class="img-fluid mx-auto d-block" width="20%" alt="Logo Here">
                </div>
                <div class="col mt-2">
                    <button type="button" class="btn btn-info float-end rounded-0 text-light text-capitalize">number of students :
                        <?php echo $result->num_rows; ?></button>
                </div>
            </div>
            <h4 class="text-center text-uppercase mt-3 mb-3 fw-bolder">student information system</h4>
            <?php
            if ($result->num_rows > 0) {
            ?>
                <table class="table table-bordered table-striped border border-dark border-2 text-center">
                    <thead>
                        <tr>
                            <th scope="col">SID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Class</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">CRN</th>
                            <th scope="col">Reg No:</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Gender</th>
                            <th scope="col">GuarName</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $row['s_id']; ?></th>
                                <td><?php echo $row['s_name']; ?></td>
                                <td><?php echo $row['s_address']; ?></td>
                                <td><?php echo $row['s_class']; ?></td>
                                <td><?php echo $row['s_email']; ?></td>
                                <td><?php echo $row['s_con_no']; ?></td>
                                <td><?php echo $row['s_crn']; ?></td>
                                <td><?php echo $row['s_reg_no']; ?></td>
                                <td><?php echo $row['s_dob']; ?></td>
                                <td><?php echo ($row['s_gender'] == 1) ? "Male" : "Female"; ?></td>
                                <td><?php echo $row['s_guar_name']; ?></td>
                                <td><?php
                                    $s_photo = $row['s_photo'];
                                    if (!empty($s_photo) && file_exists("images/" . $s_photo)) {
                                    ?>
                                        <img src="images/<?php echo $s_photo; ?>" width="75">
                                    <?php
                                    } else {
                                        echo "No image Preview";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-success btn-sm" href="view_student.php?id=<?php echo $row['s_id']; ?>" title="View : <?php echo $rFow['s_name']; ?>">View</a> &nbsp;
                                    <a type="button" class="btn btn-primary btn-sm" href="edit_student.php?id=<?php echo $row['s_id']; ?>" title="Edit : <?php echo $row['s_name']; ?>">Edit </a> &nbsp;
                                    <a type="button" class="btn btn-danger btn-sm" href="delete_student.php?id=<?php echo $row['s_id']; ?>" title="Delete : <?php echo $row['s_name']; ?>" onClick="return confirm('Are you sure to delete  <?php echo $row['s_name']; ?>');">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            <?php
            } else {
                echo "<h2 class=\"text-center\">Sorry !!! No student record found in the System</h2>";
            }
            mysqli_free_result($result);
            ?>
        </div>




        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>
<?php
} else {
    header("location:index.php");
}
?>