<?php
    require_once('../session.php');
    // $phone = $_SESSION['phone'];

    if(isset($_POST["Confirm"])) {
        $newPassword = $_POST['newPassword'];
        $confirmPassword = $_POST['confirmPassword'];

        if($newPassword != $confirmPassword) {
            echo "Please enter the values correctly";
        }
        else {
            $sql = "UPDATE teacher SET password = '$newPassword' WHERE email = '$user_check'";
            $result = $db->query($sql);

            if(!$result) {
                // echo "Password Change Unsuccessful";
            }
            else {}
                // echo "Password Changed successfully";
        }
    }
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
                <a href="./dashboard.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fas fa-user mr-3"></i>Profile</a>
                <a href="./createCourse.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-map mr-3"></i>Add New Course</a>
                <a href="./createBatch2.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fas fa-users mr-3"></i>Add New Batch</a>
                <a href="./createSession.php" class="list-group-item list-group-item-action waves-effect">
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
                        Hello <?php echo $row['firstName'].' '.$row['lastName'];
                        ?>, Welcome to Class Management System !
                    </h5>
                </div>
            </div>
            <!-- Heading -->
        </div>

        <div class="container-fluid">
            <div class="row wow fadeIn">
                <div class="col-md-12">
                    <!-- student details -->
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">
                            <i class="far fa-user-circle"></i>
                            <?php echo $row['firstName'].' '.$row['lastName'];?>
                            <span class="badge badge-pill badge-success">Online</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="card-title">email : <?php echo $user_check;?></h6><br>
                                    <h6>Account Type : <?php echo $role; ?></h6><br>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text text-white">Phone Number : <?php echo $phone;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- student details end -->

                    <!-- reset password  -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <!-- Login Form -->
                        <h5>Change Password</h5>
                        <form class="text-center border border-light p-3" action="profile.php" method="post">



                            <!-- Password -->
                            <input type="password" name="newPassword" id="defaultLoginFormPassword"
                                class="form-control mb-4" placeholder="New Password">

                            <input type="password" name="confirmPassword" id="defaultLoginFormPassword"
                                class="form-control mb-4" placeholder="Confirm Password">

                            <div class="d-flex justify-content-around">
                                <div>
                                    <!-- Remember me -->

                                </div>

                            </div>

                            <!-- Login button -->
                            <button class="btn btn-info btn-block my-4" id="Confirm" name="Confirm"
                                type="submit">Confirm</button>
                        </form>
                        <!-- Login Form -->
                    </div>

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