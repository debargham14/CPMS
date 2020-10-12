<?php
    require_once('_config_.php');
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
                header("location: welcome_teachers.php");
            }
        }
        else {
            $error = "Your login credentials are invalid";
        }
        $db->close();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <title>Login form in php</title>
    <link rel = "stylesheet" type = "text/css" href = "bootstrap.min.css">
</head>
<body>
<div>
    <form action = "login_teachers.php" method = "post">
        <div class = "container">
            <div class = "row">
                <div class = "col-sm-3">

                    <h1>Login Form</h1>
                    <p>Fill up the form with correct values.</p>
                    <hr class = "mb-3">

                    <label for = "email"><b> Email </b></label>
                    <input class = "form-control"  type = "email" id = "email" name = "email" required>


                    <label for = "password"><b> Password </b></label>
                    <input class = "form-control"  type = "password" id = "password" name = "password" required>
                    <hr class = "mb-3">
                    <input class = "btn btn-primary" type = "submit" id = "login" name = "login" value = "Login">
                    
                   <p>Do not have an account? <a href="teacher_reg.php">Login here</a>.</p>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
