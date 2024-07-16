<?php
    $servername = "	sql204.infinityfree.com";
    $username = "if0_36917108";
    $password = "69gEWN8BJiIvQ0j";
    $db_name = "if0_36917108_Shoestore";

    $conn = new mysqli($servername, $username, $password, $db_name);

    if($conn->connect_error === true){
        die("Connection Error".$conn->connect_error);
    }

    
?>