<?php
    $host = "localhost";
    $username = "root";
    $dbpass = "Mango:KAPPA:128L";
    $db = "PHPLearn";
    
    $db_conn = new mysqli($host, $username, $dbpass, $db);

    $queryString = "INSERT INTO table0 (name, age) VALUES ('adam', 16)";

    if($result = ($db_conn->query($queryString))) {
        while($row = $result->fetch_object()) {
            printf("%s", $row->name);
        }
    } else {
        echo "something broke";
    }

?>