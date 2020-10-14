<?php
    require 'header.html';
    session_start();
    require 'dbconnect.php';
    $db = new dbconnect();

    $car = $db->getData($_SESSION['regNo']);

    if(isset($_POST['name']) && isset($_POST['email']) && $_POST['mobileNumber'])
    {
        if(!empty($_POST['name']) && $_POST['email'] && $_POST['mobileNumber']) 
        {
            $user = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'mobileNumber' => $_POST['mobileNumber']
            );
            $subject = "Vehicle Valuation";
            $header = 'MIME-Version: 1.0' . "\r\n";
            $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";;
            $message = '
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                </head>
                <body>
                    <img src="https://demo.sowlab.website/vehicle/emailImage.png" alt="Logo">
                    <p>Hello '.$user['name'].'</p>
                    <p>Thank you for submitting your valuation request for your Vehicle Registration Number <strong>'.$car->regNo.'</strong>.A member of the team will be in touch shortly.</p>
                    <p>Thanks,</p>
                    <p>Team Vehicle Registration and Valuation</p>
                </body>
                </html>
            ';

            mail($user['email'],$subject,$message,$header);
            $db->insertValuationData($user);

            $to = 'ripul.chhabra@sowlab.com';
            $sales_subject = "Vehicle Valuation";
            $sales_header = 'MIME-Version: 1.0' . "\r\n";
            $sales_header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";;
            $sales_message = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
            <body>
                <img align="center" src="https://demo.sowlab.website/vehicle/emailImage.png" alt="Logo">
                <h3 style="text-align:center">Vehicle Details of the Customer</h3>
                <table border="1" cellspacing="0" align="center">
                    <tbody>
                        <tr>
                            <td colspan="2" align="center">
                                Customer Details
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Name
                            </th>
                            <td>
                                '.$user['name'].'
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Email
                            </th>
                            <td>
                                '.$user['email'].'
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Mobile Number
                            </th>
                            <td>
                                '.$user['mobileNumber'].'
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                Vehical Details
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Registration Number
                            </td>
                            <td>
                                '.$car->regNo.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Vehicle Type
                            </td>
                            <td>
                                '.$car->vehicleType.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Manufacturer   
                            </td>
                            <td>
                                '.$car->manufacturer.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Model   
                            </td>
                            <td>
                                '.$car->model.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Year   
                            </td>
                            <td>
                                '.$car->year.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Colour   
                            </td>
                            <td>
                                '.$car->color.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Transmission Type   
                            </td>
                            <td>
                                '.$car->transmission.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Fuel Type   
                            </td>
                            <td>
                                '.$car->fuelType.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Engine Capacity   
                            </td>
                            <td>
                                '.$car->engineCapacity.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mettalic Paint   
                            </td>
                            <td>
                                '.$car->metallicPaint.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Select Vehicle   
                            </td>
                            <td>
                                '.$car->selectVehicle.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date Of Registration   
                            </td>
                            <td>
                                '.$car->firstRegistered.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mileage   
                            </td>
                            <td>
                                '.$car->mileage.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Axle Configuration   
                            </td>
                            <td>
                                '.$car->axleConfiguration.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                No. Of Previous Owners   
                            </td>
                            <td>
                                '.$car->previousOwners.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Service History   
                            </td>
                            <td>
                                '.$car->serviceHistory.'
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Vehicle Condition(Out Of 10)
                            </td>
                            <td>
                                '.$car->conditionalLevel.'
                            </td>
                        </tr>
                    </tbody>
                </table>
            </body>
            </html>
            ';

            mail($to,$sales_subject,$sales_message,$sales_header);
            ?>
                <h1 style="text-align:center">Thank You <?=$user['name']?></h1>
                <h3 style="text-align:center">Thank You for submitting your Valuation Request.A member of our team will be in touch shortly.</h3>
            <?php
            session_unset();
        }
    }
?>