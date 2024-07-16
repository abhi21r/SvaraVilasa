<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/signup.css">
  <title>Sign Up</title>
</head>
<body>
  <div class="navbar">
    <div class="brand">
     <a href="index1.html" target="_self"><h1>SvaraVilasa</h1></a> 
    </div>
    <div class="navbar-links">
      <a href="index.html" target="_self">Home</a>
      <a href="Login.php" target="_self">Login</a>

    </div>
  </div>

  <div class="signup-container">
    <div class="signup-box">
      <h1>Ready to grove </h1>
      <form action="signup.php" method="POST">


        <div class="form-group">
                <input type="text" class="form-control" name="Name" placeholder="Fullname">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="Email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="Password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="ConfirmPassword" placeholder="Confirm Password">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>

            <p>One of Us ?</p><a href="Login.php">Login</a>

      </form>

      <?php
            //   print_r($_POST);
            if(isset($_POST["submit"])){ 
                
                // echo "manish";
                //  $_POST will fetch all the data from the input form when the submit button is clicked
                $Name=$_POST["Name"];
                $Email=$_POST["Email"];
                $Password=md5($_POST["Password"]);
                $ConfirmPassword=md5($_POST["ConfirmPassword"]);

                // $PasswordHash=password_hash($Password);  // This is to make the password encoded

                $errors=array();   // taking all the errors into the variable errors 

                if (empty($Name) OR empty($Email) OR empty($Password) OR empty($ConfirmPassword)) {
                    array_push($errors,"All fields are required");
                }
                if (!filter_var($Email,FILTER_VALIDATE_EMAIL)) {
                    array_push($errors,"Enter a valid email");
                }
                if (strlen($Password)<8) {
                    array_push($errors,"Password must be altest 8 digits");
                }
                if ($Password!=$ConfirmPassword) {
                    array_push($errors,"Password doesn't match");
                }

                require_once "database.php";                                  // Checking for duplicate emails
                $sql= "SELECT * FROM login WHERE Email = '$Email'";
                $result=mysqli_query($conn,$sql);
                $rowCount=mysqli_num_rows($result);
                if ($rowCount>0) {
                    array_push($errors,"It is an existing Email, Try another !");
                }

                if(count($errors)>0){
                    foreach($errors as $error){
                        echo "<div class='alert alert-danger'>$error</div>";
                        '</br>';
                    }
                }else{
                

                                                // These variables are present in the login tebles of the database
                    $sql= "INSERT INTO `login` (`Name`, `Email`, `Password`, `ConfirmPassword`, `Time`)     
                    VALUES ('$Name', '$Email', '$Password', '$ConfirmPassword', current_timestamp())";     // fetch data from above

                    // echo $sql;
                    mysqli_query($conn,$sql);
                }
                header("Location: Login.php");
            }
        ?>
      <p class="login-link">Already have an account? <a href="Login.php">Login here</a></p>
    </div>
  </div>
</body>
</html>
