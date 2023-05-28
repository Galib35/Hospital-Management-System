<?php

    session_start();

    if(isset($_SESSION['doctor_id'])){

        unset($_SESSION['doctor_id']);
        
        header("location:../index.php" );
    }
?>