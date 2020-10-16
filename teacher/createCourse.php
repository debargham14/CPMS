<?php
    // require_once('../config.php');
    require_once('../session.php');
    $done = 0;
    $name = $firstName.' '.$lastName;
    
    if(isset($_POST["courseRegister"])) {
        // echo "Data set is received from course entry";
        $courseName = $_POST["courseName"];
        $courseYear = $_POST["courseYear"];
        $courseID   = $_POST["courseID"];
        
        
        $sql1 = "INSERT INTO course (courseName, courseYear, courseID, createdBy) VALUES ('$courseName', '$courseYear', '$courseID', '$user_check')";
        $stmtinsert = $db->query($sql1);
        

        if($stmtinsert) {
            // echo "Success! Row ID: {$db->insert_id}";
            $done = 1;
        }
        else {
            die("Error: {$db->errno} : {$db->error}");
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Course | CPMS</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="../assets/css/mdb.min.css" rel="stylesheet" />
    <!-- Your custom styles (optional) -->
    <link href="../assets/css/style.min.css" rel="stylesheet" />
</head>

<body class="grey lighten-3">
    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="navbar-brand waves-effect">
                    <strong class="blue-text">Teacher Portal</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left -->
                    <ul class="navbar-nav mr-auto"></ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="" class="nav-link border border-light rounded waves-effect" target="_blank">
                                <i class="fab fa-github mr-2"></i>CMS User
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">
            <a class="waves-effect">
                <img src="../assets/newimg/jucmslogo.png" class="img-fluid" alt="" />

            </a>

            <div class="list-group list-group-flush">
                <a href="./dashboard.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>Profile</a>
                <a href="./createCourse.php" class="list-group-item active waves-effect">
                    <i class="fas fa-map mr-3"></i>Add New Course</a>
                <a href="createBatch.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-users mr-3"></i>Add New Batch</a>
                <a href="createSession.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-tv mr-3"></i>Schedule Session</a>
                <a href="./notice.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-map mr-3"></i>Notice</a>
                <a href="./attendance.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-money-bill-alt mr-3"></i>Attendance</a>
            </div>
        </div>
        <!-- Sidebar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-6">
        <div class="container-fluid mt-5">
            <!-- Heading -->
            <div class="card mb-4 wow fadeIn">
                <!--Card content-->
                <div class="card-body d-sm-flex justify-content-between">
                    <h5 class="mb-1 mb-sm-0 pt-1">
                        Hello <?php echo $firstName . ' ' . $lastName?>, Welcome to Class Management System !
                    </h5>
                </div>
            </div>
            <!-- Heading -->
        </div>

        <div class="container-fluid">
            <div class="row wow fadeIn">

                <div class="col-md-6">
                    <!-- <div class="card"> -->
                    <!-- <div class="card-body"> -->
                    <!-- Default form register -->
                    <form class="text-center border border-light p-5" action="" method="post">

                        <p class="h4 mb-4">Register Course</p>

                        <!-- Course Name -->
                        <input type="text" name="courseName" id="defaultRegisterCourseYearPassword" class="form-control"
                            placeholder="Course Name" aria-describedby="defaultRegisterFormCourseYearHelpBlock">
                        <small id="defaultRegisterFormCourseYearHelpBlock" class="form-text text-muted mb-4">
                            Enter the complete course name
                        </small>

                        <div class="form-row mb-4">
                            <div class="col">
                                <!-- Course Year -->
                                <input type="text" name="courseYear" id="defaultRegisterFormCourseYear"
                                    class="form-control" placeholder="Course Year (Semester No.)">
                            </div>
                            <div class="col">
                                <!-- Dummy -->
                                <input type="text" id="defaultRegisterFormDummy" name="courseID" class="form-control"
                                    placeholder="Generated Course ID">
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button class="btn btn-info my-4 btn-block" name="courseRegister" type="submit">Submit</button>

                        <!-- Terms of service -->
                        <p>By clicking
                            <em>Sign up</em> you agree to your
                            <a href="" target="_blank">code of conduct</a>

                    </form>
                    <!-- Default form register -->
                    <!-- </div> -->


                    <!-- </div> -->
                </div>

                <div class="col-md-6">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="mb-1 mb-sm-0 pt-1">Registered Courses</h5>
                            <span class="badge badge-pill badge-default"></span>
                        </div>

                        <?php 
                        if ($done == 1) {
                            echo '<div class="alert alert-success" role="alert">
                                    New Course inserted successfully
                                </div>';
                                $done = 0;
                        }
                        ?>


                        <!-- Table  -->
                        <table class="table table-hover">
                            <!-- Table body -->
                            <tbody>

                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Course ID</th>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Created By</th>
                                    </tr>
                                </thead>

                                <!-- Fetching registered courses from db -->

                                <?php
                                    $sql2 = "SELECT * from course WHERE createdBy = '$user_check'";
                                    
                                        $result = $db->query($sql2);
                                        if($result && $result->num_rows > 0) {
                                            $i = 1;    
                                            while($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<th scope = 'row'>" . $i . "</th>";
                                                    echo "<td>" . $row['courseID'] . "</th>";
                                                    echo "<td>" . $row['courseName'] . "</td>";
                                                    echo "<td>" . $name. "</td>";
                                                    echo "</tr>";
                                                    $i = $i + 1;
                                            }
                        
                                        }
                                        else {
                                            
                                            echo '<div class="alert alert-warning" role="alert">
                                                Sorry, No courses available
                                                </div>';
                                        }

                                        $db->close();
                        
                                ?>

                            </tbody>
                            <!-- Table body -->
                        </table>
                        <!-- Table  -->
                    </div>
                </div>
                <!-- row ends -->
            </div>
            <!-- container ends -->
        </div>

        <div class="container-fluid">
            <div class="row"></div>
        </div>
    </main>
    <!--Main layout-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../assets/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    </script>
</body>

</html>