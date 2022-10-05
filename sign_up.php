<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- link css -->
  <link rel="stylesheet" href="signin_style.css">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">

</head>
<body>
  <div class="hero">
    <div class="box">
        <div class="form">
            <form method="POST">
                <h2>Sign Up</h2>
                <input name="email" type="email" placeholder="Email" required="required">
                <input name="password" type="password" placeholder="Password" required="required">
                <input name="submit" id="submit" type="submit" value="Sign Up" required="required">
                <p class="signupz">have a account ?<a href="sign_in.php">Sign In.</a></p>
            </form>
            <?php
                    if(isset($_POST['submit'])){
                        $email = htmlspecialchars($_POST['email']);
                        $password = htmlspecialchars($_POST['password']);
                        $encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
                        

                        $query = mysqli_query($koneksi, "SELECT email FROM user WHERE email='$email' ");
                        $count = mysqli_num_rows($query);

                        if($count > 0){
                            echo '<script>alert("cannot register. this email is existed in database")</script>';
                        }else {
                            $queryInsert = mysqli_query($koneksi, "INSERT INTO user (email, password) VALUES('$email', '$encryptedpassword')");
                            
                            if($queryInsert){
                                echo '<script>alert("Register success")</script>';
                                header('location: sign_in.php');
                            }
                        }
                    }
                ?>
        </div>
  </div>
</div>
</body>
</html>