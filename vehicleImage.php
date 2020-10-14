<?php
    define("IMAGE_API","https://uk1.ukvehicledata.co.uk/api/datapackage/VehicleImageData?v=2&api_nullitems=1&auth_apikey=02587607-9909-495a-ae2a-c8ccb278db0f&user_tag=&key_VRM=".$_SESSION['regNo']);
    if($car->imageUpload != '')
    {
        ?>
            <img src="images/<?=$car->imageUpload?>" width="350" height="150" alt="Manual Vehicle Image">
        <?php
    }
    else if($car->fetchMode == 'API')
    {
        $client = curl_init();
        curl_setopt($client,CURLOPT_URL,IMAGE_API);
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($client,CURLOPT_HTTPHEADER,array('Content-type:application/json'));
        $response = curl_exec($client);
        curl_close($client);
        if($response)
        {
            // echo $response;
            $vehicleImageData = json_decode($response);
        }
        else
        {
            echo "Empty Response";
        }
?>
        <img src="<?= $vehicleImageData->Response->DataItems->VehicleImages->ImageDetailsList[0]->ImageUrl?>" width="350" height="150" alt="Vehicle Image">
<?php
    }
?>