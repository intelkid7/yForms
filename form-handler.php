<?php

require_once('C:\xampp\htdocs\wordpress\wp-load.php');
$database_name = get_option("y_forms_database_name");
$table_name = get_option("y_forms_table_name");

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $database_name;

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS `$dbname`. `$table_name` (`email` VARCHAR(30) NULL DEFAULT NULL , `username` VARCHAR(30) NULL DEFAULT NULL , `age` INT UNSIGNED NULL DEFAULT NULL , `gender` CHAR(1) NULL DEFAULT NULL , `mobile_number` INT UNSIGNED NULL DEFAULT NULL , `passcode` VARCHAR(16) NULL DEFAULT NULL ) ENGINE = InnoDB;";
$conn->query($sql);

// Handle form submission
if (isset($_POST['y_forms_data'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $mobile_number = $_POST['mobile_number'];
    $password = $_POST['passcode'];

    $sql = "INSERT INTO `$table_name` (email, username, age, gender, mobile_number, passcode) VALUES ('$email', '$username', '$age', '$gender', '$mobile_number', '$password')";
    $conn->query($sql);

    // Redirect to a thank-you page or display a success message
    $redirectUrl = get_option("y_forms_redirect_url");
    header("Location: $redirectUrl");
    exit;
}

$conn->close();
?>