<?php
    session_start();
    require 'header.html';
    if(isset($_POST['mileage']) || isset($_POST['axleConfig']) || isset($_POST['previousOwners']) || isset($_POST['serviceHistory']) || isset($_POST['condition']))
    {
        if(!empty($_POST['mileage']) || !empty($_POST['axleConfig']) ||!empty($_POST['previousOwners']) || !empty($_POST['serviceHistory']) ||!empty($_POST['condition']))
        {

            $mileage = $_POST['mileage'];
            $axleConfig = $_POST['axleConfig'];
            $previousOwners = $_POST['previousOwners'];
            $serviceHistory = $_POST['serviceHistory'];
            $condition = $_POST['condition'];

            $extraInfo = array(
                'regNo' => $_SESSION['regNo'],
                'mileage' => $mileage,
                'axleConfig' => $axleConfig,
                'previousOwners' => $previousOwners,
                'serviceHistory' => $serviceHistory,
                'condition' => $condition,
                'imageUpload' => $_FILES['uploadImage']['name']
            );

            require 'dbconnect.php';
            $db = new dbconnect();

            $db->updateData($extraInfo);
        }
    }
?>
<link rel="stylesheet" href="css/valuationForm.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="wrapper">
    <div class="leftBar">
        <div class="leftBarContents">
            <h1>Your Details</h1>
            <cite>Step 2 0f 2</cite>
        </div>
    </div>
    <div class="mainBar">
        <form action="successPage.php" method="POST">
            <div class="field">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="name" placeholder="Enter Your Name" required>
            </div>
            <div class="field">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="text" name="email" placeholder="Enter your email ID" required>
            </div>
            <div class="field">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="text" name="mobileNumber" placeholder="Your Mobile Number" required>
            </div>
            <input type="submit" value="Get My Valuation >">
        </form>
        <div class="back">
            <a href="<?=$_SERVER['HTTP_REFERER']?>"> < Back</a>
        </div>
    </div>
</div>
