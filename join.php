<?php
 $conn=mysqli_connect('localhost','root','','cricket');
 session_start();
 if($conn)
 {

   if (isset($_GET['value'])) {
    $league = $_GET['value'];
    //echo "Value passed: " . $league;
}
$userid=$_SESSION['userid'];
$query="SELECT * FROM `league` WHERE id='$league'";
$uquery="SELECT * FROM `userdb` WHERE RefId='$userid'";
$leagueresult = mysqli_query($conn, $query);
$userresult= mysqli_query($conn, $uquery);
print_r($userresult);
if ($leagueresult->num_rows > 0 && $userresult->num_rows > 0 ) {
    $leagueRow = $leagueresult->fetch_assoc();
    $userRow=$userresult->fetch_assoc();
    $userid=$userRow['RefId'];
    $username=$userRow['Username'];
    $leaguefees = $leagueRow["joining_fees"];
    $leaguedate=$leagueRow["date"];
    $leaguename=$leagueRow["league_name"];
    $leaguetime=$leagueRow["time"];
    $leaguecapacity=$leagueRow['capacity'];
    $leaguematch=$leagueRow['matchtype'];
    $userid=$_SESSION['userid'];
       
        $updateQuery = "UPDATE userdb SET wallet_balance = wallet_balance-'$leaguefees' WHERE RefId = $userid";
        $insertQuery="INSERT INTO `user_join`(`RefId`,`Username`,`league_id`, `league_name`, `matchtype`, `time`, `date`, `joining_fees`) VALUES ('$userid','$username','$league','$leaguename',' $leaguematch','$leaguetime','$leaguetime','$leaguefees')";

        if ($conn->query($updateQuery) && $conn->query($insertQuery)=== TRUE) {
            echo "<script type='text/javascript'>alert('Amount Deducted!!');location='joinleague.php'; </script>";
          
        } else {
            echo "Error updating profile: " . $conn->error;
        }
 }
}
?>

   