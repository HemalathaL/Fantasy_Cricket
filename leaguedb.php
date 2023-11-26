<?php
 $conn=  mysqli_connect('localhost', 'root','','cricket');
 if($conn)
 {
        $league=$_POST['league'];
        $matchtype=$_POST['matchtype'];
        $time=$_POST['time'];
        $date=$_POST['date'];
        $capacity=$_POST['capacity'];
        $joinfee=$_POST['joinfee'];
        $query="INSERT INTO `league`(`id`, `league_name`, `matchtype`, `time`, `date`, `capacity`, `joining_fees`) VALUES ('','$league','$matchtype','$time','$date','$capacity','$joinfee')";
      if(mysqli_query($conn, $query))
      {
            echo "<script type='text/javascript'>alert('League Created!!');location='league.php'; </script>";
      }
      else
      {
           echo "<script type='text/javascript'>alert('League Not Created!!'); location='league.php';</script>";
      }
    
 }
 else 
 {
    echo "<script type='text/javascript'>alert('Server Not Connected!!'); location='league.php';</script>";
 }
    
?>
