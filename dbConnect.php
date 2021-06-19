<?php declare(strict_types=1);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "records";

    /*<!-- delete table
    ================================================== -->*/
    function drop()
    {
        // Create connection
        $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password']);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DROP DATABASE IF EXISTS " . $GLOBALS['dbName'];
        if ($conn->query($sql) === FALSE)
        {
            echo("Cannot drop!");
        }
        $conn->close();
    }

    /*<!-- create database and table
    ================================================== -->*/
    function init()
    {
        // Create connection
        $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password']);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create database
        $sql = "CREATE DATABASE IF NOT EXISTS " . $GLOBALS['dbName'];
        if ($conn->query($sql) === TRUE) {
            $validDb = true;
        } else {
            $validDb = false;
        }
        $conn->close();

        if ($validDb)
        {
            $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbName']);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                echo("Cannot connect!");
            }

            // Create tables
            // $sql = "DROP TABLE IF EXISTS studentInfo";
            
            $sql = "CREATE TABLE IF NOT EXISTS studentInfo (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                applicantNumber TEXT,
                lastName TEXT, 
                firstName TEXT,
                middleName TEXT, 
                suffix TEXT,
                LRN TEXT,
                age TEXT,
                gender TEXT,
                nationality TEXT,
                `address` TEXT,
                email TEXT,
                phoneNumber TEXT,
                `status` TEXT,
                mMaidenName TEXT,
                mAddress TEXT,
                mContactNumber TEXT,
                mOccupation TEXT,
                fAddress TEXT,
                fContactNumber TEXT,
                fOccupation TEXT,
                jhsAddress TEXT,
                jhsSchoolYear TEXT,
                shsAddress TEXT,
                shsSchoolYear TEXT,
                gwaMath TEXT,
                gwaScience TEXT,
                gwaEnglish TEXT,
                gwaFilipino TEXT,
                gwa TEXT,
                firstChoice TEXT,
                secondChoice TEXT,
                thirdChoice TEXT,
                `password` TEXT
            )";
            
            if ($conn->query($sql) === TRUE) {
                echo("Created StudInfo successfully!");
            } else {
                echo("Table creation unsuccessfully!");
            }

            $sql = "CREATE TABLE IF NOT EXISTS temp_user (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                `status` TEXT,
                tempID TEXT
            )";

            if ($conn->query($sql) === TRUE) {
                echo("Added temp_user successfully!");
            } else {
                echo("Table creation unsuccessfully!");
            }

            $sql = "INSERT INTO temp_user(`status`, `tempID`) VALUES ('active', '0')";

            if ($conn->query($sql) === TRUE) {
                echo("Added default data successfully!");
            } else {
                echo("error on default data");
            }

            defaultData();
            $conn->close();
        }
        
    }

    function defaultData()
    {
        $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbName']);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                echo("Cannot connect!");
            }

            $sql = "INSERT INTO studentInfo (
                `lastName`, 
                `firstName`, 
                `middleName`, 
                `suffix`, 
                `LRN`, 
                `age`, 
                `gender`, 
                `nationality`, 
                `address`, 
                `email`, 
                `phoneNumber`, 
                `status`, 
                `applicantNumber`
                `mMaidenName`, 
                `mAddress`, 
                `mContactNumber`, 
                `mOccupation`, 
                `fName`, 
                `fAddress`, 
                `fContactNumber`, 
                `fOccupation`,
                `jhsAddress`, 
                `jhsSchoolYear`, 
                `shsAddress`, 
                `shsSchoolYear`,
                `firstChoice`,
                `secondChoice`, 
                `thirdChoice`,
                `gwaMath`, 
                `gwaScience`,
                `gwaEnglish`, 
                `gwaFilipino`, 
                `gwa`,
                `password`
                )

            VALUES (
                'Doe',
                'John',
                'Michael'
                'Jr.', 
                '111111111111',
                '22', 
                'Male', 
                'American', 
                'John Doe 123 Main St Anytown, USA', 
                'johndoe@email.com', 
                '(111) 111-1111', 
                'Single',
                '1234'
                'Jane Doe',
                'Jane Doe 123 Main St Anytown, USA',
                '(222) 222-2222', 
                'None', 
                'Michael Doe', 
                'Michael Doe 123 Main St Anytown, USA', 
                '(333) 333-3333',
                'None',
                'Junior High School, USA',
                '2010-2014', 
                'Senior High School, USA', 
                '2014-2016', 
                'None', 
                'None', 
                'None', 
                '99.9', 
                '99.9', 
                '99.9', 
                '99.9', 
                '0', 
                '1234'
                )";
    }

    function generateApplicantNo()
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

    $sql = "SELECT MAX(`id`) FROM studentInfo";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $generated = (is_null($row["id"])) ? 0 : (int)$row["id"];
        }
    }
    else 
    {
        $generated = 0;    
    }
        $conn->close();

    

    $applicantNo = "MSU2021-00" .$generated + 1;
    return $applicantNo;
    }

    /*
    function getTemplate()
    {
        $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbName']);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM aaa";
        if ($conn->query($sql) === TRUE) {
            echo("Added temp_user successfully!");
        } else {
            echo("Table creation unsuccessfully!");
        }
        $conn->close();
    }
    */
    /*function temp_user(string $tempuserId, string $temppass)
    {
        $jsonResult["tempID"] = "";
        $jsonResult["status"] = "";
        $jsonResult["error"] = "";
        $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbName']);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            $jsonResult["error"] = "Connection refused!";
            return json_encode($jsonResult);
        }
        $sql = "SELECT tempID, `status` FROM temp_user WHERE `tempID`='".$tempuserId."' AND `password`='".$temppass."' LIMIT 1;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $jsonResult["tempID"] = (is_null($row["tempID"])) ? "" : $row["tempID"];
                $jsonResult["status"] = (is_null($row["status"])) ? "" : $row["status"];
            }
        }
        $conn->close();
        return json_encode($jsonResult);
    }*/
?>