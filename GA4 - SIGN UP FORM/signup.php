<?php
include("../database/database.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signup.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Create Account</title>
</head>
<body>

  <div class="body1">
  <div class="container">

    <div class="grid1" style="background-image: url(../img/maksim-larin-NOpsC3nWTzY-unsplash.jpg)"></div>


    <div class="grid2">
      <h1 style="text-align: center; line-height: 0.9; font-weight: 300; font-size: 26px;">WELCOME TO<br> <span style="font-weight: 900; color:#E19191;">THE BRAND COLLECTIVE</span></h1>
      <p style="text-align: center; margin-bottom: 10px; font-size: 14px;">Elevating Identities, Crafting Legacies: The Brand Collective – Where Your Story Becomes a Brand.</p>
      <h2 style="text-align: center; font-size: 20px;">Create Account</h2>

      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <p class="align">Username</p>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username">
      </div>
      <p class="align">Email</p>
      <div class="input-box">
        <input type="email" placeholder="Email" name="email">
      </div>
      <p class="align">Password</p>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password">
      </div>
      <p class="align">Contact Number</p>
      <div class="input-box">
        <input type="text" placeholder="Contact Number" name="contact_number">
      </div>
      <p class="align">Address</p>
      <div class="input-box">
        <input type="address" placeholder="Address" name="address">
      </div>
      <div>
        <div>
        <button type="submit" class="btn1">Create Account</button>
      </div>
      </form>
      <p style="text-align: center; font-size: 12px;">Already have account? <a href="../signin/signin.php" style="color: #E19191;">Login</a></p>
    </div>
    </div>
    </div>
  </div>
</div>

</body>
</html>

<?php
//  $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_SPECIAL_CHARS);
//  $f_name = filter_input(INPUT_POST,"fullname", FILTER_SANITIZE_SPECIAL_CHARS);
//  $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
//  $contact_num = filter_input(INPUT_POST,"contact_number", FILTER_SANITIZE_SPECIAL_CHARS);
//  $address = filter_input(INPUT_POST,"address", FILTER_SANITIZE_SPECIAL_CHARS);

//  $hash = password_hash($password, PASSWORD_DEFAULT);

//  $sql = "INSERT INTO user_acc (full_name, email, user_pass, address, contact_number) 
//  VALUES                       ('$f_name', '$email', '$hash', '$address', '$contact_num')";

//  mysqli_query($conn, $sql);



// mysqli_close($conn);
include('signup_process.php');
?>