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
                 <li><a href="refpg.php">Referral Id</a></li>
                 <li><a href="#">Help</a></li>
                 <li><a href="logout.php">Log out</a></li>
               </ul>
           </li>
           <li><a href="joinleague.php">Join League</a></li>
           <li><a href="language.php">Language</a></li>
           <li><a href="usercontest.php">My Contestes</a></li>
           <li><a href="wallet.php">Wallet Options</a></li>
           <li><a href="profile.php">Profile</a></li>
          
           
         </ul>
      </nav>
      
      <br><br><br>
      <div class="">
        <div class="form-style-5">
            <form action="updateprofile.php" method="POST" enctype="multipart/form-data">
            <fieldset>
            <legend>Profile</legend>
            <?php
            session_start();
               echo "Welcome". $_SESSION['userid'];
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
                  echo $userData['Username'];
                 $conn->close();
               }
            ?>
            <br><br>
             
            </fieldset>
            <input type="text" name="user" placeholder="Name" value="<?php echo $userData['Username']; ?>"disabled>
            <label>Name</label>
            <label>Password</label>
            <input type="text" name="pass" placeholder="Password" value="<?php echo $userData['Password']; ?>">
            <label>Confirm Password</label>
            <input type="text" name="pass1" placeholder="Confirm Password" value="<?php echo $userData['confirm_pass']; ?>">
            <label>Wallet Balance</label>
            <input type="text" name="wallet" placeholder="Wallet Balance" value="<?php echo $userData['wallet_balance']; ?>" disabled>
            <label>Points Scored</label>
            <input type="text" name="points" placeholder="Points Scored" value="<?php echo $userData['points']; ?>" disabled>
            <label>Coins Earned</label>
            <input type="text" name="coins" placeholder="Coins Earned" value="<?php echo $userData['coins']; ?>" disabled>
            <label>Image</label>
            <input type="file" name="img" placeholder="Upload Image" >
          <?php echo "<img src='" . $userData['image'] . "'><br>";?>
            <br><br>
            <input type="submit" value="Update Profile"  style="border-radius:10px;"/>
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