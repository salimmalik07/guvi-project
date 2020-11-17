<?php 
session_start();
//create connection
$servername = "localhost:3600";
$username = "root";
$password = "Salim123456";
$dbname = "id15418547_test";

//$con =  mysqli_connect ('localhost','root','1234');
$con = new mysqli($servername, $username, $password);
// mysqli_select_db ($con,'test');
mysqli_select_db($con,$dbname);


$email = $_POST['email'];

$password = $_POST['password'];
$mysql_query = "select * from userdata where email ='$email' AND password ='$password'";

$result = mysqli_query ($con , $mysql_query);
$num = mysqli_num_rows ($result);
$myJSON = json_encode($result);


if($num == 1){
    $_SESSION['username']  =  $email;
header('location:home.php');
echo "login sucessfully";


}
else {
    header('location:home.php');
   
}

?> 