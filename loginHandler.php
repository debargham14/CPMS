<?php
    require_once('./config.php');
    session_start();
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        //sql query to find the user with the given mail id and password
        $sql = "SELECT * FROM teacher WHERE email = '$email' AND password = '$pass'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            while($rows = $result->fetch_assoc()) {
                //  session_register("email");
                $_SESSION['email'] = $rows['email'];
                $_SESSION['role'] = 'teacher';
                header("location: ./teacher/dashboard.php");
            }
        }
        
        else {
            //sql query to find the user with the given mail id and password
            $sql = "SELECT * FROM student WHERE email = '$email' AND password = '$pass'";
            $result = $db->query($sql);

            if ($result->num_rows > 0) {
                while($rows = $result->fetch_assoc()) {
                    //  session_register("email");
                    $_SESSION['email'] = $rows['email'];
                    $_SESSION['role'] = 'student';
                    header("location: ./student/dashboard.php");
                }
            }
            else {
            echo "Your login credentials are invalid";
            }
        }
        
        $db->close();
    }
?>