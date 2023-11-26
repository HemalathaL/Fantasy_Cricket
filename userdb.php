<?php
session_start();

$conn=mysqli_connect('localhost','root','','cricket');
$userid = mysqli_real_escape_string($conn, $_POST['user']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
$query = "SELECT * FROM userdb WHERE RefID = '$userid' AND Password = '$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['userid'] = $userid;
    $_SESSION['type'] = 'User';
    
    echo"<script type='text/javascript'>alert('Welcome User !!');location='userdashboard.php';</script>";
   
} else {
     echo"<script type='text/javascript'>alert('Invalid Userid and Password !!');location='user.php';</script>";
    
}
mysqli_close($conn);
?>




























