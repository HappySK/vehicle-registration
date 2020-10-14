<?php
 /* 
    Username : sowlyehg_vehicle
    Password : S*$Y8wFO6M[D
 */

    class dbconnect
    {
        private $conn = null;
        function __construct()
        {
            try
            {
                $this->conn = new PDO('mysql:host=localhost;dbname=sowlyehg_vehicle;charset=utf8','root','');
                // echo "DB Connected";
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }

        function isVehicleExists($regNo)
        {
            $sql = "SELECT * FROM vehicle_registration WHERE `regNo` = ?";
            $stmt = $this->conn->prepare($sql);
            return ($stmt->execute([$regNo]) && ($stmt->rowCount() == 1)) ? true : false;
        }

        function insertData($car)
        {
            try
            {
                $createdDate = date('Y/m/d h:i:sa');
                $updatedDate = date('Y/m/d h:i:sa');
                $sql = "INSERT INTO `vehicle_registration`(`regNo`, `vehicleType`, `manufacturer`, `model`, `year`, `color`, `transmission`, `fuelType`, `engineCapacity`, `metallicPaint`, `selectVehicle`, `firstRegistered`, `imageUpload`, `createdDate`, `updatedDate`, `fetchMode`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $stmt = $this->conn->prepare($sql);
                if($stmt->execute([$car['regNo'],$car['vehicleType'],$car['manufacturer'],$car['model'],$car['year'],$car['color'],$car['transmission'],$car['fuelType'],$car['engineCapacity'],$car['metallicPaint'],$car['selectVehicle'],$car['firstRegistered'],$car['fileName'],$createdDate,$updatedDate,$car['fetchMode']]))
                {
                    // echo "<br><br>Data Inserted Successfully";
                }
                else
                {
                    echo "<br><br>Query Not Executed";
                }
            }
            catch(SQLException $e)
            {
                echo $e->getMessage();
            }
        }

        function updateData($extraInfo)
        {
            try
            {
                $updatedDate = date('Y/m/d h:i:sa');
                $sql = "UPDATE vehicle_registration SET `mileage` = ?, `axleConfiguration` = ?, `previousOwners` = ?, `serviceHistory` = ?, `conditionalLevel` = ?, `imageUpload` = ?, `updatedDate` = ? WHERE `regNo` = ? ";
                $stmt = $this->conn->prepare($sql);
                if(!($stmt->execute([$extraInfo['mileage'], $extraInfo['axleConfig'], $extraInfo['previousOwners'], $extraInfo['serviceHistory'], $extraInfo['condition'],$extraInfo['imageUpload'], $updatedDate, $extraInfo['regNo']])))
                {
                    echo "Query Not Executed";
                }
            }
            catch(SQLException $e)
            {
                echo $e->getMessage();
            }
        }

        function getData($regNo)
        {
            try
            {
                $sql = "SELECT * FROM vehicle_registration WHERE `regNo` = ?";
                $stmt = $this->conn->prepare($sql);
                if($stmt->execute([$regNo]) && $stmt->rowCount()==1)
                {
                    return $stmt->fetchObject();
                }
                else
                {
                    return "Info";
                }
            }
            catch(SQLException $e)
            {
                echo $e->getMessage();
            }
        }

        function insertManualData($vehicle)
        {
            try
            {
                $sql = "INSERT INTO `vehicle_manual_data`(`vehicleType`, `make`, `model`, `fuelType`, `year`, `color`, `metallicPaint`, `selectVehicle`) VALUES (?,?,?,?,?,?,?,?)";
                $stmt = $this->conn->prepare($sql);
                if($stmt->execute([$vehicle['vehicleType'],$vehicle['make'],$vehicle['model'],$vehicle['fuelType'],$vehicle['year'],$vehicle['color'],$vehicle['metallicPaint'],$vehicle['selectVehicle']]))
                {
                    // echo "Query Executed";
                }
                else
                {
                    echo "Query Not Executed";
                }
            }
            catch(SQLException $e)
            {
                echo $e->getMessage();
            }
        }

        function insertValuationData($user)
        {
            try
            {
                $sql = "INSERT INTO `valuation_data`(`name`, `email`, `mobileNumber`) VALUES (?,?,?)";
                $stmt = $this->conn->prepare($sql);
                if($stmt->execute([$user['name'],$user['email'],$user['mobileNumber']]))
                {
                    // echo "Query Executed";
                }
                else
                {
                    echo "Query not executed";
                }
            }
            catch(SQLException $e)
            {
                echo $e->getMessage();
            }
        }

        function __destruct()
        {
            $this->conn = null;
        }
    }
?>