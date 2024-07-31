<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecomobile";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $country = $_POST["country"];
    $description = $_POST["description"];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["filename"]["name"]);
    move_uploaded_file($_FILES["filename"]["tmp_name"], $targetFile);

    $sql = "INSERT INTO products (name, price, country, image, description) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $price, $country, $targetFile, $description);
    
    if ($stmt->execute() === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

