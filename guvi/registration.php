<?php 
session_start();
header('location:index.html');
if(isset($_POST['login'])){


$servername = "localhost:3600";
$username = "root";
$password = "Salim123456";
$dbname = "id15418547_test";

    //$con =  mysqli_connect ('localhost','root','1234');

    //create connection
$con =  mysqli_connect ($servername, $username, $password);
mysqli_select_db($con,$dbname);
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$password = $_POST['password'];
$s = "select * from userdata where name ='$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo"  Username Already Taken";
}
else {
    // prepare and bind
    $stm="INSERT INTO userdata (name ,email, password,age) VALUES (?,?,?,?)";
    $stmt->bind_param("sssi", $name, $email, $password,$age);
// set parameters and execute
$name = "John";
$email = "john@example.com";
$password="abcd";
$age =12;
$name = "mac";
$email = "mac@example.com";
$password="abcde";
$age =21;
$stmt->execute();

    mysqli_query($con ,$stm);
    echo "Registration Successfully";
    
$stmt->close();

}
}
?> 