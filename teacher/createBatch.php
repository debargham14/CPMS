<?php
    require_once('../session.php');
    if(isset($_POST['registerBatch'])) {
        
        $degree = $_POST['degree'];
        $dept = $_POST['department'];
        $currentSem = $_POST['currentSem'];
        $startYear = $_POST['startYear'];
        $endYear = $_POST['endYear'];
        $batchID = $degree . $dept . $startYear.$endYear;

       
        $sql = "INSERT INTO batch(batchID, degree, department, currentSem, startYear, endYear, teacher) VALUES('$batchID', '$degree', '$dept', '$currentSem', '$startYear', '$endYear', '$user_check')";
        $result = $db->query($sql);
        if(!$result) {
            echo "Sorry batch could not be created :(";
        }
        else {
            echo '<div class="alert alert-success" role="alert">
            New Course inserted successfully
        </div>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Notice | CPMS</title>
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
                <a href="./createCourse.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-map mr-3"></i>Add New Course</a>
                <a href="createBatch.php" class="list-group-item active waves-effect">
                    <i class="fas fa-users mr-3"></i>Add New Batch</a>
                <a href="createSession.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-tv mr-3"></i>Schedule Session</a>
                <a href="./createNotice.php" class="list-group-item list-group-item-action waves-effect">
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
                        Hello CMS User, Welcome to Class Management System !
                    </h5>
                </div>
            </div>
            <!-- Heading -->
        </div>

        <div class="container-fluid">
            <div class="row wow fadeIn">

                <div class="col-md-6">
                    <div class="card">
                        <!-- <div class="card-body"> -->
                        <!-- <h5 class="mb-1 mb-sm-0 pt-1">Batch Page</h5> -->

                        <form class="text-center border border-light p-5" action="createBatch2.php" method="post">

                            <p class="h4 mb-4">Create Batch</p>

                            <!-- Degree Name -->
                            <input type="text" id="defaultRegisterDegreeName" class="form-control"
                                placeholder="Degree Name" aria-describedby="defaultRegisterFormDegreeNameHelpBlock"
                                name="degree">
                            <small id="defaultRegisterFormDegreeNameHelpBlock" class="form-text text-muted mb-4">
                                Add initials (ex- BE for Bachelor of Engineering)
                            </small>

                            <!-- Department -->
                            <select class="browser-default custom-select mb-4" name="department">
                                <option>Department</option>
                                <option value="1">Computer Science and Engineering (CSE)</option>
                                <option value="2">Mechanical Engineering (ME)</option>
                                <option value="3">Sociology (Socio)</option>
                                <option value="4">Lawra Lesson (LL)</option>
                            </select>

                            <!-- Current Sem -->
                            <select class="browser-default custom-select mb-4" name="currentSem">
                                <option>Current Sem</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <!-- Start Year -->
                                    <input type="text" id="defaultRegisterFormStartYear" class="form-control"
                                        placeholder="Start Year" name="startYear">

                                    <!--            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">-->
                                    <!--                <input placeholder="Select date" type="text" id="example" class="form-control">-->
                                    <!--                <label for="example">Try me...</label>-->
                                    <!--                <i class="fas fa-calendar input-prefix"></i>-->
                                    <!--            </div>-->
                                </div>
                                <div class="col">
                                    <!-- End Year -->
                                    <input type="text" id="defaultRegisterFormEndYear" class="form-control"
                                        placeholder="End Year" name="endYear">

                                    <!--            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">-->
                                    <!--                <input placeholder="Select date" type="text" id="example" class="form-control">-->
                                    <!--                <label for="example">Try me...</label>-->
                                    <!--                <i class="fas fa-calendar input-prefix"></i>-->
                                    <!--            </div>-->
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button class="btn btn-info my-4 btn-block" type="submit" name="registerBatch"
                                id="registerBatch">Submit</button>

                            <!-- Terms of service -->
                            <p>By clicking
                                <em>Submit</em> you will register
                                <a href="" target="#">a new batch</a>

                        </form>
                        <!-- </div> -->


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