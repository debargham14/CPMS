<?php
    require_once('../session.php');
    $email = $user_check;
    $name = $firstName . ' ' . $lastName;

    if(isset($_POST['sessionSubmit'])) {
        $degName  = $_POST['degreeName'];
        $deptName = $_POST['deptName'];
        $startYear = $_POST['batchStartYear'];
        $endYear = $_POST['batchEndYear'];
        $lectureDetail = $_POST['content'];
        $startTime = $_POST['startTime'];
        $endTime  = $_POST['endTime'];

        $batchID  = $degName . $deptName . $startYear . $endYear;
        $sql = "INSERT INTO lecture(email, batchID, startTime, endTime, lectureDetails, teacherName) VALUES ('$email', '$batchID', '$startTime', '$endTime', '$lectureDetail', '$name')";
        $result = $db->query($sql);
        $done = 0;
        if($result) {
            $done = 1;
        }
        else {
            echo "Session Scheduling unsuccessful";
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
                <a href="./profile.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>Profile</a>
                <a href="./createCourse.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-map mr-3"></i>Add New Course</a>
                <a href="createBatch.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-users mr-3"></i>Add New Batch</a>
                <a href="createSession.php" class="list-group-item active waves-effect">
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
                        Hello <?php echo $name?>, Welcome to Class Management System !
                    </h5>
                </div>
            </div>
            <!-- Heading -->
        </div>

        <div class="container-fluid">
            <div class="row wow fadeIn">

                <div class="col-md-6">
                    <div class="card">
                        <!-- Default form register -->
                        <form class="text-center border border-light p-5" action="" method="post">

                            <p class="h4 mb-4">Schedule a New lecture</p>

                            <!-- Course Name -->
                            <div class="form-row mb-4">
                                <div class="col">
                                    <select name="degreeName" class="browser-default custom-select">
                                        <option selected>Select Degree</option>
                                        <option value="BE">BE</option>
                                        <option value="ME">ME</option>
                                        <option value="PhD">PhD</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select name="deptName" class="browser-default custom-select">
                                        <option selected>Select Department</option>
                                        <option value="CSE">Computer Science and Engineering</option>
                                        <option value="ME">Mechanical Engineering</option>
                                        <option value="EE">Electrical Engineering</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <!-- Course Year -->
                                    <input type="number" name="batchStartYear" id="defaultRegisterFormCourseYear"
                                        class="form-control" placeholder="Batch Start Year">
                                </div>
                                <div class="col">
                                    <!-- Course Year -->
                                    <input type="number" name="batchEndYear" id="defaultRegisterFormCourseYear"
                                        class="form-control" placeholder="Batch End Year">
                                </div>
                            </div>
                            <!-- <div class="form-row mb-4"> -->
                            <div class="form-group purple-border">
                                <label for="exampleFormControlTextarea4">Lecture Details</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea4" rows="10"
                                    placeholder="Please enter the lecture details..."></textarea>
                            </div>
                            <!-- </div> -->

                            <!-- start and end time scheduling  -->
                           
                            <div>
                                <label for="startTime">Start Time (date and time):</label>
                                <input type="datetime-local" id="startTime" name="startTime">
                                
                            </div>
                            
                            <!-- end time -->
                            <div >
                                <label for="endTime">EndTime (date and time):</label>
                                <input type="datetime-local" id="endTime" name="endTime">
                                
                            </div>
                            <!-- Submit button -->
                            <button class=" btn btn-info my-4 btn-block" name="sessionSubmit" type="submit">Create Session</button>

                            <!-- Terms of service -->
                            <p>By clicking
                                <em>Sign up</em> you agree to your
                                <a href="" target="_blank">code of conduct</a>

                        </form>
                        <!-- Default form register -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-1 mb-sm-0 pt-1">Scheduled Sessions</h5>
                            <span class="badge badge-pill badge-default">3 New</span>
                        </div>

                        <!-- Table  -->
                        <table class="table table-hover">
                            <!-- Table body -->
                            <tbody>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Lecture Details</th>
                                        <th scope = "col">Batch ID</th>
                                        <th scope="col">Start Time</th>
                                        <th scope="col">End Time</th>
                                    </tr>
                                </thead>
                                <?php
                                    $sql = "SELECT * FROM lecture WHERE email = '$user_check'";
                                    $result = $db->query($sql);

                                    if($result->num_rows > 0) {
                                        
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<th>" . $row['id'] . "</th>";
                                            echo "<td>" . $row['lectureDetails'] . "</td>";
                                            echo "<td>" . $row['batchID'] . "</td>";
                                            echo "<td>" . $row['startTime'] . "</td>";
                                            echo "<td>" . $row['endTime'] . "</td>"; 
                                            echo '<td>' . '<a href=""><i class="fas fa-pen"></i></a>' . '</td>'; 
                                            echo '<td>' . '<a href=""><i class="fas fa-trash"></i></a>' . '</td>';
                                            echo "</tr>"; 
                                       } 
                                       
                                    }
                                    else {
                                        echo "No notice available.  Please add one";
                                    }
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
     <script type = "text/javascript">
        $( document ).ready(function() {
            $('#input-limited-range').pickatime({
                twelvehour: true,
                min: "8:20am",
                max: "5:15pm"
            });
        });
    </script>
</body>

</html>