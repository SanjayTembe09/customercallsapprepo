<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<!-- Default form register -->
<div  class="container">
	<div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
        </div>    
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <form class="text-center border border-light p-5" action="#!" method="POST">

                <p class="h4 mb-4">Customer Sign up</p>

                <!--<div class="border border-primary">-->

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- Country Code -->
                            <input type="text" id="defaultRegisterFormCountryCode" name="defaultRegisterFormCountryCode" class="form-control" placeholder="Country Code">
                        </div>

                        <div class="col">
                            <!-- Phone No -->
                            <input type="text" id="defaultRegisterFormPhoneNo" name="defaultRegisterFormPhoneNo" class="form-control" placeholder="Phone No">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- First name -->
                            <input type="text" id="defaultRegisterFormFirstName" name="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="text" id="defaultRegisterFormLastName" name="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- Flat No -->
                            <input type="text" id="defaultRegisterFormFlatNo" name="defaultRegisterFormFlatNo" class="form-control" placeholder="Flat No">
                        </div>
                        <div class="col">
                            <!-- Building name -->
                            <input type="text" id="defaultRegisterFormBuildingName" name="defaultRegisterFormBuildingName" class="form-control" placeholder="Building name">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- Floor No -->
                            <input type="text" id="defaultRegisterFormFloorNo" name="defaultRegisterFormFloorNo" class="form-control" placeholder="Floor No">
                        </div>
                        <div class="col">
                            <!-- Wing -->
                            <input type="text" id="defaultRegisterFormWing" name="defaultRegisterFormWing" class="form-control" placeholder="Wing">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- Area name -->
                            <input type="text" id="defaultRegisterFormAreaName" name="defaultRegisterFormAreaName" class="form-control" placeholder="Area name">
                        </div>
                        <div class="col">
                            <!-- Landmark -->
                            <input type="text" id="defaultRegisterFormLandmark" name="defaultRegisterFormLandmark" class="form-control" placeholder="Landmark">
                        </div>
                    </div>

                    <!-- E-mail -->
                    <!--<input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">-->

                    <!-- Password -->
                    <!--<input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                    <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        At least 8 characters and 1 digit
                    </small> -->

                    <!-- Phone number -->
                    <!--<input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                        Optional - for two step authentication
                    </small> -->

                    <!-- Newsletter -->
                    <!--<div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
                    </div> -->

                    <!-- Sign up button -->
                    <button class="btn btn-info my-4 btn-block" type="submit" id="submit" name="submit">Sign in</button>

                    <!-- Social register -->
                    <!--<p>or sign up with:</p>

                    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                    <hr> -->

                    <!-- Terms of service -->
                    <!--<p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="" target="_blank">terms of service</a> -->
                <!--</div>-->
            </form>
        </div> 
    </div>
</div>
<!-- Default form register -->

</body>
</html>

<?php

require 'vendor/autoload.php';

use App\SQLiteConnection;
use App\SQLiteInsert;

$pdo = (new SQLiteConnection())->connect();
$sqlite = new SQLiteInsert($pdo);

if(isset($_POST['submit'])) {
        echo("Form Successfully Submitted");

        $countryCode = $_POST['defaultRegisterFormCountryCode'];
        $phoneNo = $_POST['defaultRegisterFormPhoneNo'];
        $firstName = $_POST['defaultRegisterFormFirstName'];
        $lastName = $_POST['defaultRegisterFormLastName'];
        $flatNo = $_POST['defaultRegisterFormFlatNo'];
        $buildingName = $_POST['defaultRegisterFormBuildingName'];
        $floorNo = $_POST['defaultRegisterFormFloorNo'];
        $wing = $_POST['defaultRegisterFormWing'];
        $areaName = $_POST['defaultRegisterFormAreaName'];
        $landmark = $_POST['defaultRegisterFormLandmark'];


        echo($countryCode . '***' . $phoneNo . '***' . $firstName . '***' . $lastName);
        echo("</br>");
        echo($flatNo . '***' . $buildingName . '***' . $floorNo . '***' . $wing);
        echo("</br>");
        echo($areaName . '***' . $landmark);

        $uuid = '12345678901ABCDEFGHIJK';
        $clientName = $firstName . ' ' . $lastName;
        $clientContactNo = $countryCode . $phoneNo;
        $clientAddressLine1 = $flatNo. ' ' . $buildingName . ', ' . $floorNo . ' ' . $wing;
        $clientAddressLine2 = $areaName . ' ' . $landmark;
        $clientArea = $areaName;

        $sqlite->insertClient($uuid, $clientName, $clientContactNo, $clientAddressLine1, $clientAddressLine2, $clientArea);

        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpassword = '';
        $database = 'customercalls';

        $mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $database);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }

        $sql = "INSERT INTO client(clientId, clientName, clientContactNumber, clientAddressLine1, clientAddressLine2, clientArea) 
         VALUES ('$uuid','$clientName','$clientContactNo','$clientAddressLine1','$clientAddressLine2','$clientArea')";

    $result = $mysqli->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $mysqli->error;

    } 

    $mysqli->close();
}
?>