<?php
$conn = new mysqli("localhost", "root", "", "dbs");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST["fname"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$temp = $_POST["temp"];
$pulse = $_POST["pulse"];
$bp = $_POST["bp"];
$r = $_POST["r"];
$spo = $_POST["spo"];
$bs = $_POST["bs"];
$consult = $_POST["consult"];

$sql = "INSERT INTO patient_details (fname, age, phone, gender, temp, pulse, bp, r, spo, bs, consult)
        VALUES ('$fname', '$age', '$phone', '$gender', '$temp', '$pulse', '$bp', '$r', '$spo', '$bs', '$consult')";

if ($conn->query($sql) === TRUE) {
	
	header("Location:index.php");
	
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>