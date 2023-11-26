<!DOCTYPE html>
<?php session_start();?>
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
   <style>
  
        #secondTable, #firsttable {
            border-collapse: collapse;
            width: 100%;
            margin-right: 40px;
            border: 1px solid #ccc;
           
        }
        #secondTable th,#firsttable th ,#secondTable td, #firsttable td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
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
      
      <br><br><br>
      <div class="container">
            <div class="row">    
           
                <div class="col-md-10 col-md-offset-2" id="form" >
                <!-- <form action="userselected.php" method="POST" enctype="multipart/form-data">                    -->
                      <div class="form-group">  
                       
                          <div class="form-style-5">  
                          <legend style="color: rgb(247,137,35);text-align:center;">Language</legend>    
                          <div class="row">
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
                                    $matchInfo = $row["league_name"] . " | " . $row["matchtype"] . " | " . $row["date"] . " | " . $row["time"];
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
          
                          </div>
                        </div>
                        
                        <div class="row h"> 
                            <div class="col-md-6" >
                              
                                <h3>Admin Option</h3> 
                                        <?php
                                           $conn = mysqli_connect('localhost', 'root', '', 'cricket');
                                            if ($conn) {
                                                $query = "SELECT * FROM `master_match_stme`";
                                                $result = mysqli_query($conn, $query);
                                                if ($result) {
                                                    echo "<table id='firsttable'>";
                                                    echo "<tr><th>Admin Statements</th><th>Option</th></tr>";
                                                    
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row["statement"] . "</td>";
                                                        echo "<td><input type='checkbox' class='checkbox' data-statement='{$row['statement']}' name='selected_rows[]'></td>";
                                                        echo "</tr>";
                                                    }
                                                    
                                                    echo "</table>";
                                                }
                                            }
                                            ?>
                                            
                               
                            </div>  
                            <div class="col-md-6">
                              
                                <h3>User Selection</h3>
                                    <table id="secondTable">
                                        <thead>
                                            <tr>
                                                <th>Selected Statement</th>
                                            </tr>
                                        </thead>
                                        <tbody id='data'></tbody>
                                    </table>
                               
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-7 col-md-offset-1"><br><br>
                                    <input type="submit" value="Create"  id='saves' style="border-radius:10px;"/>
                                </div>
                        </div>
                    </div>
                <!-- </form> -->
                </div>
            </div>
    </div>
     
     
      
    
 
   
    <script>
$(document).ready(function () {
  $('#stmtleag').change(function () {
    // const selectedLeague1 = document.getElementById('stmtleag');
    // const selectedLeague = selectedLeague1.value;
    var selectedLeague = $(this).val();
    console.log(selectedLeague);
    // Send AJAX request to retrieve league_id and league_name
    // $.ajax({
    //   url: 'getleagueId.php',
    //   method: 'GET',
    //   data: { selectedLeague: selectedLeague },
    //   success: function (data) {
    //     var leagueInfo = JSON.parse(data);
    //     if (leagueInfo) {
    //       // Assign the retrieved values to the variables
    //       var league_id = leagueInfo.league_id;
    //       var league_name = leagueInfo.league_name;
          
    //       // Use the retrieved values for further processing
    //       // For example, update inputs, display league info, etc.
    //     } else {
    //       console.error("Failed to fetch league information.");
    //     }
    //   },
    //   error: function () {
    //     console.error("AJAX request failed");
    //   }
    // });
  });
});
</script>
<script>
    
            
        $('#saves').click(function(){
            // var league_id = $('#league_id').val(); // Get the league_id from the input field
            // var league_name = $('#league_name').val(); // Get the league_name from the input field
            var k=document.getElementById('data').children;
            var x;
            var total = document.getElementById("data").rows[1];
            console.log(k.length);
            var data_push=[];
            for(i=0;i<k.length;i++)
            {
                x = document.getElementById("data").rows[i].cells.item(0).innerHTML;
                //console.log(x);
                data_push.push(x);
            }
            console.log(data_push);

            var league_values = document.getElementById("stmtleag").value;
            var userid = "<?php 
               echo $_SESSION['userid'];?>";
            
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_data.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log(xhr.responseText);
                        ans=xhr.responseText;
                        alert(ans);
                        
                    } else {
                        console.error("AJAX request failed");
                    }
                }
            };

            
            league_values=league_values;
            //var selectedvalue=JSON.stringify(data_push);
            var selectedvalue=data_push; 
            
            xhr.send("league_values="+league_values+"&selectedvalue="+selectedvalue+"&userid="+userid);
        });
        // const leag = document.getElementById('stmtleag');
        // const leagValue = leag.value;
        // console.log(leagValue);

        $(document).ready(function () {
            const checkboxes = document.querySelectorAll('.checkbox');
            const secondTable = document.getElementById('secondTable').getElementsByTagName('tbody')[0];

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    if (this.checked) {
                        const statement = this.getAttribute('data-statement');
                        appendRowToSecondTable(secondTable, statement);
                       
                    } 
                    else {
                        removeRowFromSecondTable(secondTable, this.getAttribute('data-statement'));
                    }
                });
            });

            function appendRowToSecondTable(table, statement) {
                const newRow = table.insertRow();
                const cell1 = newRow.insertCell(0);
                cell1.textContent = statement;
            }

            function removeRowFromSecondTable(table, statement) {
                const rows = table.rows;
                for (let i = 0; i < rows.length; i++) {
                    const row = rows[i];
                    const rowName = row.cells[0].textContent;
                    if (rowName === statement) {
                        table.deleteRow(i);
                        break;
                    }
                }
            }
        });
       
    </script>
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



