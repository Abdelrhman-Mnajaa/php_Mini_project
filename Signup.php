<?php
include 'php/db.php';



// ?>

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
      /* padding: %; */ }

    </style>
  </head>
  <body >
    <div class="container ">
      
      <form id = "f" action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="main-form">

      <div class="form-group">
          <h1 class="text-center">Sign Up</h1>
          <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="emailS" id="email" aria-describedby="emailHelp" placeholder="Enter email"required>
          <small id="usernameHelp" class="form-text" value='<?php echo "$email";?>'>incorrect email</small>
        </div>

        <div class="form-group">
          <label for="exampleInputMobile">Mobile</label>
          <input type="text" class="form-control" name="phoneS" id="y" placeholder="00962777777777" aria-describedby="phoneHelp" required>
          <small id="usernameHelp" class="form-text" value='<?php echo "$phoneS";?>'>incorrect phone</small>
        </div>

        <div class="form-group">
          <label for="f_name">First Name</label>
          <input type="text" class="form-control" name="f_name" id="f_name" aria-describedby="fullNameHelp" placeholder="Please Enter Your First Name" required>
          <small id="usernameHelp" class="form-text" value='<?php echo "$f_name";?>'>please check First Name</small>
        </div>
        
        <div class="form-group">
          <label for="mid_name">middle name</label>
          <input type="text" class="form-control" name="mid_name" id="mid_name" aria-describedby="fullNameHelp" placeholder="Please Enter Your Middle Name" required>
          <small id="usernameHelp" class="form-text" value='<?php echo "$mid_name";?>'>please check Middle name</small>
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" name="last_name" id="last_name" aria-describedby="fullNameHelp" placeholder="Please Enter Your Last Name" required>
          <small id="usernameHelp" class="form-text" value='<?php echo "$last_name";?>'>please check lastname</small>
        </div>
        
        <div class="form-group">
          <label for="fam_name">Family Name</label>
          <input type="text" class="form-control" name="fam_name" id="fam_name" aria-describedby="fullNameHelp" placeholder="Please Enter Your Family Name" required>
          <small id="usernameHelp" class="form-text" value='<?php echo "$fam_name";?>'>please check family name</small>
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="passwordS" id="password" placeholder="Password" required>
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
            
    <label for="dateS">Date of Birth:</label>
    <input type="text" id="dateS" name="dateS" value='<?php echo "$dateS";?>'>
    
    <script>
        // Function to initialize the date picker
        function initializeDatePicker() {
            const datePicker = document.getElementById('dateS');
            
            // Configure the date picker
            datePicker.type = 'date';
            datePicker.min = getFormattedDate(new Date()); // Set minimum date to today
            
            // Add an event listener to handle date selection
            datePicker.addEventListener('change', function() {
                const selectedDate = new Date(datePicker.value);
                console.log('Selected date:', selectedDate);
            });
        }
        
        // Function to format a date as "YYYY-MM-DD" for setting min attribute
        function getFormattedDate(date) {
            const year = date.getFullYear();
            const month = (date.getMonth() + 1).toString().padStart(2, '0');
            const day = date.getDate().toString().padStart(2, '0');
            return `${year}-${month}-${day}`;
        }
        
        // Call the function to initialize the date picker
        initializeDatePicker();
    </script>

        </div>

        <button type="Submit" name="S_submit" class="col-12 mt-4 mx-auto btn btn-primary rounded-pill">Sign Up</button>
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








