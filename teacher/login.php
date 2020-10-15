<?php
    require_once('../config.php');
    session_start();
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        //sql query to find the user with the given mail id and password
        $sql = "SELECT * FROM Teachers WHERE email = '$email' AND password = '$pass'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            while($rows = $result->fetch_assoc()) {
                //  session_register("email");
                $_SESSION['email'] = $rows['email'];
                header("location: dashboard.php");
            }
        }
        else {
            $error = "Your login credentials are invalid";
        }
        $db->close();
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Teacher Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-light blue lighten-4">
        <span class="navbar-brand">Class Management System</span>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <!-- Default form login -->
                <form class="text-center border border-light p-5" action="login.php" method="post">

                    <p class="h4 mb-4">Sign in</p>

                    <!-- Email -->
                    <input type="email" name="email" id="defaultLoginFormEmail" class="form-control mb-4"
                        placeholder="E-mail">

                    <!-- Password -->
                    <input type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4"
                        placeholder="Password">

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-info btn-block my-4" id="login" name="login" type="submit">Sign in</button>

                    <!-- Register -->
                    <p>Not a member?
                        <a href="register.php">Register</a>
                    </p>

                    <!-- Social login -->
                    <p>or sign in with:</p>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                </form>
                <!-- Default form login -->
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
</body>

</html>