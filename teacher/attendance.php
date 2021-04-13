<?php
    require_once('../session.php');
    if(isset($_POST["Confirm"])){
        $lectureID = $_POST['lectureID'];
        session_start();
        $_SESSION['lectureID'] = $lectureID;
        header("location: showattendance.php");
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
                            <a href="../logout.php" class="nav-link border border-light rounded waves-effect" target="_blank">
                                <i class="fab fa-github mr-2"></i>Sign Out
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
                <a href="createSession.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-tv mr-3"></i>Schedule Session</a>
                <a href="./createNotice.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-map mr-3"></i>Notice</a>
                <a href="./attendance.php" class="list-group-item active waves-effect">
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
                        Hello <?php echo $firstName . ' ' . $lastName ?>, Welcome to Class Management System !
                    </h5>
                </div>
            </div>
            <!-- Heading -->
        </div>

        <div class="container-fluid">
            <div class="row wow fadeIn">

                <!-- <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-1 mb-sm-0 pt-1">Attendance Page</h5>
                        </div> -->


                    </div>
                </div>
                <!-- row ends -->
            </div>
            <!-- container ends -->
        </div>



        <div class = "col-md-12">
        <div class="card">
                        <div class="card-body">
                            <h6 class="mb-1 mb-sm-0 pt-1">Scheduled Sessions</h6>
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
                                    $sql = "SELECT * FROM lecture";
                                    $result = $db->query($sql);

                                    if($result->num_rows > 0) {
                                        
                                        while($row = $result->fetch_assoc()) {
                                            $startMin = (string)date("Y-m-d") . 'T'. '12:00';
                                            $startMax = (string)date("Y-m-d") . 'T'. '24:00';
                                            $startTimeLecture = (string)$row['startTime'];
                                            // echo $startMin . " " . $startTimeLecture . " " . $startMax . "<br>";
                                            // echo strcmp($startTimeLecture, $startMin);
                                            if(strcmp($startTimeLecture, $startMin) >= 0 && strcmp($startMax, $startTimeLecture) >= 0){
                                                echo "<tr>";
                                                echo "<th>" . $row['id'] . "</th>";
                                                echo "<td>" . $row['lectureDetails'] . "</td>";
                                                echo "<td>" . $row['batchID'] . "</td>";
                                                echo "<td>" . $row['startTime'] . "</td>";
                                                echo "<td>" . $row['endTime'] . "</td>"; 
                                                // echo '<td>' . '<a href=""><i class="fas fa-pen"></i></a>' . '</td>'; 
                                                // echo '<td>' . '<a href=""><i class="fas fa-trash"></i></a>' . '</td>';
                                                echo "</tr>"; 
                                            }
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
                    <div class="card-body d-sm-flex justify-content-between">
                    <div class = "col-md-12">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <!-- Login Form -->
                        <h5>Show Attendance</h5>
                        <form class="text-center border border-light p-3" action="attendance.php" method="post">



                            <!-- Password -->
                            <!-- <input type="password" name="newPassword" id="defaultLoginFormPassword"
                                class="form-control mb-4" placeholder="New Password"> -->

                            <input type="number" name="lectureID" id="lectureID"
                                class="form-control mb-4" placeholder= "Enter Lecture id">

                            <div class="d-flex justify-content-around">
                                <div>
                                    <!-- Remember me -->

                                </div>

                            </div>

                            <!-- Login button -->
                            <button class="btn btn-info btn-block my-4" id="Confirm" name="Confirm"
                                type="submit">Show Attendance</button>
                        </form>
                        <!-- Login Form -->
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="mb-1 mb-sm-0 pt-1">Students Enrolled</h5>
                                    <h1>80</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="mb-1 mb-sm-0 pt-1">Instructors</h5>
                                    <h1>5</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="mb-1 mb-sm-0 pt-1">Lectures Today</h5>
                                    <h1>7</h1>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- column ends -->
                </div>
                    </div>
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