<?php 
    require 'header.html'; 
    require 'dbconnect.php';
    $db = new dbconnect();
    session_start();

    if(isset($_POST['reg_no']) && !empty($_POST['reg_no']))
    {
        $_SESSION['regNo'] = trim($_POST['reg_no']);
    }
    
    if(isset($_POST['regNo']) && isset($_POST['vehicleType']) && isset($_POST['make']) && isset($_POST['model']) && isset($_POST['fuelType']) && isset($_POST['year']) && isset($_POST['color']) && isset($_POST['transmissionType']) && isset($_POST['engineCapacity']))
    {
        if(!empty($_POST['regNo']) && !empty($_POST['vehicleType']) && !empty($_POST['make']) && !empty($_POST['model']) && !empty($_POST['fuelType']) && !empty($_POST['year']) && !empty($_POST['color']) && !empty($_POST['transmissionType']) &&  !empty($_POST['engineCapacity']))
        {
            // echo $vehicleType = $_POST['vehicleType'];
            // echo $make = $_POST['make'];
            // echo $model = $_POST['model'];
            // echo $fuelType = $_POST['fuelType'];
            // echo $year = $_POST['year'];
            // echo $color = $_POST['color'];
            // echo $metallicPaint = $_POST['metallicPaint'];
            // echo $selectVehicle = $_POST['selectVehicle'];
            
            move_uploaded_file($_FILES['imageUpload']['tmp_name'], 'images/'.$_FILES['imageUpload']['name']);
            
            $vehicle = array(
                'regNo' => $_POST['regNo'],
                'vehicleType' => $_POST['vehicleType'],
                'manufacturer' => $_POST['make'],
                'model' => $_POST['model'],
                'year' => $_POST['year'],
                'color' => $_POST['color'],
                'transmission' => $_POST['transmissionType'],
                'fuelType' => $_POST['fuelType'],
                'engineCapacity' => $_POST['engineCapacity'],
                'metallicPaint' => '',
                'selectVehicle' => '',
                // 'firstRegistered' => date('d-m-Y',strtotime($_POST['dateOfRegistration'])),
                'firstRegistered' => '',
                'fileName' => $_FILES['imageUpload']['name'],
                'fetchMode' => 'Manual'
            );
            $_SESSION['regNo'] = $vehicle['regNo'];

            $db->insertData($vehicle);            
        }
    }

    define("URL","https://uk1.ukvehicledata.co.uk/api/datapackage/VehicleData?v=2&api_nullitems=1&auth_apikey=26855df0-2562-4063-82fd-41b6fe44b59e&user_tag=&key_VRM=".$_SESSION['regNo']);

    if($db->isVehicleExists($_SESSION['regNo']))
    {
        // echo "Vehicle Data already exists";
        $car = $db->getData($_SESSION['regNo']);
        // $db->updateData($car);
    }
    else
    {
        $client = curl_init();
        curl_setopt($client,CURLOPT_URL,URL);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($client,CURLOPT_HTTPHEADER,array('Content-type:application/json'));
        $response = curl_exec($client);
        curl_close($client);
        if($response)
        {
            // echo $response;
            $vehicleData = json_decode($response);
        }
        else
        {
            echo "Empty Response";
        }

        require 'VehicleData.php';
        
        $vehicleRegistration = new VehicleRegistration();
        $vehicleRegistration->setMake($vehicleData->Response->DataItems->VehicleRegistration->Make);
        $vehicleRegistration->setMakeModel($vehicleData->Response->DataItems->VehicleRegistration->MakeModel);
        $vehicleRegistration->setVrm($vehicleData->Response->DataItems->VehicleRegistration->Vrm);
        $vehicleRegistration->setYearOfManufacture($vehicleData->Response->DataItems->VehicleRegistration->YearOfManufacture);
        $vehicleRegistration->setFuelType($vehicleData->Response->DataItems->VehicleRegistration->FuelType);
        $vehicleRegistration->setColour($vehicleData->Response->DataItems->VehicleRegistration->Colour);
        $vehicleRegistration->setEngineCapacity($vehicleData->Response->DataItems->VehicleRegistration->EngineCapacity);
        $vehicleRegistration->setDateFirstRegisteredUk($vehicleData->Response->DataItems->VehicleRegistration->DateFirstRegisteredUk);

        $smmtDetails = new SmmtDetails();
        $smmtDetails->setTransmission($vehicleData->Response->DataItems->SmmtDetails->Transmission);

        // echo '<br><br>Model : '.$vehicleRegistration->getMakeModel();
        // echo '<br><br>Make : '.$vehicleRegistration->getMakeModel();
        // echo '<br><br>Year: '.$vehicleRegistration->getYearOfManufacture();
        // echo '<br><br>Colour : '.$vehicleRegistration->getColour();
        // echo '<br><br>Transmission : '.$smmtDetails->getTransmission();
        // echo '<br><br>Engine Capacity :'.$vehicleRegistration->getEngineCapacity();
        // echo '<br><br>Date : '.$vehicleRegistration->getDateFirstRegisteredUk();

        $car = array(
            'regNo' => $vehicleRegistration->getVrm(),
            'vehicleType' => '',
            'manufacturer' => $vehicleRegistration->getMake(),
            'model' => $vehicleRegistration->getMakeModel(),
            'year' => $vehicleRegistration->getYearOfManufacture(),
            'color' => $vehicleRegistration->getColour(),
            'transmission' => $smmtDetails->getTransmission(),
            'fuelType' => $vehicleRegistration->getFuelType(),
            'engineCapacity' => $vehicleRegistration->getEngineCapacity(),
            'metallicPaint' =>'',
            'selectVehicle' => '',
            'fileName' => '',
            'firstRegistered' => date('d-m-Y',strtotime($vehicleRegistration->getDateFirstRegisteredUk())),
            'fetchMode' => 'API'
        );
        $db->insertData($car);
        $car = $db->getData($_SESSION['regNo']);
    }
