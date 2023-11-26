<?php
session_start();

$conn=mysqli_connect('localhost','root','','cricket');

$userid = mysqli_real_escape_string($conn, $_POST['user']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);
$query = "SELECT * FROM admindb WHERE RefID = '$userid' AND password = '$pass'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
   
    $_SESSION['type'] = 'Admin';
    
    echo"<script type='text/javascript'>alert('Welcome Admin !!');location='dashboard.php';</script>";
   
} else {

     echo"<script type='text/javascript'>alert('Invalid Userid and Password !!');location='index.php';</script>";
    
}

mysqli_close($conn);
?>




























