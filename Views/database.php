 <!-- This code is written to connect the login page with the database -->

 <?php

$hostname="localhost";
$dbUser="root";
$dbPassword="";
$dbName="login";
$conn=mysqli_connect($hostname,$dbUser,$dbPassword,$dbName);            // This will result true or false
if(!$conn){
    die("something went wrong");          // Die is used to terminate the page and show the error
}

?>