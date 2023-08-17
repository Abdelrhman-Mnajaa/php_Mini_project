
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <link href="./cdn.jsdelivr.net_npm_bootstrap@5.1.3_dist_css_bootstrap.min.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home</title>
  </head>
  <body >
  <?php
// remove all session variables
session_unset();

// destroy the session
// session_destroy();
?>
    <div class="container d-grid gap-4 col-6 ">
        <div class="text-center">
            <br>
            <h1>Welcome</h1>
        </div>
        
        <div class="col-12">
            <img class="img-fluid mx-auto d-block rounded-circle " src="./723635.png" alt="admin">
        </div>
      
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="./Login.php" class="btn btn-primary rounded-pill" type="button">Login</a>
            <a href="./Signup.php" class="btn btn-danger rounded-pill" type="button">Sign up</a>

        </div>

    </div>

  </body>
</html>