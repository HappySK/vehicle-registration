<?php
    if(isset($_GET['regNo']) && !empty($_GET['regNo']))
    {
        require 'dbconnect.php';
        $db = new dbconnect();
        echo $db->isVehicleExists($_GET['regNo']) ? true : false;
    }
?>