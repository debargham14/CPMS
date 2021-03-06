<?php
    require_once('../session.php');
    $email = $user_check;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Dashboard | CPMS</title>
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
                            <a href="../logout.php" class="nav-link border border-light rounded waves-effect">
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
                <a href="./dashboard.php" class="list-group-item active waves-effect">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>
                <a href="./profile.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-user mr-3"></i>Profile</a>
                <a href="./createCourse.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-map mr-3"></i>Add New Course</a>
                <a href="./createBatch.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-users mr-3"></i>Add New Batch</a>
                <a href="./createSession.php" class="list-group-item list-group-item-action waves-effect">
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
                        Hello <?php echo $row['firstName'].' '.$row['lastName'];
                        ?>, Welcome to Class Management System !
                    </h5>
                </div>
            </div>
            <!-- Heading -->
        </div>

        <div class="container-fluid">
            <div class="row wow fadeIn">
                <div class="col-md-6">
                    <!-- student details -->
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">
                            <i class="far fa-user-circle"></i>
                            <?php echo $row['firstName'].' '.$row['lastName'];?>
                            <span class="badge badge-pill badge-success">Online</span>
                        </div>
                        <!-- <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Roll Number - 001910501000</h5>
                                    <h6>Class ID - BCSEUG12019</h6>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text text-white">Enrolment ID - A4785HH9</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- student details end -->
                    <div class="col-md-12">
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
                    <div class="row mt-3">
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
                    </div>

                    <!-- column ends -->
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-1 mb-sm-0 pt-1">Notice Board</h5>
                            <span class="badge badge-pill badge-default">3 New</span>
                        </div>

                        <!-- Table  -->
                        <table class="table table-hover">
                            <!-- Table body -->
                            <tbody>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Notice Content</th>
                                        <th scope="col">Batch</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                </thead>
                                <?php
                                    $sql = "SELECT * FROM notice WHERE email = '$email'";
                                    $result = $db->query($sql);

                                    if($result->num_rows > 0) {
                                        
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<th>" . $row['id'] . "</th>";
                                            echo "<td>" . $row['content'] . "</td>";
                                            echo "<td>" . $row['batchTarget'] . "</td>";
                                            echo "<td>" . $row['createdAt'] . "</td>"; 
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
</body>

</html>