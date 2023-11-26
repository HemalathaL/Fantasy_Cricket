<?php
$conn=mysqli_connect('localhost','root','','cricket');
if($conn)
{
    $stmtleag = $_POST['stmtleague'];
    $selectedRows = $_POST['selected_rows'];
    $parts = explode("-", $stmtleag);
    $leaguename = $parts[0];
  
    
    $leagueQuery = "SELECT id FROM league WHERE league_name = '$leaguename'";
    $leagueresult = mysqli_query($conn, $leagueQuery);

    if ($leagueresult->num_rows > 0) {
        $leagueRow = $leagueresult->fetch_assoc();
        $leagueId = $leagueRow["id"];
        $insertValues = array();
        foreach ($selectedRows as $value) {
            $value = mysqli_real_escape_string($conn, $value);
            $insertValues[] = "('$value')";
        }// Insert the selected row into the database
            $insertQuery = "INSERT INTO userselection (league_id,league_name,user_selected_option) VALUES ('$leagueId','$stmtleag','$insertvalues')";
            if ($conn->query($insertQuery) === TRUE) {
                echo "<script type='text/javascript'>alert('Row inserted Successfully!!'); location='language.php'; </script>";
            } else {
                echo "Error inserting row: " . $conn->error;
            }
        
    }
   
}

$conn->close();
?>
