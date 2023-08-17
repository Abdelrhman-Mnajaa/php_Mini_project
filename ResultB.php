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

<body>




  <div class="container d-grid gap-4 col-6 ">
    <div class="text-center">
      <br>
      <h1>Welcome </h1>
    </div>
    <div>
      <table class="table table-striped">
        <tr>
          <td>Id</td>
          <td>Email</td>
          <td>Mobile</td>
          <td>First Name</td>
          <td>Middle Name</td>
          <td>Last Name</td>
          <td>Family Name</td>
          <td>Password</td>
          <td>DOB</td>
        </tr>

        <tr>
          <?php
          $id  = $_SESSION['N'];
          $stmt1 = $conn->query("SELECT * FROM user where id = '$id'");
          $row = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        //  print_r($row);
         ?>
          <td><?php echo $row[0]['id'] ?> </td>
          <td><?php echo $row[0]['email'] ?> </td>
          <td><?php echo $row[0]['mobile'] ?> </td>
          <td><?php echo $row[0]['f_name']?> </td>
          <td><?php echo $row[0]['mid_name']?> </td>
          <td><?php echo $row[0]['last_name']?> </td>
          <td><?php echo $row[0]['fam_name']?> </td>
          <td><?php echo $row[0]['password'] ?> </td>
          <td><?php echo $row[0]['DOB'] ?> </td>
        </tr>

      </table>
    </div>
    <a href="./Home.php"><button type="button" class="col-12 mt-4 mx-auto btn btn-primary rounded-pill">Exit</button>
    </a>
  </div>
  <script defer src="./js/main.js"></script>
</body>

</html>