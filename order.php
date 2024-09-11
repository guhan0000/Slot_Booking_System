<?php

$conn = mysqli_connect('localhost','root','','user');

if(!$conn)
{
    die('Could not Connect'.mysqli_connect_error());
}
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Html.html to edit this template
-->
<html>
    <head>
        <title>FPS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                position: absolute;
                left: 38%;
                align-items: center;
                justify-content: center;
                
            }
            table,tr,th{
                border: 2px solid black;
                border-collapse: collapse;
                text-align:center;
                positon:absolute;left:10%;align-contents: center;size:100px;
            }
        .overall {
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
        }
        button {
            margin: 20px;
            background-color:wheat;

        }
        
        
        </style>
    </head>
    <body>

    <?php
        //$user =  $_POST['t1'];
        $user_name=$_COOKIE['username'];
    ?>
        <div>
           <h1>TAKE YOUR ORDER</h1>
       </div>
       <h3>Hello <?php $user_name; ?> </h3>
       <form action="update.php" method="post">
            <table>
                <tr><th>Product</th><th>Stock<br> 100KG </th>
            </tr>
            <tr><td>RICE</td>
            <td><input type="number" id="t1" name="t1" onchange="generate()" placeholder="Quantity in  kg"/></td><br> <br>
            </tr>
            <tr><td>SUGAR</td><td><input type="number" id="t2" name="t2" onchange="generate()" placeholder="Quantity in Kg"/><td><br> <br>
            </tr>
            <tr><td>WHEAT<td><input type="number" id="t3" name="t3" onchange="generate()" placeholder="Quantity in Kg"/><td>
        </tr><br> <br>            
            <tr><td>KEROSENE</td><td><input type="number" id="t4" name="t4" onchange="generate()" placeholder="quantity in liters"/></td><br> <br>
            </tr>
        </table> <br> 

    </form>
    <input type="submit" value="SUBMIT" onclick="generate()"/>
        <div class="overall">
        <button id="b1" onclick="b1()" name="b1"></button>
        <div class="d1" id="d1">
        </div>
        <div class="d2">
            <button id="b2" onclick="b1()" name="b2"></button>
        </div>
        <div class="d3">
            <button id="b3" onclick="b1()" name="b3"></button>
        </div>
        <div class="d4">
            <button id="b4" onclick="b1()" name="b4"></button>
        </div>
    </div>
    <div class="overall">
        <div id="d5" name="s1" value="1" onclick="set()">

        </div>
        <div id="d6" name="s1" value="2" onclick="set1()">

        </div>
    </div>
         
    <script>
        function generate()
        {
        var date = new Date();
        //document.getElementById("b1").value=date.getDate().toString();
        //console.log(date.getDate());
        var b1 =document.getElementById("b1");
        var b2 =document.getElementById("b2");
        var b3 =document.getElementById("b3");
        var b4 =document.getElementById("b4");
        
        //document.getElementById("b1").value=date.getDate().toString();
 
        //var val = b1.getAttribute("value");
        //console.log(val);
        b1.innerHTML=(date.getDate()+1)+"/"+(date.getMonth()+1);
        b1.setAttribute("value",(date.getDate()+1));
        //var val = b1.getAttribute("value");
        //console.log(val);
        b2.innerHTML=(date.getDate()+2)+"/"+(date.getMonth()+1);
        b3.innerHTML=(date.getDate()+3)+"/"+(date.getMonth()+1);
        b4.innerHTML=(date.getDate()+4)+"/"+(date.getMonth()+1);
        
        /*b2.setAttribute("value",date.getDate()+2);
        b3.setAttribute("value",date.getDate()+3);
        b4.setAttribute("value",date.getDate()+4);
        */
        }
        function set()
        {
            setAttribute("value","mrg");
            Location("update.php");
        }
        
        function set1()
        {
            setAttribute("value","aft");
            Location("update.php");
        }
        function b1() {
            var node = document.createElement("input");
        ///b1.innerHTML=(date.getDate()+1)+"/"+date.getMonth();
        //b1.innerHTML=(date.getDate()+1)+"/"+date.getMonth();
            node.setAttribute("type", "button");
            node.setAttribute("value", "10AM-1PM");
            document.getElementById("d5").appendChild(node);


            var node1 = document.createElement("input");
            node1.setAttribute("type", "button");
            node1.setAttribute("value", "2PM-4PM");
            document.getElementById("d6").appendChild(node1);
        }
        /*function b2() {
            var node = document.createElement("input");
            node.setAttribute("type", "submit");
            node.setAttribute("value", "10AM-1PM");
            document.getElementById("d5").appendChild(node);

            var node1 = document.createElement("input");
            node1.setAttribute("type", "submit");
            node1.setAttribute("value", "2PM-4PM");
            document.getElementById("d6").appendChild(node1);
        }
        function b3() {
            var node = document.createElement("input");
            node.setAttribute("type", "submit");
            node.setAttribute("value", "10AM-1PM");
            document.getElementById("d5").appendChild(node);

            var node1 = document.createElement("input");
            node1.setAttribute("type", "submit");
            node1.setAttribute("value", "2PM-4PM");
            document.getElementById("d6").appendChild(node1);
        }
        function b4() {
            var node = document.createElement("input");
            node.setAttribute("type", "submit");
            node.setAttribute("value", "10AM-1PM");
           document.getElementById("d5").appendChild(node);

            var node1 = document.createElement("input");
            node1.setAttribute("type", "submit");
            node1.setAttribute("value", "2PM-4PM");
            document.getElementById("d6").appendChild(node1);
        }*/

    </script>
    </body>
</html>

