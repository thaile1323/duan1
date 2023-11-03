<!DOCTYPE html>
<html>

<head>
    <title>Account Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 20px auto;
            display: flex;
            justify-content: space-between;
        }

        .profile,
        .orders {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
        }
        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
        footer{
            position: absolute;
            bottom: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile">
            <h1>Hello, <span id="username" style="color: red;"><?=$_SESSION['user']['user_name']?></span></h1>
            <br>
            <p>Phone: <span id="phone"><?=$_SESSION['user']['phone']?></span></p>
            <p>Address: <span id="address">Quận 12</span></p>
            <p>Country: <span id="country">Việt Nam</span></p>
            <p>Zip Code: <span id="zip">70000</span></p>
        </div>
        <div class="orders">
            <h2>Orders</h2>
            <ul id="orderList"></ul>
        </div>
    </div>
</body>

</html>