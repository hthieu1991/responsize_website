<?php
session_start();
unset($_SESSION["email"]);
?>
<!DOCTYPE html>
<html lang="vi"><head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="../../favicon.ico" rel="icon">

    <title>http://kungfuphp.com login page</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../bootstrap/css/signin.css">

  </head>

  <body>

    <div class="container">
      <?php
        include("../lib/connection.php");
        $div_success = '';
        if (isset($_POST["email"])) {
          $email = addslashes($_POST["email"]);
          $pass = addslashes($_POST["pass"]);
          $sql = "SELECT * FROM member WHERE email='$email' and password='$pass'";
          $query = mysqli_query($conn,$sql);
          $num_row = mysqli_num_rows($query);
          if($num_row==0){
             $message = 'email hoặc mật mã không đúng, thử lại nhé';
             $div_error = '<div class="alert alert-danger" id="contact_sucess" role="alert">'.$message.'</div>';
          }else{
            $_SESSION["email"] = $email;
            header('Location: index.php');
          }
        }
      ?>
      <?php echo $div_error; ?>
      <form role="form" class="form-signin" method="POST">
        <h2 class="form-signin-heading">Đăng Nhập</h2>
        <label class="sr-only" for="email">Email address</label>
        <input type="text" name="email" id="email" autofocus="" required="" placeholder="Email address" class="form-control" id="inputEmail">
        <label class="sr-only" for="pass">Password</label>
        <input type="password" name="pass" id="pass" required="" placeholder="Password" class="form-control" id="inputPassword">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
      </form>

    </div> 

</body></html>