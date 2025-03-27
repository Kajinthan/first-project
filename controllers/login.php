<?php
session_start(); // Start session

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['userName'];
    $password = $_POST['userPassword'];

    // Validate and sanitize input if necessary

    // Check user credentials
    $sql = "SELECT * FROM systemuser WHERE User_Name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if ($password === $row['User_Password']) {
            // Password is correct, set session and local storage, then redirect
            $_SESSION['userName'] = $username;            
            $_SESSION['userType'] = $row['User_Type'];

            // Set user type in local storage
            echo '<script>';
            echo 'localStorage.setItem("userType", "' . $row['User_Type'] . '");';   
            echo 'localStorage.setItem("userName", "' . $row['User_Name'] . '");';             
            echo 'window.location.href = "../index.php";';
            echo '</script>';
            exit();
        }
    }

    echo '<script>';
    echo 'alert("Invalid username or password!");';             
    echo 'window.location.href = "../login.php";';
    echo '</script>';
    $stmt->close();
}
?>
