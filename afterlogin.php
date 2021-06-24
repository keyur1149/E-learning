<?php
require_once "connect.php";
echo $_COOKIE["$cookie_value"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            margin: 0px;
            padding: 0px;
        }
        body>div{
            margin: 20px;
            padding: 25px 150px;
        }
        h1{
            text-align: center;
            font-size: 45px;
        }
        .all{
            display: flex;
            padding: 45px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .product{
            border: 2px solid red;
            padding: 20px   ;
            display: flex;
            flex-direction: column;
    align-items: center;
        }
        .product>img{
            width: 250px;
            height: 250px;
        }
        .product>p{
            font-size: 25px;
        }
        .product>a{
            margin: 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: black;
            background-color: aqua;
            border-radius: 5px;
            font-size: 25px;
        }
    </style>
</head>

<body>
    <div>
        <h1>which course you buy ?</h1>
        <div class="all">
            <div class="product">
                <img src="lan/c++.png">
                <p>C++</p>
                <p>Only 500₹</p>
                <a href="buy.php">BUY</a>
            </div>
            <div class="product">
                <img src="lan/c.png">
                <p>C</p>
                <p>Only 500₹</p>
                <a href="">BUY</a>
            </div>
            <div class="product">
                <img src="lan/css.png">
                <p>CSS</p>
                <p>Only 500₹</p>
                <a href="">BUY</a>
            </div>
            <div class="product">
                <img src="lan/html.png">
                <p>HTML</p>
                <p>Only 500₹</p>
                <a href="">BUY</a>
            </div>
            <div class="product">
                <img src="lan/js.png">
                <p>JS</p>
                <p>Only 500₹</p>
                <a href="">BUY</a>
            </div>
            <div class="product">
                <img src="lan/python.png">
                <p>Python</p>
                <p>Only 500₹</p>
                <a href="">BUY</a>
            </div>
        </div>
    </div>
</body>
</html>