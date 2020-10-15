<?php
// including the config.php file in our code to connect it to the mysql database

require_once('./config.php');

if(isset($_POST["register"])) {
    echo "Dataset is received from the form entry";
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (isset($_POST['studentRole'])) {
        $roll = $_POST['roll'];
        //sql query to insert the data of an user into the respective fields
        $sql = "INSERT INTO student (firstName, lastName, roll, phone, email, password) VALUES('$firstName', '$lastName', '$roll', '$phone', '$email', '$password')";
        $stmtinsert = $db->query($sql);
    }

    else if (isset($_POST['teacherRole'])) {
        //sql query to insert the data of an user into the respective fields
        $sql = "INSERT INTO teacher (firstName, lastName, phone, email, password) VALUES('$firstName', '$lastName', '$phone', '$email', '$password')";
        $stmtinsert = $db->query($sql);
    }

    if ($stmtinsert) {
        echo "Success! Row ID: {$db->insert_id}";
    } else {
        die("Error: {$db->errno} : {$db->error}");
    }
    $db->close();
}
?>