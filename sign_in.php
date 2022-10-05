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
                <h2>Sign In</h2>
                <input name="email" type="email" placeholder="Email" required="required">
                <input name="password" type="password" placeholder="Password" required="required">
                <input name="submit" id="submit" type="submit" value="Sign In" required="required">
                <p class="signupz">Don’t have account ?<a href="sign_up.php">Sign Up.</a></p>
            </form>
            <?php
                    if(isset($_POST['submit'])){
                        $email = htmlspecialchars($_POST['email']);
                        $password = htmlspecialchars($_POST['password']);

                        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
                        $count = mysqli_num_rows($query);
                        
                        if($count > 0){
                            $data = mysqli_fetch_array($query);
                            if(password_verify($password, $data['password'])){
                                $_SESSION['logged_in'] = true;
                                $_SESSION['email'] = $data['email'];

                                header("location: landing.php");
                            }
                            else{
                                echo '<script>alert("Your password is invalid")</script>';
                            }
                        }else{
                            echo '<script>alert("Your account not exist")</script>';
                        }
                    }
                ?>
        </div>
  </div>
</div>
</body>
</html>