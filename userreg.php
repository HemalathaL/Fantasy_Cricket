<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Fantasy Cricket</title>
      <link rel="icon" type="cricket/jfif" sizes="96x96" href="login.jfif">
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
        
      <br><br><br>
      
      <div class="">
        <div class="form-style-5">
            <form action="userregdb.php" method="POST" enctype="multipart/form-data">  
            <fieldset>
            <legend>Register Form - User</legend> 
            <br><br>
             
            </fieldset>
            <label>Name</label>
            <input type="text" class="but1" name="user" required>
            <label>Email</label>
            <input type="text" class="but1" name="mail" required>
            <label>Mobile Number </label>
            <input type="text" class="but1" name="mobile" required>
            <label>Password</label>
            <input type="text" class="but1" name="pass" required>
            <label>Confirm Password</label>
            <input type="text" class="but1" name="pass1" required>
            <label>Reference Id</label>
            <input type="text" class="but1" name="refno" required>
            <!-- <label>Wallet Balance</label>
            <input type="text" name="wallet" placeholder="" disabled>
            <label>Points Scored</label>
            <input type="text" name="points" placeholder="" disabled>
            <label>Coins Earned</label>
            <input type="text" name="coins" placeholder="" disabled>
            <label>Image</label>
            <input type="file" name="img" placeholder=""> -->
            <br><br>
            <input type="submit" class="sub" value="Register" name="add">
            </form>
        </div>
      </div>
      
   </body>
</html>