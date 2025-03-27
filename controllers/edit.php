<?php

include 'connect.php';

// Validate that the request is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Retrieve values sent via Ajax
    $TournamentID = isset($_POST['updateTournamentID']) ? $_POST['updateTournamentID'] : '';
    $TournamentName = isset($_POST['updateTournamentName']) ? $_POST['updateTournamentName'] : '';
    $TournamentCity = isset($_POST['updateTournamentCity']) ? $_POST['updateTournamentCity'] : '';
    $TournamentStartDate = isset($_POST['updateTournamentStartDate']) ? $_POST['updateTournamentStartDate'] : '';
    $TournamentEndDate = isset($_POST['updateTournamentEndDate']) ? $_POST['updateTournamentEndDate'] : '';
    $TournamentMessage = isset($_POST['updateTournamentMessage']) ? $_POST['updateTournamentMessage'] : '';
    $TournamentImage = isset($_POST['updateTournamentImage']) ? $_POST['updateTournamentImage'] : '';

    // Check if the file is uploaded successfully
    if (isset($_FILES['updateTournamentImage']) && $_FILES['updateTournamentImage']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['updateTournamentImage']['tmp_name'];
        $fileName = $_FILES['updateTournamentImage']['name'];

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

    // Perform the database update

    $sql = "UPDATE tournaments 
            SET Tournament_Name = '$TournamentName',
                Tournament_City = '$TournamentCity',
                Tournament_StartDate = '$TournamentStartDate',
                Tournament_EndDate = '$TournamentEndDate',
                Tournament_Message = '$TournamentMessage',
                Tournament_Image = '$TournamentImage'
            WHERE Tournament_ID = $TournamentID";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        echo '<script>';
        echo 'alert("Data updated successfully!");';
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


