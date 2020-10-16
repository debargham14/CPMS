<?php
//it verifies whether a session is present or not else it redirects the page to login.php
    include('config.php');
    session_start();

    $user_check = $_SESSION['email'];
  //  $phone      = $_SESSION['phone'];

    $role = $_SESSION['role'];

    $ses_sql = $db->query("SELECT * FROM $role WHERE email = '$user_check' ");

    $row = $ses_sql->fetch_assoc();

    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    
    if(!isset($_SESSION['email'])){
        header("index.php");
        die();
    }
?>