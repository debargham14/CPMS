<?php
//it verifies whether a session is present or not else it redirects the page to login.php
    include('_config_.php');
    session_start();

    $user_check = $_SESSION['email'];

    $ses_sql = $db->query("SELECT * FROM Teachers WHERE email = '$user_check' ");

    $row = $ses_sql->fetch_assoc();

    $login_session = $row['username'];
    if(!isset($_SESSION['email'])){
        header("login_teachers.php");
        die();
}
?>