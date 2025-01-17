

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signin.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <title>SignIn</title>
</head>
<body>

  <div class="body1">
  <div class="container">
    <div class="grid1">
    <h1 style="text-align: center; line-height: 0.9; font-weight: 300; font-size: 26px;">WELCOME TO<br> <span style="font-weight: 900; color:#E19191;">THE BRAND COLLECTIVE</span></h1>
      <p style="text-align: center; margin-bottom: 16px; font-size: 14px;">Elevating Identities, Crafting Legacies: The Brand Collective – Where Your Story Becomes a Brand.</p>
      <h1 style="text-align: center; margin-bottom: 30px; font-size: 26px;">Log In</h1>

      <form action="signin_process.php" method="post">
      <p class="align">Username</p>
      <div class="input-box">
        <input type="username" placeholder="Username" name="username" required>
        <div class="svg-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
        </div>
      </div>

      <p class="align">Password</p>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <div class="svg-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path d="M12 17a2 2 0 0 0 2-2a2 2 0 0 0-2-2a2 2 0 0 0-2 2a2 2 0 0 0 2 2m6-9a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3"/></svg>
        </div>
        <p style="margin-top: 10px; text-align: end; font-size: 14px; margin-bottom: 0px;"> <a href="">Forgot Pasword</a></p>
      </div>
 
      <div>
        <button type="submit" class="btn1">Login</button>
    </div>   

    

  </form>

  
  
    <p style="text-align: center; font-size: 12px;">Are you new? <span><a href="../signup/signup.php" style="color: #E19191">Create an account</a></span></p>
    </div>
    <div class="grid2" style="background-image: url(../img/maksim-larin-NOpsC3nWTzY-unsplash.jpg);"></div>
  </div>
</div>

</body>
</html>