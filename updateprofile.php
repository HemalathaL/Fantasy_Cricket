<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn=mysqli_connect('localhost','root','','cricket');
    $userid=$_SESSION['userid'];
      
      echo "Welcome". $_SESSION['userid'];
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $conpass = mysqli_real_escape_string($conn, $_POST['pass1']);
    $filename=$_FILES["img"]["name"];
    $tempname=$_FILES["img"]["tmp_name"];
    $folder="upload/".$filename;
  move_uploaded_file($tempname,$folder);
  //$image=file_get_content($filename);

    // Update user's profile data in the database
    $updateQuery = "UPDATE userdb SET Password = '$pass', confirm_pass = '$conpass' ,image='$filename' WHERE RefId = $userid";

    if ($conn->query($updateQuery) === TRUE) {
        header("Location: profile.php");
    } else {
        echo "Error updating profile: " . $conn->error;
    }

    $conn->close();
}
?>
