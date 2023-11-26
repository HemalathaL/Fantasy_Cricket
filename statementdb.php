<?php
$conn = mysqli_connect('localhost', 'root', '', 'cricket');

if ($conn) {
    $stmtleag = $_POST['stmtleague'];
    $category = $_POST['category'];
    $stmts = $_POST['statement'];
    $parts = explode("-", $stmtleag);
    $leaguename = $parts[0];
   //print_r($leaguename);
    
    $leagueQuery = "SELECT id FROM league WHERE league_name = '$leaguename'";
    $leagueresult = mysqli_query($conn, $leagueQuery);

    if ($leagueresult->num_rows > 0) {
        $leagueRow = $leagueresult->fetch_assoc();
        $leagueId = $leagueRow["id"];
       // print_r($leagueId);
       
        $query="INSERT INTO `master_match_stme`(`id`, `league_id`, `category`, `statement`) VALUES ('','$leagueId','$category','$stmts')";
        if (mysqli_query($conn, $query)) {
            echo "<script type='text/javascript'>alert('Statement Created!!'); location='statements.php'; </script>";
        } else {
            echo "<script type='text/javascript'>alert('Statement Not Created!!'); location='statements.php';</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('League Not Found!!'); location='statements.php';</script>";
    }
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>


