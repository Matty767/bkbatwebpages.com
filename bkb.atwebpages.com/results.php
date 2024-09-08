<?php
// Include the correct file or adjust the path
include 'templates/header.php';

// Create connection
$conn = mysqli_connect("localhost", "root", "", "events");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Implement basic cybersecurity measures
function sanitizeInput($input)
{
    global $conn;
    return htmlspecialchars(mysqli_real_escape_string($conn, trim($input)));
}

// Initialize the query
$query = "SELECT * FROM events";

// Check which filter is applied and append to the query
if (isset($_POST['search_event'])) {
    $event_name = sanitizeInput($_POST['event_name']);
    $query .= " WHERE event_name LIKE '%$event_name%'";
} elseif (isset($_POST['search_location'])) {
    $location = sanitizeInput($_POST['location']);
    $query .= " WHERE location LIKE '%$location%'";
} elseif (isset($_POST['filter_date'])) {
    $date = sanitizeInput($_POST['date']);
    $query .= " WHERE date = '$date'";
} elseif (isset($_POST['search_price_band'])) {
    if (isset($_POST['priceBand'])) {
        $price_band = sanitizeInput($_POST['priceBand']);
        $query .= " WHERE priceBand = '$price_band'";
    } else {
        // Handle the case when priceBand is not set
        echo "Please select a Price Band.";
    }
}

$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Search Results:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Event Name</th><th>Date</th><th>Location</th><th>Participation Price</th><th>Spectator Price</th><th>Price Band</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['event_name'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['location'] . "</td>";
            echo "<td>" . $row['participation_prices'] . "</td>";
            echo "<td>" . $row['spectator_prices'] . "</td>";
            echo "<td>" . $row['priceBand'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No results found.</p>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
include 'templates/footer.php';


?>
