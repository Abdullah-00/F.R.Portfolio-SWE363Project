<?php
    session_start();
if (isset($_SESSION['Email'])){
    $email = $_SESSION['Email'];
    if($email != "swe363@kfupm.edu.sa")
    {
        header("location: ../error/");
    }
}
else{
    header("location: ../error/");
}
?>