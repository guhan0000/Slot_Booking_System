 <!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Html.html to edit this template
-->
<html>
    <head>
        <title>Ration Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
    </head>
    <body style="background-color:cornsilk;">
        <div id="div1">
            <h1>Ration shop</h1>
            <?php
            if(isset($_GET['error']))
            {
                ?>
                <div style="margin-left:250px;margin-right:250px;border:3px solid grey ;padding:8px;color:red;background-color: turquoise ">
                <?php echo $_GET['error']; ?>
            </div>
            <?php
            }
            ?>
            <br>
`           <form action="login.php" method="post">
            Card-Holder Name :
            <input type="text" id="t1"placeholder="CardHolder Name:" name="user" onchange="nameDisplay()"required=""/>
             <br> <br> 
             Card Number    &emsp; &emsp;:
            <input type="text" id="u2" name ="Card_No" placeholder="CardNo:"style="align-items:center;font-size:15px;font-family:monospace;"/>
            <br> <br> 
            Mobile Number &emsp;:
            <input type="text" id="u3" placeholder="Mobile No:" name ="mobile" style="align-items:center;font-size:15px;font-family:monospace;"/>
            <br> <br> 
            <br>
            <div id="d1">
            </div>
            <a href="reg.html" style="text-decoration: none ">REGISTER FOR THE FIRST TIME LOGIN?</a><br>
            <br>
            <input type="submit" id="b2" value="Submit" style="color:" >
        </form>
        </div>
        <script>
            function nameDisplay(){
                var pattern = /^[A-Z]{1}[a-z]{5}$/;
                  var a=document.getElementById("t1").value;
                if(!pattern.test(a)){
                    document.getElementById("d1").innerHTML="Invalid user";
                    document.getElementById("d1").style="color:red";
                }
                /*else{
                    document.getElementById("d1").innerHTML="invalid";
                    document.getElementById("d1").style="color:red";
                }*/
            }
            </script>
    </body>
</html>
