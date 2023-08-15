<?php include 'php/db.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="./cdn.jsdelivr.net_npm_bootstrap@5.1.3_dist_css_bootstrap.min.css" rel="stylesheet"> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Hello, modularity!</title>
  </head>
  <body >
    <div class="container d-grid gap-4 col-6 ">
        <div class="text-center">
            <br>
            <h1>Welcome </h1>
        </div>
        
        <div>
          <table>
              <tr>
                <td>Id</td>
                <td>Email</td>
                <td>Mobile</td>
                <td>Full Name</td>
                <td>Password</td>
                <td>DOB</td>
              </tr>
              <?php 
              foreach($row as $i): ?>
               <tr>
                <td><?php echo $i['id']?> </td>
                <td><?php echo $i['email']?> </td>
                <td><?php echo $i['mobile']?> </td>
                <td><?php echo $i['full_name']?> </td>
                <td><?php echo $i['password']?> </td>
                <td><?php echo $i['DOB']?> </td>
              </tr> 
                       
             
              <?php endforeach;?>
             


          </table>
        </div>
        

    </div>
    <script defer src="./js/main.js"></script>
  </body>
</html>