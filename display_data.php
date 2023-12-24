<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hossam";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data from the peanuts_info table
$sql = "SELECT title, image, description FROM peanuts_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<img src='" . $row["image"] . "' height='300px' width='300'>";
        echo "<p>" . $row["description"] . "</p>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>
