<?php 

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hairstudio";

//dabase connection

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if($conn){
            
    }else{
        die ("<script>alert('connection to DB failed..')</script>");
    }

?>