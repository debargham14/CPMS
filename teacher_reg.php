<!DOCTYPE html>
<html>
<head>
    <title>User Registration in php</title>
    <link rel = "stylesheet" type = "text/css" href = "bootstrap.min.css">
</head>
<body>
<?php
// including the config.php file in our code to connect it to the mysql database

    require_once('_config_.php');
    if(isset($_POST["create"])) {
        echo "Dataset is received from the form entry";
        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];


        //sql query to insert the data of an user into the respective fields
        $sql = "INSERT INTO Teachers(username, email, password) VALUES('$username','$email', '$password')";
        $stmtinsert = $db->query($sql);

        if($stmtinsert) {
            echo "Thanks for registering with us ! Hoping to see you soon";
        }
        else {
            die("Error: {$db->errno} : {$db->error}");
        }
        $db->close();
    }
?>
<div>
    <form action = "teacher_reg.php" method = "post">
        <div class = "container">
            <div class = "row">
                <div class = "col-sm-3">

                    <h1>Teacher's Registration Portal</h1>
                    <p>Fill up the form with correct values.</p>
                    <hr class = "mb-3">
                    <label for = "username"><b> Name </b></label>
                    <input class = "form-control" type = "text" id = "username" name = "username" required>

                    <label for = "email"><b> Email </b></label>
                    <input class = "form-control"  type = "email" id = "email" name = "email" required>

                    <label for = "password"><b> Password </b></label>
                    <input class = "form-control"  type = "password" id = "password" name = "password" required>
                    <hr class = "mb-3">
                    <input class = "btn btn-primary" type = "submit" id = "create" name = "create" value = "signup">
                    
                     <p>Already have an account? <a href="login_teachers.php">Login here</a>.</p>
                </div>
            </div>
        </div>
    </form>
</div>



</body>
</html>
