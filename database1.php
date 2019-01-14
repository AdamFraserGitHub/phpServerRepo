<?php
    $host = "localhost";
    $username = "root";
    $dbpass = "Mango:KAPPA:128L";
    $db = "PHPLearn";
    
    $db_conn = new mysqli($host, $username, $dbpass, $db);
    
    if($result = ($db_conn->query("SELECT * FROM table0"))) {
        echo "ok";
    } else {
        echo "well shit";
    }

?>