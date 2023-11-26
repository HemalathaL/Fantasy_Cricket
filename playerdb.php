<?php
$conn = mysqli_connect('localhost', 'root', '', 'cricket');
if ($conn) {
    $stmtleag = $_POST['stmtleague'];
    $batter = $_POST['batter'];
    $bowler = $_POST['bowler'];
    $wicketkeeper = $_POST['wicketkeeper'];
    $allrounder = $_POST['allrounder'];

    $parts = explode("-", $stmtleag);
    $leaguename = $parts[0];

    $leagueQuery = "SELECT id FROM league WHERE league_name = '$leaguename'";
    $leagueresult = mysqli_query($conn, $leagueQuery);

    if ($leagueresult->num_rows > 0) {
        $leagueRow = $leagueresult->fetch_assoc();
        $leagueId = $leagueRow["id"];

        $update_query = "UPDATE `master_match_stme` SET statement = CASE 
                            WHEN category = 'AR' THEN REPLACE(statement, 'All Rounder', '$allrounder')
                            WHEN category = 'BT' THEN REPLACE(statement, 'Batter', '$batter')
                            WHEN category = 'BW' THEN REPLACE(statement, 'Bowler', '$bowler')
                            WHEN category = 'WT' THEN REPLACE(statement, 'Wicketkeeper', '$wicketkeeper')
                        END
                        WHERE league_id = '$leagueId'";

        if (mysqli_query($conn, $update_query)) {
            echo "<script type='text/javascript'>alert('Successfully Players Updated!!'); location='players.php'; </script>";
        } else {
            echo "Error updating statements: " . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>
















