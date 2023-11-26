<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
   <html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Fantasy Cricket</title>
      <link rel="stylesheet" href="style.css">
      <link rel="icon" type="cricket/jfif" sizes="96x96" href="login.jfif">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   </head>
   <style>
   #firsttable {
            border-collapse: collapse;
            width: 100%;
            margin-right: 40px;
            border: 1px solid #ccc;
           
        }
   #firsttable th , #firsttable td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
      
        legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
        </style>
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
      <div class="content">
        <div class="container">
            <div class="row">         
                <div class="col-md-10 col-md-offset-2" id="form" >     
                              
           <div class="row">
          <div class="col-md-10">
              <legend style="color: rgb(247,137,35);text-align:center;">Upcoming Matches</legend>   <br>
         </div>
            <div class="col-md-10">  
               <?php
                  $conn=  mysqli_connect('localhost', 'root','','cricket');
                  if($conn)
                  {
                     $query="Select * from league";
                     $result=mysqli_query($conn, $query);
                     if($result)
                     {
                        echo "<table id='firsttable'>";
                        echo "<tr><th>Id</th><th>Legue Name</th><th>Action</th></tr>";
                        
                        while ($row = $result->fetch_assoc()) {
                           echo "<tr>";
                           echo "<td>" . $row["id"] . "</td>";
                           echo "<td>" . $row["league_name"] . "</td>";
                           echo '<td><a href="joinleague.php" style="color: rgb(247,137,35);text-decoration:none;background-color:transparent;font-weight:200px;">Join Now</a></td>';

                           

                           echo "</tr>";
                        }
                        
                        echo "</table>";
                     }
                  }
               ?>
               

               </div>
            
              </div>
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