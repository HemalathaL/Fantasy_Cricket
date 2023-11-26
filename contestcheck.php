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
         <li class="active"><a href="#">Dashboard</a></li>
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
      
      <?php
session_start();
        
$conn = mysqli_connect('localhost', 'root', '', 'cricket');
    
$stmtleag = $_POST['stmtleague'];
$parts = explode("-", $stmtleag);
$leaguename = $parts[0];
print_r($leaguename);

$leagueQuery = "SELECT id FROM league WHERE league_name = '$leaguename'";
$leagueresult = mysqli_query($conn, $leagueQuery);

if ($leagueresult->num_rows > 0) {
    $leagueRow = $leagueresult->fetch_assoc();
    $league_id = $leagueRow["id"];
// print_r($leagueId);


} else {
    echo "<script type='text/javascript'>alert('League Not Found!!'); location='contest.php';</script>";
}

    $conn = mysqli_connect('localhost', 'root', '', 'cricket');
    $score=0;

    //$league_id=;
    
    if ($conn) {
        $query = "SELECT master_match_stme.league_id as league_id,master_match_stme.category as category,master_match_stme.statement as adminstatment,userselection.user_selected_option as userstatement,if(master_match_stme.statement=userselection.user_selected_option,'Correct','Incorrect') as answer,if(userselection.user_selected_option=master_match_stme.statement,if(userselection.id%10=0,10,userselection.id%10),0) as mark FROM `master_match_stme` join userselection on master_match_stme.id=userselection.id where master_match_stme.league_id=".$league_id;

        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<table id='firsttable'>";
            echo "<tr><th>Admin Statements</th><th>UserStatement</th><th>Status</th><th>Marks</th></tr>";
            
            while ($row = $result->fetch_assoc()) {
            echo "<td>" . $row["adminstatment"] . "</td>";
                echo "<td>" . $row["userstatement"] . "</td>";
            //   echo "<td><input type='checkbox' class='checkbox' data-statement='{$row['statement']}' name='selected_rows[]'></td>";
            echo "<td>" . $row["answer"] . "</td>";
            echo "<td>" . $row["mark"] . "</td>"; 
            echo "</tr>";
            $score=$score+$row["mark"];
            }
        
            echo "</table>";
        }
        
       // $userid=101;
       // print_r($score);
        if($_SESSION['type']=='User')
        {
        $queries="update userdb set points=".$score." where RefId=".$_SESSION['userid'];
        mysqli_query($conn,$queries);
        }
    }

?>




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