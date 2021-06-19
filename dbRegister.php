<?php declare(strict_types=1);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "records";

    function insertEntry(string $json)
    {
        /*<!-- Connect to database
        ================================================== -->*/
        $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbName']);
        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
            echo("Cannot connect!");
        }

        $jsonObj = json_encode($json);

        $sql = "INSERT INTO studentInfo 
            VALUES (".
            "'".$jsonObj->$lastName.","
            "'".$jsonObj->$firstName.","
            "'".$jsonObj->$middleName.","
            "'".$jsonObj->$suffix.","
            "'".$jsonObj->$LRN.","
            "'".$jsonObj->$age.","
            "'".$jsonObj->$gender.","
            "'".$jsonObj->$nationality.","
            "'".$jsonObj->$address.","
            "'".$jsonObj->$email.","
            "'".$jsonObj->$phoneNumber.","
            "'".$jsonObj->$status.","
            "'".$jsonObj->$mMaidenName.","
            "'".$jsonObj->$mAddress.","
            "'".$jsonObj->$mContactNumber.","
            "'".$jsonObj->$mOccupation.","
            "'".$jsonObj->$fAddress.","
            "'".$jsonObj->$fContactNumber.","
            "'".$jsonObj->$fOccupation.","
            "'".$jsonObj->$jhsAddress.","
            "'".$jsonObj->$jhsSchoolYear.","
            "'".$jsonObj->$shsAddress.","
            "'".$jsonObj->$shsSchoolYear.","
            "'".$jsonObj->$gwaMath.","
            "'".$jsonObj->$gwaScience.","
            "'".$jsonObj->$gwaEnglish.","
            "'".$jsonObj->$gwaFilipino.","
            "'".$jsonObj->$gwa.","
            "'".$jsonObj->$firstChoice.","
            "'".$jsonObj->$secondChoice.","
            "'".$jsonObj->$thirdChoice.","
            "'".$jsonObj->$password.","
          .");";
        
        
    

        if ($conn->query($sql) === TRUE) {
            $ret = "Succesfully registered!";
        } else {
            $ret = "Failed to register!";
        }
        $conn->close();
        return $ret;
    }

    if (isset($_POST['register'])) {
        echo insertEntry($_POST['register']);
    }
?>