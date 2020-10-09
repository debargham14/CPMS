<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = 'Debmukh@2206';
    $db_name = 'cpms';

    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if($db->connect_error) {
        die('Connect Error: ' . $db->connect_errno . ' : ' . $db->connect_error);
    }
    echo "<h1>Welcome to class and proxy management system</h1>" . "<br>";

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