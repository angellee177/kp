<?php
    if (isset($_POST['register'])) {
      if (!empty(trim($_POST['name'])) && !empty(trim($_POST['username'])) && !empty(trim($_POST['password']))) {
        $array = [
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'role' => 2,
            'token' =>'TOKEN12ks'
            
          ];
          var_dump($array);
          die();
        if (insert('user', $array)) {  
            header("location:index.php");
        } else {
          echo "gagal register";
        }
      }else {
        echo "username sudah terdaftar";
      }
    }
    /**
     * Connect to MySQL and instantiate the PDO object.
     * Set the error mode to throw exceptions and disable emulated prepared statements.
     */
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ));
    
    
    //We are going to assume that the user with ID #1 has paid 10.50.
    $userId = 1;
    $paymentAmount = 10.50;
    
    
    //We start our transaction.
    $pdo->beginTransaction();
    
    //We will need to wrap our queries inside a TRY / CATCH block.
    //That way, we can rollback the transaction if a query fails and a PDO exception occurs.
    try{
    

        $sql = "INSERT INTO user (username, email, password, name) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
                $username, 
                $email,
                $password,
                $name,
            )
        );
        
        //We've got this far without an exception, so commit the changes.
        $pdo->commit();
        
    } 

    }
  ?>
<?php require_once 'template/header.php'; ?>
<div class="bg-image w3-display-container w3-animate-opacity w3-text-white">
</div>
<div class="w3-display-middle">
                <br>
                <br>
                <br>
                <br>
                <BR>
                <br>
                <h1 style="color:#293260;text-align:center"><b>REGISTER</b></h1>
            <form action="" method="POST">
                <div class="group">
                    <input type="text" name="name" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label for="name"><b>Input Your Name here</b></label>
                </div>
                <div class="group">
                    <input type="text" name="username" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label for="username"><b>Input Your Username here</b></label>
                </div>
                <div class="group">
                    <input type="text" name="email" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label for="email"><b>Input Your Email here</b></label>
                </div>
                <div class="group">
                    <input type="password" name="password" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label for="password"><b>Input Your Password here</b></label>
                </div>
                <div class="btn-box">
                    <button class="btn btn-submit" name="register" type="submit" value="Register sekarang"><b>register</b></button>
                </div>
            </div>
        </form>
</div>
<?php require_once 'template/footer.php'; ?>