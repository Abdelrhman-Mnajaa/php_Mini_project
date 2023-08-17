<?php 
include 'php/db.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <link href="./cdn.jsdelivr.net_npm_bootstrap@5.1.3_dist_css_bootstrap.min.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login</title>
  </head>
  <body >
  
    <div class="container ">

      <form class="main-form" action="login.php" method="POST">
        <div class="form-group">
          <h1 class="text-center">Login</h1>
          <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="usernameHelp" class="form-text">incorrect email</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          <small id="passwordHelp" class="form-text">password should be at least 8 characters and in (upper case, lower case, numbers, special characters, no spaces )</small>
        </div>
        <div>
            <?php if (isset($loginError)) : ?>
                <p class="text-danger"><?php echo $loginError; ?></p>
            <?php endif; ?>
        
        <button  type="Submit" name="L_submit" class="col-12 mt-4 mx-auto btn btn-primary rounded-pill">Login</button>
        <p class="text-center mt-1">Don't have an account?<a href="./Signup.php"><strong>Sign Up</strong></a></p>
        </div>
 
      </form>
    </div>

    <script defer src="./js/main.js"></script>
  </body>

</html>