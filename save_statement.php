<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = mysqli_connect('localhost', 'username', 'password', 'your_database');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $stmtleag = $_POST['stmtleague'];
    $statement = mysqli_real_escape_string($conn, $_POST['statement']);
    $parts = explode("-", $stmtleag);
    $leaguename = $parts[0];
   //print_r($leaguename);
    
    $leagueQuery = "SELECT id FROM league WHERE league_name = '$leaguename'";
    $leagueresult = mysqli_query($conn, $leagueQuery);

    if ($leagueresult->num_rows > 0) {
        $leagueRow = $leagueresult->fetch_assoc();
        $leagueId = $leagueRow["id"];
    $insertQuery = "INSERT INTO userselection (`league_id`,`league_name`,`user_selected_option`) VALUES ($leagueId,$$stmtleag,$statement')";

    if (mysqli_query($conn, $insertQuery)) {
        echo "Statement inserted successfully.";
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
    }
    }
    mysqli_close($conn);
}
?>
