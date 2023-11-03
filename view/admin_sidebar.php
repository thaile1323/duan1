<body>
<div id="sidebar">
        <div>
            <img src="https://theme.hstatic.net/200000265619/1001091352/14/logo.png?v=52" alt="logo" height="50"
                width="200">
        </div>
        <h2>Hello! Admin</h2>
        <div class="profile">
            <img src="https://tse3.mm.bing.net/th?id=OIP.ixZ69lPCOZ3ZO5UqSHQGIAHaHa&pid=Api&P=0&h=180" alt="image"
                height="30" width="30">
            <span><?=$_SESSION['user']['user_name']?></span>
        </div>
        <div class="general">
            <span>General</span>
        </div>
        <ul>
            <li><a href="?mod=admin&act=dashboard">Order</a></li>
            <li><a href="?mod=admin&act=product&page=1">Product</a></li>
            <li><a href="?mod=admin&act=categories">Categories</a></li>
            <li><a href="#">Report</a></li>
            <li><a href="#">Account</a></li>
        </ul>
        <div class="bottom-sidebar">
            <li><a href="#"><i class="fa-solid fa-gear"></i>Setting</a></li>
            <li><a href="?mod=page&act=home"><i class="fa-solid fa-right-from-bracket"></i>Log out</a></li>
        </div>
    </div>
    <div class="header">
        <div>
            <span><i><img src="https://tse3.mm.bing.net/th?id=OIP.ixZ69lPCOZ3ZO5UqSHQGIAHaHa&pid=Api&P=0&h=180" width="30" height="30"></i><?=$_SESSION['user']['email']?><i class="fa-solid fa-caret-down" style="color:#efe7e7; margin-left: 5px;"></i></span>
        </div>
    </div>