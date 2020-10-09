<!DOCTYPE html>
<html>
<head>
    <title>User Registration in php</title>
    <link rel = "stylesheet" type = "text/css" href = "bootstrap.min.css">
</head>
<body>
<?php
// including the config.php file in our code to connect it to the mysql database

require_once('student_reg_config.php');
?>
<div>
    <form action = "student_reg.php" method = "post">
        <div class = "container">
            <div class = "row">
                <div class = "col-sm-3">

                    <h1>Student Registration</h1>
                    <p>Fill up the form with correct values.</p>
                    <hr class = "mb-3">
                    <label for = "username"><b> Username </b></label>
                    <input class = "form-control" type = "text" id = "username" name = "username" required>

                    <label for = "roll"><b> RollNumber </b></label>
                    <input class = "form-control"  type = "text" id = "roll" name = "roll" required>

                    <label for = "email"><b> Email </b></label>
                    <input class = "form-control"  type = "email" id = "email" name = "email" required>

                    <label for = "password"><b> Password </b></label>
                    <input class = "form-control"  type = "password" id = "password" name = "password" required>
                    <hr class = "mb-3">
                    <input class = "btn btn-primary" type = "submit" id = "create" name = "create" value = "signup">
                </div>
            </div>
        </div>
    </form>
</div>



</body>
</html>