<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
    #AltPhone1 {
        display:none;
    }

    #AltPhone2 {
        display:none;
    }
 </style>   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function() {
        $("input[name='optradio']").click(function() {
            if ($("#ph1Yes").is(":checked")) {
            $("#AltPhone1").show();
            } else {
            $("#AltPhone1").hide();
            }
        });

        $("input[name='altphradio']").click(function() {
            if ($("#ph2Yes").is(":checked")) {
            $("#AltPhone2").show();
            } else {
            $("#AltPhone2").hide();
            }
        });
    });
</script>
</head>
<body>
<!-- Default form register -->
<div  class="container">
	<div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
        </div>    
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <form class="text-center border border-light p-5" action="#!" method="POST">

                <p class="h4 mb-4">Restaurant Sign up</p>

                <!--<div class="border border-primary">-->

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- Owner Name -->
                            <input type="text" id="defaultRegisterFormOwnerName" name="defaultRegisterFormOwnerName" class="form-control" placeholder="Owner Name">
                        </div>

                        <div class="col">
                            <!-- Phone No -->
                            <input type="text" id="defaultRegisterFormOwnerPhoneNo" name="defaultRegisterFormOwnerPhoneNo" class="form-control" placeholder="Owner Phone No">
                        </div>
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <!-- Restaurant name -->
                            <input type="text" id="defaultRegisterFormRestaurantName" name="defaultRegisterFormRestaurantName" class="form-control" placeholder="Restaurant name">
                        </div>
                        
                    </div>

                    <div class="form-row my-4">
                        <div class="col">
                            <!-- Address Line 1 -->
                            <input type="text" id="defaultRegisterFormAddressLine1" name="defaultRegisterFormAddressLine1" class="form-control" placeholder="Address Line 1">
                        </div>
                    </div>
                    
                    <div class="form-row my-4">
                        <div class="col">
                            <!-- Address Line 2 -->
                            <input type="text" id="defaultRegisterFormAddressLine2" name="defaultRegisterFormAddressLine2" class="form-control" placeholder="Address Line 2">
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- Phone No -->
                            <input type="text" id="defaultRegisterFormRPhoneNo" name="defaultRegisterFormRPhoneNo" class="form-control" placeholder="Restaurant Phone No">
                        </div>

                    </div>
                    
                    <div class="form-row mb-4">
                        
                        <div class="col">
                            <p>Add More Phone ?</p>
                        </div>

                        <div class="col form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" id="ph1Yes" class="form-check-input" name="optradio">Yes
                            </label>
                        </div>

                        <div class="col form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" id="ph1No" class="form-check-input" name="optradio">No
                            </label>
                        </div>

                    </div>

                    <div class="form-row mb-4" id="AltPhone1">

                        <div class="col">
                                <input type="text" class="form-control" name="clientPhoneNo1" placeholder="Alternate Phone 1">
                        </div>

                        <div class="form-row mb-4">

                            <div class="col">
                                <p>Add More Phone ?</p>
                            </div>

                            <div class="col form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" id="ph2Yes" class="form-check-input" name="altphradio">Yes
                                </label>
                            </div>

                            <div class="col form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" id="ph2No" class="form-check-input" name="altphradio">No
                                </label>
                            </div>

                        </div>    

                    </div> 
                    
                    <div class="form-row mb-4" id="AltPhone2">

                        <div class="col">
                            <input type="text" class="form-control" name="clientPhoneNo2" placeholder="Alternate Phone 2">
                        </div>

                    </div>

                    <!--<div class="form-row mb-4">
                        <div class="col">
                            <!-- Area name -->
                            <!--<input type="text" id="defaultRegisterFormAreaName" name="defaultRegisterFormAreaName" class="form-control" placeholder="Area name">
                        </div>
                        <div class="col">
                            <!-- Landmark -->
                            <!--<input type="text" id="defaultRegisterFormLandmark" name="defaultRegisterFormLandmark" class="form-control" placeholder="Landmark">
                        </div>
                    </div>-->

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

<?php

require 'vendor/autoload.php';

use App\SQLiteConnection;
use App\SQLiteInsert;

$pdo = (new SQLiteConnection())->connect();
$sqlite = new SQLiteInsert($pdo);

if(isset($_POST['submit'])) {
        echo("Form Successfully Submitted");

        $ownerName = $_POST['defaultRegisterFormOwnerName'];
        $ownerContactNo = $_POST['defaultRegisterFormOwnerPhoneNo'];
        $restaurantName = $_POST['defaultRegisterFormRestaurantName'];
        $restaurantAddressLine1 = $_POST['defaultRegisterFormAddressLine1'];
        $restaurantAddressLine2 = $_POST['defaultRegisterFormAddressLine2'];
        $restaurantContactNo = $_POST['defaultRegisterFormRPhoneNo'];

        //echo($ownerName . ' ' . $ownerPhoneNo. ' ' . $restaurantName . ' ' . $restaurantAddressLine1 . ' ' . $restaurantAddressLine2 . ' ' . $restaurantPhoneNo);

        $uuid = '6542312345678901ABCDEFGHIJKLMNOPQRSTU';
        $ruuid = '87678546abcd9876wert6785JLKDEFGHIJKL';

        $sqlite->insertOwner($uuid, $ownerName, $ownerContactNo);

        echo "New Owner record created successfully.";

        $sqlite->insertRestaurant($ruuid, $restaurantName, $restaurantAddressLine1, $restaurantAddressLine2, $restaurantContactNo);

        echo "New Restaurant record created successfully.";

        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpassword = '';
        $database = 'customercalls';

        $mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $database);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }

         //$uuuid = $mysqli->query("SELECT uuid()")->fetch_row()[0];

        // echo('The Value Of Unique Id = ' . $uuuid);

         $osql = "INSERT INTO owner(ownerId, ownerName, ownerContactNumber) 
         VALUES ('$uuid','$ownerName','$ownerContactNo')";

    $result = $mysqli->query($osql);

    if ($result == TRUE) {

      echo "New Owner Record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $mysqli->error;

    } 

    $rsql = "INSERT INTO restaurant(restaurantId, restaurantName, restaurantAddressLine1, restaurantAddressLine2, restaurantContactNumber) 
         VALUES ('$ruuid','$restaurantName','$restaurantAddressLine1', '$restaurantAddressLine2', '$restaurantContactNo')";

    $result = $mysqli->query($rsql);

    if ($result == TRUE) {

      echo "New Restaurant Record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $mysqli->error;

    }

}

?>
</body>
</html>