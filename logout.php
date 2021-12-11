<?php
    session_start();

    unset($_SESSION['fName']);
    unset($_SESSION['lName']);

    session_destroy();

    header("Location:clientlogin.php");
?>