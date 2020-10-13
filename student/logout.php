<?php
//logout page to destroy the created session
    session_start();

    //redirecting it to the login page again
    if(session_destroy()) {
        header("Location: login.php");
    }

?>