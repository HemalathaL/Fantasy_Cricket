<?php
// Get the selected league value from the AJAX request
$selectedLeague = $_GET['selectedLeague'];

// Simulate fetching data from a database based on the selected league
// Replace this with your actual data retrieval logic
$conn = mysqli_connect('localhost', 'root', '', 'cricket');
$query = "SELECT id, league_name FROM league WHERE league_name = '$selectedLeague'";
$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $leagueInfo = array(
        'league_id' => $row['id'],
        'league_name' => $row['league_name']
    );

    // Convert the data to JSON and send it back to the client
    echo json_encode($leagueInfo);
} else {
    // Return an empty JSON object if league info is not found
    echo json_encode(array());
}
?>