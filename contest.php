<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Fantasy Cricket</title>
      <link rel="stylesheet" href="style.css">
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
         <li class="active"><a href="dashboard.php">Dashboard</a></li>
            <li><a href="statements.php">Statements</a></li>
            <li><a href="league.php">Leagues</a></li>
            <li><a href="contest.php">Contestes Checking</a></li>
            <li><a href="players.php">Players</a></li>
            <li><a href="index.php">Log out</a></li>
           
           
         </ul>
      </nav>
      <br><br><br>
      <div class="form-style-5">
        <form action='contestcheck.php' method='POST'>
        <fieldset>
        <legend>Contest Check</legend>
        
        <select id="stmtleag" name="stmtleague">
        <?php
          $conn=  mysqli_connect('localhost', 'root','','cricket');
          
          if($conn)
          {
            $query="SELECT league_name,matchtype,time,date FROM `league`";
            $result=mysqli_query($conn, $query);
            if($result)
            {
               $options = [];

               while ($row = $result->fetch_assoc()) {
                   $matchInfo = $row["league_name"] . " - " . $row["matchtype"] . " - " . $row["date"] . " - " . $row["time"];
                   $options[] = $matchInfo;
               }
           
               $conn->close();
           
               foreach ($options as $option) {
                   echo '<option value="' . $option . '">' . $option . '</option>';
               }
            }
         }
         ?>
         </select>
      
        </fieldset>
       
        
        <input type="submit" value="Check"  style="border-radius:10px;"/>
        </form>
      </div>
      
      <br><br><br>
      <div class="form-style-5">
      
      


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