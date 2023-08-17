<?php
    session_start();

    //     // Database credentials
    $servername = "localhost";
    $username = "Abd";
    $password = "123456";
    $dbname = "php_mini";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["L_submit"])) {
        try {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $stmt = $conn->prepare("SELECT * FROM user WHERE email=:email and password = :password");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user['email'] === $email && $user['password'] === $password && $user['id'] === '11') {
                $_SESSION['email'] = $email;
                header("Location: ResultA.php"); //Admin
                exit();
            } elseif ($user['email'] === $email && $user['password'] === $password && $user['id']) {

                $_SESSION['email'] = $email;
                $_SESSION['N'] = $user['id'];
                
                header("Location: ../ResultB.php"); // Not Admin
                exit();
            } else {
                echo "Invalid username or password.";
                exit();
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }



    //sign up 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["S_submit"])) {

        try {

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $emailS = $_POST['emailS'];
            $phoneS = $_POST['phoneS'];
            $f_name = $_POST['f_name'];
            $mid_name = $_POST['mid_name'];
            $last_name = $_POST['last_name'];
            $fam_name = $_POST['fam_name'];
            $passwordS = password_hash($_POST['passwordS'], PASSWORD_DEFAULT);
            $dateS = $_POST['dateS'];

            $stmtS = $conn->prepare("INSERT INTO user (email, mobile,f_name,mid_name,last_name,fam_name,password,DOB)
        VALUES (:emailS, :phoneS,:f_name,:mid_name,:last_name,:fam_name ,:passwordS,:dateS)");

            $stmtS->bindParam(':emailS', $emailS);
            $stmtS->bindParam(':phoneS', $phoneS);
            $stmtS->bindParam(':f_name', $f_name);
            $stmtS->bindParam(':mid_name', $mid_name);
            $stmtS->bindParam(':last_name', $last_name);
            $stmtS->bindParam(':fam_name', $fam_name);
            $stmtS->bindParam(':passwordS', $passwordS);
            $stmtS->bindParam(':dateS', $dateS);
            $stmtS->execute();
        }
        // echo "Registration successful!";
        // } 

        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }

    ?>