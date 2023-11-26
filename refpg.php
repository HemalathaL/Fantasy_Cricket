<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Fantasy Cricket</title>
      <link rel="stylesheet" href="style.css">
      <link rel="icon" type="cricket/jfif" sizes="96x96" href="login.jfif">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            Fantasy Cricket
         </div>
         <ul>
         <li class="active"><a href="userdashboard.php">Dashboard</a></li>
           
           <li>
              <a href="#" class="serv-btn">Settings
              <span class="fas fa-caret-down second"></span>
              </a>
              <ul class="serv-show">
                 <li><a href="walletbalance.php">Wallet Balance</a></li>
                 <li><a href="refid.php">Referral Id</a></li>
                 <li><a href="#">Help</a></li>
                 <li><a href="logout.php">Log out</a></li>
               </ul>
           </li>
           <li><a href="joinleague.php">Join League</a></li>
           <li><a href="language.php">Language</a></li>
           <li><a href="#">My Contestes</a></li>
           <li><a href="wallet.php">Wallet Options</a></li>
           <li><a href="profile.php">Profile</a></li>
           
           
         </ul>
      </nav>
      <div class="content">
         <div class="form-style-5" style="padding:45px;">
            <form action="#" method="POST" enctype="multipart/form-data">
          <fieldset>
         <legend><?php  session_start();  $userid=$_SESSION['userid']; echo "Reference ID for ". $_SESSION['userid'];?></legend><br><br>
         <?php
        //  session_start();

         $conn=mysqli_connect('localhost','root','','cricket');
         if($conn)
         {  
            $userid=$_SESSION['userid'];
            $query = "SELECT * FROM userdb WHERE RefId = $userid";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
               $userData = $result->fetch_assoc();
            } else {
               echo "User profile not found.";
            }
            $conn->close();
         }

         ?>
         <input type="text" name="league" placeholder="Referal ID" value="<?php echo $userData['RefId']; ?>"disabled>
         
         
        
            </form>
         </div>
      </div>
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
   </body>
</html>