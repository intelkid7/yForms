<?php

require_once('C:\xampp\htdocs\wordpress\wp-load.php');

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wordpress";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if (isset($_POST['y_forms_data'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $mobile_number = $_POST['mobile_number'];
    $password = $_POST['passcode'];

    $sql = "INSERT INTO wp_user_data (email, username, age, gender, mobile_number, passcode) VALUES ('$email', '$username', '$age', '$gender', '$mobile_number', '$password')";
    $conn->query($sql);

    // Redirect to a thank-you page or display a success message
    $redirectUrl = get_option("y_forms_redirect_url");
    header("Location: $redirectUrl");
    exit;
}

$conn->close();
?>