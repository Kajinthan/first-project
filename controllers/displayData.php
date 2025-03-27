<?php

include 'connect.php';

// Query to retrieve tournament data from the database
$sql = "SELECT `Tournament_ID`, `Tournament_Name`, `Tournament_City`, `Tournament_StartDate`, `Tournament_EndDate`, `Tournament_Message`, `Tournament_Image` FROM tournaments";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-3">';
        echo '  <div class="team-detail wow fadeInUp" data-wow-delay="0.2s">';
        echo '      <img src="images/' . $row["Tournament_Image"] . '" class="img-fluid"/>';
        echo '      <h4 hidden>' . $row["Tournament_ID"] . '</h4>';
        echo '      <h4>' . $row["Tournament_Name"] . '</h4>';
        echo '      <p>' . $row["Tournament_City"] . '</p>';
        echo '      <p>' . $row["Tournament_StartDate"] . '</p>';
        echo '      <p>' . $row["Tournament_EndDate"] . '</p>';
        echo '      <p hidden>' . $row["Tournament_Message"] . '</p>';
        echo '      <div class="row admin-edit-btns">';
        echo '          <div class="col-6">';
        echo '              <a href="#" class="btn-edit" onclick="updateTournament('
            . $row["Tournament_ID"] . ', \'' . $row["Tournament_Name"] . '\', \'' . $row["Tournament_City"] . '\', \''
            . $row["Tournament_StartDate"] . '\', \'' . $row["Tournament_EndDate"] . '\', \''
            . $row["Tournament_Message"] . '\', \'' . $row["Tournament_Image"] . '\')"'
            . ' data-toggle="modal" data-target="#exampleUpdateModalCenter">Update</a>';
        echo '          </div>';
        echo '          <div class="col-6">';
        echo '              <a href="#" data-toggle="modal" data-target="#exampleDeleteModalCenter" onclick="removeTournament('.$row["Tournament_ID"].')" class="btn-delete">Remove</a>';
        echo '          </div>';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
        
    }
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
