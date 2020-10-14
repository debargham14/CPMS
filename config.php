<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'cpms';

    $db = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if($db->connect_error) {
        die('Connect Error: ' . $db->connect_errno . ' : ' . $db->connect_error);
    }
    // echo "<h1>Welcome to class and proxy management system</h1>" . "<br>";

?>