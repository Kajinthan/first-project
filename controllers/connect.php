<?php 

$conn = new mysqli('localhost', 'root', '', 'chesstournament');

if(!$conn){
    die("Connection failed: " . mysqli_error($conn));
}

?>