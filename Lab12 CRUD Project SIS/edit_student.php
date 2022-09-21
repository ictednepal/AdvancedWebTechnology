<?php
require_once('connection.php');


session_start();
if (isset($_SESSION['login_user'])) {

    if (isset($_POST['btnSubmit'])) {
        $id = $_POST['id'];
        $imgStatus = $_POST['imgStatus'];
        if ($imgStatus == 1) {
            $result  = $conn->query("SELECT * FROM `students` WHERE `s_id` = '$id' ");
            $row = $result->fetch_assoc();
            $s_photo = $row['s_photo'];
        } else {
            if (!empty($_FILES['s_photo']['name'])) {
                $s_photo = "sis_" . rand(0, 99999999) . "_" . $_FILES['s_photo']['name'];
                move_uploaded_file($_FILES['s_photo']['tmp_name'], "images/" . $s_photo);
            } else {
                $s_photo = '';
            }
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
        $sql =
            "
            UPDATE `students` SET
            `s_name`='$stname',
            `s_address`='$staddress',
            `s_class`='$stclass',
            `s_email`='$stemail',
            `s_con_no`='$stcontactno',
            `s_crn`='$stcrn',
            `s_reg_no`='$stregno',
            `s_dob`='$stdob',
            `s_gender`='$stgender',
            `s_guar_name`='$stguardiansname',
            `s_photo`='$s_photo'
            WHERE `s_id`='$id'
            ";
        $query = $conn->query($sql);
        if ($query) {
            echo "Student Record Updated Successfully ";
?>
            <meta http-equiv="refresh" content="2;URL='welcome.php'">
    <?php
        } else {
            echo "Ooops ! Error In System !!!";
        }
    }

    $id = $_GET['id'];

    if (isset($_GET['deleteImage'])) {
        $s_photo = $_GET['deleteImage'];

        if (!empty($s_photo) && file_exists("images/" . $s_photo)) {
            unlink("images/" . $s_photo);
            $sql =
                "
            UPDATE
                `student`
            SET
                `s_photo` = ''
            WHERE 
                `id` = '$id'
            ";
            $conn->query($sql);
        }
    }


    $id = $_GET['id'];
    $sql = "SELECT * FROM `students` WHERE `s_id` = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
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
            <div class="col-md-6 offset-md-3">

                <form action="" method="POST" enctype="multipart/form-data">
                    <!-- <table class="table table-bordered table-striped border border-dark border-2">
                        <tbody>
                            <tr>
                                <th scope="row">Name :</th>
                                <td><input type="text" name="name" value="<?php echo $row['s_name']; ?>"></td>
                            </tr>
                            <tr>
                                <th scope="row">Address :</th>
                                <td><input type="text" name="name" value="<?php echo $row['s_address']; ?>"></td>
                            </tr>
                            <tr>
                                <th scope="row">Class :</th>
                                <td><input type="text" name="name" value="<?php echo $row['s_class']; ?>"></td>
                            </tr>
                            <tr>
                                <th scope="row">Email :</th>
                                <td><input type="text" name="name" value="<?php echo $row['s_email']; ?>"></td>
                            </tr>
                            <tr>
                                <th scope="row">Contact no :</th>
                                <td><input type="text" name="name" value="<?php echo $row['s_con_no']; ?>"></td>
                            </tr>
                            <tr>
                                <th scope="row">College roll no :</th>
                                <td><input type="text" name="name" value="<?php echo $row['s_crn']; ?>"></td>
                            </tr>
                            <tr>
                                <th scope="row">Registration no :</th>
                                <td><input type="text" name="name" value="<?php echo $row['s_reg_no']; ?>"></td>
                            </tr>
                            <tr>
                                <th scope="row">Date of birth :</th>
                                <td><input type="text" name="name" value="<?php echo $row['s_dob']; ?>"></td>
                            </tr>
                            <tr>
                                <th scope="row">Gender :</th>
                                <td>
                                    <input type="radio" name="gender" value="1" <?php if ($row['s_gender'] == 1) {
                                                                                    echo "checked";
                                                                                } ?>> Male
                                    <input type="radio" name="gender" value="0" <?php if ($row['s_gender'] == 0) {
                                                                                    echo "checked";
                                                                                } ?>> Female
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Guardian's name :</th>
                                <td><input type="text" name="name" value="<?php echo $row['s_guar_name']; ?>"></td>
                            </tr>
                            <tr>
                                <th scope="row">Photo :</th>
                                <td>
                                    <?php
                                    $s_photo = $row['s_photo'];
                                    if (!empty($s_photo) && file_exists("images/" . $s_photo)) {
                                    ?>
                                        <img src="images/<?php echo $s_photo; ?>" width="75">
                                        <a href="edit_student.php?id=<?php echo $_GET['id']; ?>&deleteImage=<?php echo $row['s_photo']; ?>" title="Delete Image" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure to delete the Image ? ')">Delete</a>
                                        <input type="hidden" name="imgStatus" value="1">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="file" name="s_photo">
                                        <input type="hidden" name="imgStatus" value="0">
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                    <input type="submit" name="btnSubmit" class="btn btn-success text-uppercase" value="update" role="button">
                                    <a class="btn btn-warning text-uppercase" href="welcome.php" role="button">back to students list</a>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->

                    <table cellpadding="10" cellspacing="1" border="1" width="1000">
                        <tr>
                            <th>Name</th>
                            <td><input type="text" name="name" value="<?php echo $row['s_name']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><input type="text" name="address" value="<?php echo $row['s_address']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Class</th>
                            <td><input type="text" name="class" value="<?php echo $row['s_class']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input type="text" name="email" value="<?php echo $row['s_email']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Contact No</th>
                            <td><input type="text" name="contactno" value="<?php echo $row['s_con_no']; ?>"></td>
                        </tr>
                        <tr>
                            <th>CRN</th>
                            <td><input type="text" name="crn" value="<?php echo $row['s_crn']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Reg No:</th>
                            <td><input type="text" name="regno" value="<?php echo $row['s_reg_no']; ?>"></td>
                        </tr>
                        <tr>
                            <th>DOB</th>
                            <td><input type="date" name="dob" value="<?php echo $row['dob']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>
                                <input type="radio" name="gender" value="1" <?php if ($row['s_gender'] == 1) {
                                                                                echo "checked";
                                                                            } ?>> Male
                                <input type="radio" name="gender" value="0" <?php if ($row['s_gender'] == 0) {
                                                                                echo "checked";
                                                                            } ?>> Female
                            </td>
                        </tr>
                        <tr>
                            <th>Guardians Name</th>
                            <td><input type="text" name="guardiansname" value="<?php echo $row['s_guar_name']; ?>"></td>
                        </tr>
                        <tr>
                            <th>Photo</th>
                            <td>
                                <?php
                                $s_photo = $row['s_photo'];
                                if (!empty($s_photo) && file_exists("img/" . $s_photo)) {
                                ?>
                                    <img src="images/<?php echo $s_photo; ?>" width="75">
                                    <a href="edit_student.php?id=<?php echo $_GET['id']; ?>&deleteImage=<?php echo $row['s_photo']; ?>" title="Delete Image" onClick="return confirm('Are you sure to delete the Image ? ')">Delete</a>
                                    <input type="hidden" name="imgStatus" value="1">
                                <?php
                                } else {
                                ?>
                                    <input type="file" name="s_photo">
                                    <input type="hidden" name="imgStatus" value="0">
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                                <input type="submit" value="UPDATE" name="btnSubmit">
                                <input type="reset" value="CANCEL">
                            </td>
                        </tr>
                    </table>
                </form>




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