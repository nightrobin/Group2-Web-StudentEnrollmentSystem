<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_connection');


$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$suffixname = $_POST['suffixname'];
$lrn = $_POST['lrn'];
$age = $_POST['age'];
$options = $_POST['options'];
$natio = $_POST['natio'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$optionsq = $_POST['optionsq'];
$mmn = $_POST['mmn'];
$madd = $_POST['madd'];
$mcn = $_POST['mcn'];
$moccu = $_POST['moccu'];
$fn = $_POST['fn'];
$fadd = $_POST['fadd'];
$fcn = $_POST['fcn'];
$foccu = $_POST['foccu'];

// database insert SQL code
$sql = "INSERT INTO `tbl_application` (`LastName`, `FirstName`, `MiddleName`, `SuffixName`, 'LRN', 'Age', 'Gender', 'Nationality', 'Address', 'Email', 'PhoneNumber', 'Status', 'MotherName', 'MotherAddress', 'MotherContact', 'MotherOccupation', 'Father', 'FatherAddress', 'FatherContact', 'FatherOccupation') VALUES ('0', '$lastname', '$firstname', '$middlename', '$suffixname', '$lrn', '$age', '$options', '$natio', '$address', '$email' '$phone', '$optionsq', '$mmn', '$madd', '$mcn', '$moccu', '$fn', '$fadd', '$fcn', '$foccu')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>