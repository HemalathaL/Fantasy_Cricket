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
            <form action="adminregdb.php" method="POST" enctype="multipart/form-data">  
            <fieldset>
            <legend>Register Form - Admin</legend> 
            <br><br>
             
            </fieldset>
            <label>User Name</label>
            <input type="text" class="but1" name="user" required>
            <label>Email</label>
            <input type="text" class="but1" name="mail" required>
            <label>Mobile Number </label>
            <input type="text" class="but1" name="mobile" required>
            <label>Password</label>
            <input type="text" class="but1" name="pass" required>
          
            <label>Referral Id</label>
            <input type="text" class="but1" name="refno" required>
          
            <br><br>
            <input type="submit" class="sub" value="Register" name="add">
            </form>
        </div>
      </div>
      
   </body>
</html>