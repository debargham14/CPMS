<?php
    require_once('../session.php');
    include('./dashboard.php');
    $id = $row['id'];
    $sql = 'DELETE FROM lecture where id = $id';
    $result = $db->query($sql);
    if($result) {
        // successfull;
    }
    else {
        echo "Update unsuccessful";
    }
?>