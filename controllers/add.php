<?php

include 'connect.php';

// Validate that the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Retrieve values sent via Ajax
    $TournamentName = isset($_POST['TournamentName']) ? $_POST['TournamentName'] : '';
    $TournamentCity = isset($_POST['TournamentCity']) ? $_POST['TournamentCity'] : '';
    $TournamentStartDate = isset($_POST['TournamentStartDate']) ? $_POST['TournamentStartDate'] : '';
    $TournamentEndDate = isset($_POST['TournamentEndDate']) ? $_POST['TournamentEndDate'] : '';
    $TournamentMessage = isset($_POST['TournamentMessage']) ? $_POST['TournamentMessage'] : '';
    $TournamentImage = isset($_POST['TournamentImage']) ? $_POST['TournamentImage'] : '';

    // Check if the file is uploaded successfully
    if (isset($_FILES['TournamentImage']) && $_FILES['TournamentImage']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['TournamentImage']['tmp_name'];
        $fileName = $_FILES['TournamentImage']['name'];

        // Move the uploaded file to a destination directory
        $destination = "../images/" . $fileName;
        move_uploaded_file($tempName, $destination);

        // File path to be stored in the database
        $TournamentImage = $fileName;
    } else {
        // Handle the case when no file is uploaded or an error occurs
        echo "Error: Failed to upload the image. ";
        exit();
    }

    // Perform further processing or validation as needed
    // For example, you might want to check if any field is empty
    if (empty($TournamentName) || empty($TournamentCity) || empty($TournamentStartDate) || empty($TournamentEndDate) || empty($TournamentMessage) || empty($TournamentImage)) {
        echo "Error: All fields are required";
        exit();
    }


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform the database insertion
    $sql = "INSERT INTO tournaments (Tournament_Name, Tournament_City, Tournament_StartDate, Tournament_EndDate, Tournament_Message, Tournament_Image) 
            VALUES ('$TournamentName', '$TournamentCity', '$TournamentStartDate', '$TournamentEndDate', '$TournamentMessage', '$TournamentImage')";
    
    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        echo '<script>';
        echo 'alert("Data inserted successfully!");';
        echo 'window.location.href = "../index.php#Tournamentsection";';
        echo '</script>';
    } else {
        // Error in insertion
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    // If the request is not a POST request, return an error
    echo "Error: Invalid request method";
}
?>
