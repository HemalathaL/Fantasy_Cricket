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
        $pass1=$_POST['pass1'];
        $refno=$_POST['refno'];
        $query="INSERT INTO `userdb`(`Username`, `Email`, `MobileNumber`, `Password`, `RefId`, `wallet_balance`, `points`, `coins`, `image`, `confirm_pass`) VALUES ('$username','$mail','$mobile','$pass','$refno','','','','','$pass1')";
       
      if(mysqli_query($conn, $query))
      {
            echo "<script type='text/javascript'>alert('User Registered!!');location='user.php'; </script>";
      }
      else
      {
           echo "<script type='text/javascript'>alert('User Not Registered!!'); location='userreg.php';</script>";
      }
     }
    
 }
 else 
 {
    echo "<script type='text/javascript'>alert('Server Not Connected!!'); location='userreg.php';</script>";
 }
    
?>
