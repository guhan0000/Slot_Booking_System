<?php

//session_create_id();
session_start();

$username= $_POST['user'];
$card_no= $_POST['Card_No'];
$mobile= $_POST['mobile'];
//echo $username;
//echo $card_no;


$conn = mysqli_connect('localhost','root','','user');

if(!$conn)
{
    die('Could not Connect'.mysqli_connect_error());
}

$query = "SELECT * FROM user where Card_No = $card_no";
$result= $conn->query($query);
//mysqli_query($conn,$query);
if(mysqli_query($conn,$query)->num_rows==0)
{
    echo "no rows Found";

    //include "login_error.php";
    header("Location:index.php?error=Incorrect Card No or User Name");

}
else{
    ?>
    <html>
        <form action="order.php" method="post">
        <input type="hidden" value="<?php $username?>" id="t1" name="t1">
        <input type="hidden" value='<?php $mobile?>' name="t2">
        </form>    
    </html>
    <?php

    header("Location:order.php");
    setcookie("Cookie_name",$username);
    //set
    //$cookiename=$_COOKIE[$Cookie_name];
    $_COOKIE['username'] = $username;
    echo "User Exist";
}
//echo "Connection Successful";
mysqli_close($conn);
?>
