<?php
    $link = mysqli_connect("local.ccse.kfupm.edu.sa", "st201436120", "db4sweproj", "FR_Portfolio", "3306");

    $error = mysqli_connect_error();
    print $error;
    if ($error != null) {
        $output = "<p>Unable to connect to the database</p>" . $error ;
        exit($output);
    }
?>