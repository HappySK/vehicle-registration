<?php require 'header.html';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRM | Search Manually</title>
    <link rel="stylesheet" href="css/manualForm.css">
</head>
<body>
    <section>
        <div class="leftBar">
            <div class="leftBarContents">
                <h1>
                    Add Your Vehicle Details manually
                </h1>
            </div>
        </div>
        <div class="mainBar">
                <form action="api_integrate.php" method="POST" enctype="multipart/form-data">
                <table cellspacing="0">
                    <tr>
                        <td>
                            <span>Registration Number</span>
                        </td>
                        <td>
                            <input type="text" name="regNo" id="regNo" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Vehicle Type</span>
                        </td>
                        <td>
                            <input type="radio" name="vehicleType" value="Van" id="van" required hidden>
                            <label for="van" id="vanLabel">Van</label>
                            <input type="radio" name="vehicleType" value="Truck" id="truck" required hidden>
                            <label for="truck" id="truckLabel">Truck</label>
                            <input type="radio" name="vehicleType" value="Farm" id="farm" required hidden>
                            <label for="farm" id="farmLabel">Farm</label>
                            <input type="radio" name="vehicleType" value="Plant" id="plant" required hidden>
                            <label for="plant" id="plantLabel">Plant</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Make</span>
                        </td>
                        <td>
                            <!-- <select name="make" id="make">
                                <option value=""></option>
                                <option value="ford">Ford</option>
                                <option value="fiat">Fiat</option>
                                <option value="volkswagen">Volkswagen</option>
                            </select> -->
                            <input type="text" name="make" id="make" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Model</span>
                        </td>
                        <td>
                            <!-- <select name="model" id="model">
                                <option value=""></option>
                                <option value="ford">Ford</option>
                                <option value="fiat">Fiat</option>
                                <option value="volkswagen">Volkswagen</option>
                            </select> -->
                            <input type="text" name="model" id="model" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Fuel Type</span>
                        </td>
                        <td>
                            <select name="fuelType" id="fuelType">
                                <option value="None">Select Fuel Type</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Petrol">Petrol</option>
                                <option value="LPG">LPG</option>
                                <option value="Others">Others</option>
                            </select>
                            <!-- <input type="text" name="fuelType" id="fuelType" required> -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Year</span>
                        </td>
                        <td>
                        <input list="birth_year" name="year">
                        <datalist id="birth_year">
                            <?php 
                            $right_now = getdate();
                            $this_year = $right_now['year'];
                            $start_year = 1900;
                            while ($start_year <= $this_year) {
                                echo "<option value=$start_year>{$start_year}</option>";
                                $start_year++;
                            }
                            ?>
                        </datalist>
                    </input>
                            </select>
                            <!-- <input type="text" name="year" id="year" required> -->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Colour</span>
                        </td>
                        <td>
                            <!-- <select name="color" id="color">
                                <option value=""></option>
                                <option value="ford">Ford</option>
                                <option value="fiat">Fiat</option>
                                <option value="volkswagen">Volkswagen</option>
                            </select> -->
                            <input type="text" name="color" id="color" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Transmission Type</span>
                        </td>
                        <td>
                            <select name="transmissionType" id="transmissionType">
                                <option value="None">Select Transmission Type</option>
                                <option value="Manual">Manual</option>
                                <option value="Semi-Automatic">Semi-Automatic</option>
                                <option value="Automatic">Automatic</option>
                                <option value="Other">Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Engine Capacity</span>
                        </td>
                        <td>
                            <input type="text" name="engineCapacity" id="engineCapacity" required>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>
                            <span>Date of Registration</span>
                        </td>
                        <td>
                            <input type="date" name="dateOfRegistration" id="dateOfRegistration" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Mettalic Paint</span>
                        </td>
                        <td>
                            <input type="radio" name="metallicPaint" value="Yes" id="yes" hidden>
                            <label for="yes" id="yesLabel">Yes</label>
                            <input type="radio" name="metallicPaint" value="No" id="no" hidden>
                            <label for="no" id="noLabel">No</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Select Vehicle</span>
                        </td>
                        <td>
                            <select name="selectVehicle" id="selectVehicle">
                                <option value=""></option>
                                <option value="ford">Ford</option>
                                <option value="fiat">Fiat</option>
                                <option value="volkswagen">Volkswagen</option>
                            </select>
                            <input type="text" name="selectVehicle" id="selectVehicle" required>
                        </td>
                    </tr> -->
                    <tr>
                        <td>
                            Upload Image
                        </td>
                        <td>
                            <input type="file" name="imageUpload" value="imageUpload">                
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Submit">                
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="<?= $_SERVER['HTTP_REFERER']?>">< Back</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
</body>
</html>

<?php
    if(isset($_POST['vehicleType']) && isset($_POST['make']) && isset($_POST['model']) && isset($_POST['fuelType']) && isset($_POST['year']) && isset($_POST['color']) && isset($_POST['metallicPaint']) && isset($_POST['selectVehicle']))
    {
        if(!empty($_POST['vehicleType']) && !empty($_POST['make']) && !empty($_POST['model']) && !empty($_POST['fuelType']) && !empty($_POST['year']) && !empty($_POST['color']) && !empty($_POST['metallicPaint']) && !empty($_POST['selectVehicle']))
        {
            // echo $vehicleType = $_POST['vehicleType'];
            // echo $make = $_POST['make'];
            // echo $model = $_POST['model'];
            // echo $fuelType = $_POST['fuelType'];
            // echo $year = $_POST['year'];
            // echo $color = $_POST['color'];
            // echo $metallicPaint = $_POST['metallicPaint'];
            // echo $selectVehicle = $_POST['selectVehicle'];

            $vehicle = array(
                'vehicleType' => $_POST['vehicleType'],
                'make' => $_POST['make'],
                'model' => $_POST['model'],
                'fuelType' => $_POST['fuelType'],
                'year' => $_POST['year'],
                'color' => $_POST['color'],
                'metallicPaint' => $_POST['metallicPaint'],
                'selectVehicle' => $_POST['selectVehicle']
            );

            require 'dbconnect.php';
            $db = new dbconnect();

            $db->insertManualData($vehicle);
        }
    }
?>