<?php

    $database= new mysqli("awseb-e-ifmqtft9mz-stack-awsebrdsdatabase-1uayildquq2t.cbz9gbamyctk.eu-north-1.rds.amazonaws.com","root","123456789","ebdb");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
