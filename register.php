<?php
$conn = mysqli_connect('localhost','root','','user');

$name=$_POST['name'];
//echo $name;
$cno = $_POST['cno'];
$mob=$_POST['mob'];
$add1 = $_POST['Add1'];
$add2 = $_POST['Add2'];
//$add = $add1+$add2;
$district = $_POST['inputDist'];
$Thaluk =$_POST['inputThaluk'];
$pin = $_POST['pin'];
$email=$_POST['email'];
//echo $email;
$pass = $_POST['pass'];

$sql = "INSERT INTO user(User_Name, Card_No, Mobile, Address, District, Taluk, Email, Password, Pincode) VALUES('$name', '$cno','$mob' ,'$add1', '$district', '$Thaluk',' $email',' $pass', '$pin')";

//mysqli_query($conn,$sql);
$conn->query($sql);

if(mysqli_query($conn,$sql))
{
    echo "Row Inserted";

}

?>