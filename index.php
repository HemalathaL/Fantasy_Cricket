<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
          <link rel="icon" type="cricket\jfif" sizes="96x96" href="login.jfif">
        <title>Fantasy Cricket</title>
    </head>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: 'poppins',sans-serif;
            box-sizing: border-box;
        }
        
        /*img
        {
          position: relative;
          width:50%;
          height:100%;
        }*/
       section
       {
           position:relative;
           width:100%;
           height:100vh;
           display:flex;   
       }
       section .imgbx
       {
           position: relative;
           width:50%;
           height: 100%;
       }
       section .imgbx:before
       {
           content:'';
           position: absolute;
           top:0;
           left:0;
           width:100%;
           height:100%;
           background: linear-gradient(225deg,rgb(247,137,35),rgb(98,240,79));
           z-index: 1;
           mix-blend-mode:screen;
        
       }
       section .imgbx img
       {
            position: absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            object-fit: cover;
       }  
       section .contentbx
       {
           display: flex;
           width: 50%;
           height: 100%;
           justify-content: center;
           align-items: center;
       }
       section .contentbx .formbx
       {
           width: 50%;
       }
       section .contentbx .formbx h2  /* for heading <login>*/
       {
           color: #607d8b;
           font-weight: 600;
           font-size: 1.5em;
           text-transform: uppercase;
           margin-bottom: 20px;
           border-bottom: 4px solid rgb(247,137,35);
           display: inline-block;
           letter-spacing: 1px;
       }
       section .contentbx .formbx .inputbx  /* space for each div tag*/
       {
           margin-bottom: 20px;
       }
       section .contentbx .formbx .inputbx span  /*for each heading*/
       {
           font-size: 16px;
           margin-bottom: 5px;
           display: inline-block;
           color:#607d8b;
           font-weight: 300;
           font-size: 16px;
           letter-spacing: 1px;
       }
       section .contentbx .formbx .inputbx  input
       {
           width: 100%;
           padding: 10px 20px;
           outline: none;
           font-weight: 400;
           border:1px solid red #607d8b;
           font-size: 16px;
           letter-spacing: 1px;
           color:#607d8b;
           background: transparent;
           border-radius: 30px;
       }
        section .contentbx .formbx .inputbx  input[type="submit"]
        {
            background: rgb(247,137,35);
            color: #fff;
            outline: none;
            border:none;
            font-weight: 500;
            cursor: pointer;
           
            
        }
        section .contentbx .formbx .inputbx  input[type="submit"]:hover
        {
            background: rgb(247,137,35);
        }
        @media (max-width:746px)
        {
            section .imgbx 
            {
            position: absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            }
            section .contentbx 
            {
              display: flex;
              width: 100%;
              height: 100%;
              justify-content: center;
              align-items: center;
              z-index: 1;
           }
         section .contentbx .formbx 
         {
            width: 50%;
            padding: 40px;
            background: rgb(255 255 255 / 90%);
            margin: 50px;
         } 
        }
    </style>
    <body>
        <section>
            <div class="imgbx">
                <img src="login.jfif"style="">  
            </div>
            <div class="contentbx">
                <div class='formbx'>
                    <h2>Admin Login</h2>
                    <form action="admindb.php" method="POST">
                        <div class="inputbx">
                            <span>UserId</span>
                            <input type="text" name="user">
                        </div> 
                        <div class="inputbx">
                            <span>Password</span>
                            <input type="Password" name="pass">
                        </div> 
                        <br>
                        <div class="inputbx">
                           
                          <input type="Submit" value="Submit" name="">
                        </div> 
                        <div class="inputbx">
                            <br>
                            <a href ="user.php" style="font-weight:200;color:rgb(247,137,35);text-decoration:none;background-color:transparent;">Login as User</a>
                            <a href ="adminreg.php" style="margin-left:123px;font-weight:200;color:rgb(247,137,35);text-decoration:none;background-color:transparent;">Admin Register</a>
                        </div>
                    </form>
                </div>   
            </div>
        </section>
       
    </body>
</html>
