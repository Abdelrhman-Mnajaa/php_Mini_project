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
    <title>Result!</title>
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
            <h1>Welcome </h1>
        </div>
        <div>
          <table class="table table-striped" >
              <tr>
                <td>Id</td>
                <td>Email</td>
                <td>Mobile</td>
                <td>Full Name</td>
                <td>Password</td>
                <td>DOB</td>
              </tr>
     
               <tr>
                <td><?php echo $row[$N]['id']?> </td>
                <td><?php echo $row[$N]['email']?> </td>
                <td><?php echo $row[$N]['mobile']?> </td>
                <td><?php echo $row[$N]['full_name']?> </td>
                <td><?php echo $row[$N]['password']?> </td>
                <td><?php echo $row[$N]['DOB']?> </td>
              </tr> 
       
          </table>
        </div>
        <a href="./Home.php"><button type="button" class="col-12 mt-4 mx-auto btn btn-primary rounded-pill">Exit</button>
        </a>
    </div>
    <script defer src="./js/main.js"></script>
  </body>
</html>