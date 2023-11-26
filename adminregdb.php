<?php
 $conn=  mysqli_connect('localhost', 'root','','cricket');
 if($conn)
 {
     if(isset($_POST['add']))
     {
        $username=$_POST['user'];
        $mail=$_POST['mail'];
        $mobile=$_POST['mobile'];
        $pass=$_POST['pass'];
        $refno=$_POST['refno'];
        $query="INSERT INTO `admindb`(`Username`, `Email`, `MobileNumber`, `Password`, `RefId`) VALUES ('$username','$mail','$mobile','$pass','$refno')";
      if(mysqli_query($conn, $query))
      {
            echo "<script type='text/javascript'>alert('Admin Registered!!');location='index.php'; </script>";
      }
      else
      {
           echo "<script type='text/javascript'>alert('Admin Not Registered!!'); location='adminreg.php';</script>";
      }
     }
    
 }
 else 
 {
    echo "<script type='text/javascript'>alert('Server Not Connected!!'); location='adminreg.php';</script>";
 }
    
?>
