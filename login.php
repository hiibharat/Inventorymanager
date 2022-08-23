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
        session_start();

        if(isset($_POST['user_email'])){
            $username = stripslashes($_REQUEST['user_email']);  
            $username = mysqli_real_escape_string($conn, $username);
            $password = stripslashes($_REQUEST['user_password']);
            $password = mysqli_real_escape_string($conn, $password);

             $query = "SELECT * FROM users INNER JOIN organizations ON organizations.organization_id = users.organization_id WHERE user_email='$username'
                     AND user_password='$password' ";  

                     $result = mysqli_query($conn, $query) or die(mysql_error());

                     $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['user_email'] = $username;
            
            header("Location: index.php");

             } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
                  
                          }

        } else {
?>
        

 <form class="form" method="post" name="login">
  <div class="container-fluid main">

    
    <div class="card card0 border-0">
        <div class="row d-flex">
         
            <div class="col-lg-4">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3 py-4">
                        <div style="text-align:center;">
                        <h4 class="mb-0 mr-4 mt-2">Inventory Management System</h4><br><br>
                        <h5 class="mb-0 mr-4 mt-2" style="color:#304FFE;">Welcome Back !</h5>
                        <h6 class="mb-0 mr-4 mt-2"> Sign in to continue to Inventory Manager</h6>
                        </div>
                    </div>
                    
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Email Id</h6></label>
                        <input class="mb-4" type="text" name="user_email" placeholder="Enter your email id" required>
                    </div>
                    <div class="row px-3">
                        <label class="mb-1"><h6 class="mb-0 text-sm">Password</h6></label>
                        <input type="password" name="user_password" placeholder="Enter password" required>
                    </div>
                    <div class="row px-3 mb-4">
                        <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3">
                        <button type="submit" value="login" name="submit" class="btn btn-blue text-center">Login</button>
                    </div>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">Don't have an account? <a class="text-danger " href="registration.php">Register</a></small>
                    </div>
                </div>
                 <div class=" py-4">
            <div class="row px-2">
                <small style="text-align: center;">Copyright &copy; 2022. All rights reserved.</small>
            </div>
        </div>
            </div>

               <div class="col-lg-8" style="background-color: #1A237E;">
                <div class="card1 pb-4">
                    
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line" st>
                        
                    </div>
                </div>
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