<?php



$pdo = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process the form data
  $servername = "localhost";
  $username = "Abd";
  $password = "123456";
  $dbname = "php_mini";
//$email = $phone = $fullname = $password = $date='';
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $fullname = $_POST['fullname'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $date = $_POST['date'];

      $stmt = $conn->prepare("INSERT INTO user (email, mobile,full_name,password,DOB)
      VALUES (:email, :phone,:fullname ,:password,:date)");
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':phone', $phone);
      $stmt->bindParam(':fullname', $fullname);
      $stmt->bindParam(':password', $password);
      $stmt->bindParam(':date', $date);
      $stmt->execute();

      // echo "Registration successful!";
  } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
  }

  $conn = null;
}


?>


<!doctype html>
<html lang="en">
  <head>
    <link href="./cdn.jsdelivr.net_npm_bootstrap@5.1.3_dist_css_bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
  
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Signup</title>


    <style>

.main-form{
margin-top: 1%;
margin: 1%;
/* padding: %; */
}
    </style>
  </head>
  <body >
    <div class="container ">
      
      <form id = "f" action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="main-form">

        <div class="form-group">
          <h1 class="text-center">Sign Up</h1>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email"required>
          <small id="usernameHelp" class="form-text" value='<?php echo "$email";?>'>incorrect email</small>
        </div>
        <div class="form-group">
          <label for="exampleInputMobile">Mobile</label>
          <input type="text" class="form-control" name="phone" id="phone" placeholder="00962777777777" aria-describedby="phoneHelp" required>
          <small id="usernameHelp" class="form-text" value='<?php echo "$phone";?>'>incorrect phone</small>
        </div>

        <div class="form-group">
          <label for="fullname">Full name</label>
          <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="fullNameHelp" placeholder="Enter Full Name" required>
          <small id="usernameHelp" class="form-text" value='<?php echo "$fullname";?>'>Full Name must be e in 4 sections fname, middle name, last name, family name</small>
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          <small id="passwordHelp" class="form-text" value='<?php echo "$password";?>'>
            password should be at least 8 characters and in (upper case, lower case, numbers, special characters, no spaces )
          </small>  
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Confirmed Password</label>
          <input type="password" class="form-control" id="cnfrmPassword" placeholder="Password" required>
          <small id="ConPasswordHelp" class="form-text">
          
          </small>  
        </div>
      
 
          <div class="form-group">
            
            <label>Date of Birth</label>
            <input type="text" class="form-control" name="date" id="date" aria-describedby="dateNameHelp" placeholder="Enter Date of Birth : DD,MM,YYYY" required>
          <small id="birthdayNameHelp" class="form-text" value='<?php echo "$date";?>'>Date of Birth should be in DD,MM,YYYY format </small>
  
          </div>
            
        <button type="Submit" class="col-12 mt-4 mx-auto btn btn-primary rounded-pill">Sign Up</button>
        <p class="text-center mt-1">Already have an account?<a href="./Login.php"><strong>Login</strong></a></p>
      </div>
        </div>
      </div>
                

      <div>

    </form>
  </div>
    <script defer src="./js/main.js"></script>
    
  </body>

</html>








