<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Assuming you are passing Tournament_ID as a POST parameter
    if (isset($_POST['deleteTournamentID'])) {
        $tournamentId = $_POST['deleteTournamentID'];
        // Validate and sanitize the input if necessary

        // Use prepared statement to prevent SQL injection
        $sql = "DELETE FROM tournaments WHERE Tournament_ID = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $tournamentId); // 'i' indicates integer type

        if ($stmt->execute()) {
            // Data deleted successfully
            echo '<script>';
            echo 'alert("Record deleted successfully!");';
            echo 'window.location.href = "../index.php#Tournamentsection";'; // Redirect to the desired page
            echo '</script>';
        } else {
            // Failed to delete record
            echo '<script>';
            echo 'alert("Failed to delete record!");';
            echo 'window.location.href = "../index.php#Tournamentsection";';
            echo '</script>';
        }

        $stmt->close();
    } else {
        // Handle the case when deleteTournamentID is not set
        echo '<script>';
        echo 'alert("Invalid request! Delete ID not provided.");';
        echo 'window.location.href = "../index.php#Tournamentsection";';
        echo '</script>';
    }
} else {
    // Handle invalid requests
    echo '<script>';
    echo 'alert("Invalid request method!");';
    echo 'window.location.href = "../index.php#Tournamentsection";';
    echo '</script>';
}
?>
