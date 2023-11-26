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
         <li class="active"><a href="dashboard.php">Dashboard</a></li>
            <li><a href="statements.php">Statements</a></li>
            <li><a href="league.php">Leagues</a></li>
            <li><a href="contest.php">Contestes Checking</a></li>
            <li><a href="players.php">Players</a></li>
            <li><a href="index.php">Log out</a></li>
           
           
         </ul>
      </nav>
      <div class="content">
         <div class="form-style-5">
            <form action="leaguedb.php" method="POST" enctype="multipart/form-data">
          <fieldset>
         <legend>Create League</legend>
         <input type="text" name="league" placeholder="League Name">
         
         
         <select id="job" name="matchtype">
         
         <option value="ODI">ODI</option>
         <option value="T20">T20</option>
         <option value="Test">Test</option>
         
         </select>      
         </fieldset>
         <input type="time" name="time" placeholder="Time">
         <input type="date" name="date" placeholder="Date">
         <input type="number" name="capacity" placeholder="Capacity">
         <input type="text" name="joinfee" placeholder="Joining Fee">
         
         <input type="submit" value="Create"  style="border-radius:10px;"/>
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