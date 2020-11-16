<?php 
session_start();
header('location:index.html');
if(isset($_POST['login'])){

$con =  mysqli_connect ('localhost','root','1234');
mysqli_select_db($con,'test');
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
    $reg="INSERT INTO userdata (name ,email, password,age) VALUES ('$name','$email','$password','$age')";
    mysqli_query($con ,$reg);
    echo "Registration Successfully";
}
}
?> 