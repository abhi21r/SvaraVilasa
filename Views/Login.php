<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/login.css">
  <title>SvaraVilasa:Login</title>
</head>
<body>
  <div class="navbar">
    <div class="brand">
     <a href="index1.html" target="_self"><h1>SvaraVilasa</h1></a> 
    </div>
    <div class="navbar-links">
      <a href="signup.php" target="_self">SignUp </a>
    </div>
  </div>

  <div class="login-container">
    <div class="login-box">
      <h1>Feel the Music</h1>
      

      <form action="Login.php" method="post">
     

        <?php
        if(isset($_POST["Login"])){        // fetching data on clicking on login button
            $Email=$_POST["Email"];
            $Password=md5($_POST["Password"]);
            require_once "database.php";

            $sql="SELECT * FROM login WHERE Email='$Email'";
            $result=mysqli_query($conn,$sql);
            // $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
            $user=mysqli_fetch_assoc($result);
            if($user){     
                // if we get any email in the table then check for password or display the error
                if(($Password===$user["Password"])){    
                    session_start();
                    $_SESSION["user"] = $user['SL_No'];
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password doesnot Match!!!!!</div>";          // This is to apply html code 
                }
            }else{
                echo "<div class='alert alert-danger'>Email doesnot Match!!!!!</div>";          // This is to apply html code 
            }
        }
        ?>

        
       

            <div class="form-group">
                <input type="email" class="form-control" required name="Email" placeholder="Enter Email" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" class="form-control"required name="Password" placeholder="Enter Password" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="submit" name="Login" class="btn btn-primary" value="Login">             
            </div>
      </form>
      <p class="signup-link">Don't have an account? <a href="signup.php">Sign up here</a></p>
    </div>
  </div>
</body>
</html>
