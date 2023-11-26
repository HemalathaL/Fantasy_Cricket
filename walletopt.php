<?php
session_start();
 $conn=mysqli_connect('localhost','root','','cricket');
 if($conn)
 {
    if(isset($_POST['add']))
    {
        $userid=$_SESSION['userid'];
        $deposit=$_POST['deposit'];
        $updateQuery = "UPDATE userdb SET wallet_balance = wallet_balance+'$deposit' WHERE RefId = $userid";

        if ($conn->query($updateQuery) === TRUE) {
            header("Location: wallet.php");
        } else {
            echo "Error updating profile: " . $conn->error;
        }
    
        $conn->close();

    }
 
    if(isset($_POST['minus']))
    {
        $userid=$_SESSION['userid'];
        $withdraw=$_POST['withdraw'];
        $updateQuery = "UPDATE userdb SET wallet_balance = wallet_balance-'$withdraw' WHERE RefId = $userid";

        if ($conn->query($updateQuery) === TRUE) {
            header("Location: wallet.php");
        } else {
            echo "Error updating profile: " . $conn->error;
        }
    
        $conn->close();

    }
 }
?>