?>
<link rel="stylesheet" href="css/api-integrate.css">
<div class="wrapper">
    <div class="leftSideBar">
        <div class="heading">
            <h1>Vehicle Details</h1>
            <em>Step 1 Of 2</em>
        </div>
    </div>
    <div class="mainBar">
        <form action="valuationForm.php" class="detailsForm" method="POST" enctype="multipart/form-data">
            <div class="row">
                <label for="mileage">
                    Mileage
                </label>
            </div>
            <div class="row">
                <select name="mileage" id="mileage">
                    <option value=" ">Select Mileage</option>
                    <option value="1-1000000">1-1000000</option>
                    <option value="1000001 - 2000000">1000001 - 2000000</option>
                    <option value="2000001 - 3000000">2000001 - 3000000</option>
                    <option value="3000001 - 4000000">3000001 - 4000000</option>
                    <option value="4000000 +">4000000 +</option>
                </select>
            </div>
            <div class="row">
                <label for="axleConfig">
                    Axle Configuration
                </label>
            </div>
            <div class="row">
                <select name="axleConfig" id="axleConfig">
                    <option value=" ">Select Axle Configuration</option>
                    <option value="4 x 2">4 x 2</option>
                    <option value="6 x 2">6 x 2</option>
                    <option value="6 x 4">6 x 4</option>
                    <option value="8 x 2">8 x 2</option>
                    <option value="8 x 4">8 x 4</option>
                </select>
            </div>
            <div class="row">
                <label for="previousOwners">
                    Previous Owners
                </label>
            </div>
            <div class="row">
                <input type="text" id="previousOwners" name="previousOwners">
            </div>
            <div class="row">
                <label for="serviceHistory">
                    Service History
                </label>
            </div>
            <div class="row">
                <input type="radio" id="yes" value="Yes" name="serviceHistory" hidden>
                <label for="yes" class="radio" id="labelYes" required>Yes</label>
                <input type="radio" id="no" value="No" name="serviceHistory" hidden>
                <label for="no" class="radio" id="labelNo" required>No</label>
            </div>
            <div class="row">
                <label for="condition">
                    Condition
                </label>
            </div>
            <div class="row">
                <input type="range" name="condition" id="condition" value="1" min="0" max="10" oninput="conditionOutput.value = condition.value">
                <output name="conditionOutput" id="conditionOutput">1</output>
            </div>
            <div class="row">
                <label for="uploadImage">
                    Upload Image
                </label>
            </div>
            <div>
                <input type="file" name="uploadImage">
            </div>
            <div class="row">
                <input type="submit" value="Continue >"> 
            </div>
        </form>
        <div class="back">
            <a href="<?=$_SERVER['HTTP_REFERER']?>"> < Back</a>
        </div>
    </div>
    <div class="rightSideBar">
        <?php
            require 'vehicleImage.php';
        ?>
        <div class="carDetails">
            <div class="field">
                <div class="cell">
                    <h5>Registration Number</h5>
                </div>
                <div class="cell">
                    <?= $car->regNo?>
                </div>
            </div>
            <div class="field">
                <div class="cell">
                    <h5>Manufacturer</h5>
                </div>
                <div class="cell">
                    <?= $car->manufacturer?>
                </div>
            </div>
            <div class="field">
                <div class="cell">
                    <h5>Model</h5>
                </div>
                <div class="cell">
                    <?= $car->model?>
                </div>
            </div>
            <div class="field">
                <div class="cell">
                    <h5>Year</h5>
                </div>
                <div class="cell">
                    <?= $car->year?>
                </div>
            </div>
            <div class="field">
                <div class="cell">
                    <h5>Colour</h5>
                </div>
                <div class="cell">
                    <?= $car->color?>
                </div>
            </div>
            <div class="field">
                <div class="cell">
                    <h5>Transmission</h5>
                </div>
                <div class="cell">
                    <?= $car->transmission?>
                </div>
            </div>
            <div class="field">
                <div class="cell">
                    <h5>Engine Capacity</h5>
                </div>
                <div class="cell">
                    <?= $car->engineCapacity?>
                </div>
            </div>
            <?php
                if($car->firstRegistered)
                {
            ?>
            <div class="field">
                <div class="cell">
                    <h5>Registration Date</h5>
                </div>
                <div class="cell">
                    <?= $car->firstRegistered?>
                </div>
            </div>
            <?php
                }
            ?>
        </div>        
    </div>
</div>    