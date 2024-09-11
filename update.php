<?php
    $products[5];
    $products[0]=$_POST["t1"];
    $products[1]=$_POST["t2"];
    $products[2]=$_POST["t3"];
    $products[3]=$_POST["t4"];

    $user = $_POST['user'];
    $ses = $_POST['s1'];
    //$products[0]=$_POST["t1"];

    $conn=mysqli_connect('localhost','root','','user');

    $sqlquery="Select Max(Order_ID) From orders";
    $max = mysqli_query($conn,$sqlquery);
    if($max<=40)
    {
        if($max<=20 && $ses==1)
        {
            $sql = "INSERT INTO orders(Order_ID, User_Name, Rice, Sugar, Wheat, Kerosene) VALUES ($max,$user,$products[0],$products[1],$products[2],$products[4])";
        }
        else if($max>20 && $ses==2 && $max>=20) 
        {
            $sql = "INSERT INTO orders(Order_ID, User_Name, Rice, Sugar, Wheat, Kerosene) VALUES ($max,$user,$products[0],$products[1],$products[2],$products[4])";
        }
        
        $sql="INSERT INTO products (Product_Name, User_Name, Location, Puchase_Date, Mobile_No,) VALUES ($products[i],$user,$location,$Date,$mob)";
    }
?>