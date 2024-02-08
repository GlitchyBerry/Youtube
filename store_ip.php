<?php
// Get the IP address sent from the client-side JavaScript
$ip_address = $_POST['ip_address'];

// Connect to your database (replace 'your_host', 'your_username', 'your_password', and 'your_database' with your actual database credentials)
$mysqli = new mysqli('your_host', 'your_username', 'your_password', 'your_database');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Prepare SQL statement to insert the IP address into a table (replace 'ip_addresses' and 'ip_address_column' with your actual table and column names)
$sql = "INSERT INTO ip_addresses (ip_address_column) VALUES ('$ip_address')";

// Execute the SQL statement
if ($mysqli->query($sql) === TRUE) {
    echo "IP address stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

// Close the database connection
$mysqli->close();
?>
