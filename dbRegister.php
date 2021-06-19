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
            "'".$jsonObj->$lastName."',"
            "'".$jsonObj->$firstName.","
            "'".$jsonObj->$middleName.","
            .");";
        
        middleName
        suffix
        LRN
        age
        gender
        nationality
        address
        email
        phoneNumber
        status
        mMaidenName
        mAddress
        mContactNumber
        mOccupation
        fAddress
        fContactNumber
        fOccupation
        jhsAddress
        jhsSchoolYear
        shsAddress
        shsSchoolYear
        gwaMath
        gwaScience
        gwaEnglish
        gwaFilipino
        gwa
        firstChoice
        secondChoice
        thirdChoice
        password

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