    <!-- 
    $host='localhost';
    $username='Abd';
    $password='123456';
    $dbname='php_mini';

    // set DSN
    $dsn="mysql:host=".$host.";dbname=".$dbname;

    // set PDO
    $pdo=new PDO($dsn,$username,$password);

    $stmt=$pdo->query('SELECT * FROM user');

    $row=$stmt->fetchAll(PDO::FETCH_ASSOC);
        // $rows=$row;

    // foreach($row as $i)
    // print_r($i);
    // var_dump($row); -->

    <?php
    session_start();
    //     // Database credentials
    $servername = "localhost";
    $username = "Abd";
    $password = "123456";
    $dbname = "php_mini";
 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt1=$conn->query('SELECT * FROM user');
    $row=$stmt1->fetchAll(PDO::FETCH_ASSOC);

    $N = $_SESSION['N']??-1; 
    $_SESSION['N']=0;
   
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["L_submit"])) {
        $email = $_POST['email'];
        
         try {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
           
            if ($user['email']===$email && $user['password']=== $password &&$user['id']==='11') {
                // Successful login
                session_start();
                $_SESSION['email']=$email;
                header("Location: ResultA.php"); //Admin
                exit();
                
            }     elseif ($user['email'] === $email && $user['password'] === $password && $user['id'] !== '11') {
                session_start();
                $_SESSION['email'] = $email;
              header("Location: ResultB.php");// Not Admin
              foreach($row as $r){
                if ($r['email']==$email &&$r['password']==$password)
                   $_SESSION['N']=$r;
              }
              exit();
            } 
            else {
                echo "Invalid username or password.";
                exit();
              
              }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }


        
    //sign up 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["S_submit"])){

        try{

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
