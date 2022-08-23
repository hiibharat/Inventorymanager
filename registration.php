<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventory Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
    require('db.php');
    if (isset($_REQUEST['user_name'])) {
        $name = stripslashes($_REQUEST['user_name']);
        $name = mysqli_real_escape_string($conn, $name);
        $email    = stripslashes($_REQUEST['user_email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['user_password']);
        $password = mysqli_real_escape_string($conn, $password);
        $phone = stripslashes($_REQUEST['user_phone']);
        $phone = mysqli_real_escape_string($conn, $phone);
        
        $query    = "INSERT into `users` (user_name, user_password, user_email, user_phone)
                     VALUES ('$name', '$password', '$email', '$phone')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>




    <form class="form" action="" method="post">
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">


    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img src="inventory.jpg" alt="image" class="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <div>
                             <h2 class="mb-0 mr-4 mt-2">Inventory Management System</h2><br>
                        <h4 class="mb-0 mr-4 mt-2" style="color:#304FFE;">Register Account</h4>
                        
                            <h5 class="mb-0 mr-4 mt-2"> Get your free Inventory Manager account now.</h5>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>

                     <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Username</h6></label>
                        <input class="mb-4" type="text" name="user_name" placeholder="Enter your username">
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Phone</h6></label>
                        <input class="mb-4" type="tel" name="user_phone" placeholder="Enter your phone number">
                    </div>

                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Email Id</h6></label>
                        <input class="mb-4" type="text" name="user_email" placeholder="Enter your email id">
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                        <input type="password" name="user_password" placeholder="Enter password">
                    </div>
                    <div class="row mt-3 mb-3 px-3">
                        <button type="submit" name="submit" value="register" class="btn btn-blue text-center">Register</button>
                    </div>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">Already have an account? <a class="text-danger " href="login.php">Login</a></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-2">
                <small class="ml-4 ml-sm-5 mb-2" style="text-align: center;">Copyright &copy; 2019. All rights reserved.</small>
            </div>
        </div>
    </div>

</div>
</form>
<?php
    }
?>

</body>
</html>