<?php declare(strict_types=1);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "records";

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
                gwaMath DOUBLE,
                gwaScience DOUBLE,
                gwaEnglish DOUBLE,
                gwaFilipino DOUBLE,
                gwa DOUBLE,
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
                tempID TEXT,
                `password` TEXT
            )";

            if ($conn->query($sql) === TRUE) {
                echo("Added temp_user successfully!");
            } else {
                echo("Table creation unsuccessfully!");
            }

            $sql = "INSERT INTO temp_user(`status`, `tempID`, `password`) VALUES ('', '1', 'admin123')";

            if ($conn->query($sql) === TRUE) {
                echo("Added default data successfully!");
            } else {
                echo("error on default data");
            }

            $conn->close();
        }
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
    function getUser(string $tempuserId, string $temppass)
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
    }
?>