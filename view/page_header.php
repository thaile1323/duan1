<body>
  <div class="banner-adv">
    <img src="website-user/image/banner.jpg">
  </div>
  <section class="container">
    <header>
      <div class="header-items">
        <div class="menu-icons-screen">
          <i class="fa fa-bars menu-icons-screen"></i>
        </div>
        <div class="nav-mobile">
          <div class="nav-item-mobile">
            <div class="close-menu-mobile">
              <i class="fa-solid fa-xmark"></i>
            </div>
            <h3>Danh mục</h3>
            <ul>
              <li>
                <span class="menu-item">HOME PAGE</span>
              </li>
              <li>
                <span class="menu-item">NEW ARRIVAL</span>
              </li>
              <li>
                <span class="menu-item">DIRECT</span>
              </li>
              <li>
                <span class="menu-item">SPECIAL PRICE</span>
              </li>
              <li>
                <span class="menu-item">NEWS</span>
              </li>
              <li>
                <span class="menu-item">STORE LIST</span>
              </li>
              <li>
                <span class="menu-item">ORDER</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="logo">
          <img src="website-user/image/logo.webp">
        </div>
        <div class="search-bar">
          <form act="" method="GET">
            <input type="hidden" name="mod" value="product" >
            <input type="hidden" name="act" value="search" >
            <input type="text" placeholder="Tìm kiếm..." name="keyword" style="width: 400px;">
            <span><i class="fa fa-search"></i></span>
          </form>
        </div>
        <div class="header-item-right">
          <div class="call">
            <div class="mobile-call">
              <button><i class="fa fa-phone"></i></button>
            </div>
            <button class="hide-button"></i>Tư vấn bán hàng<br><b>Gọi ngay: 0334750415</b></button>
          </div>
          <div class="register">
            <ul>
              <li>
                <div class="dropdown">
                  <?php
                    if(isset($_SESSION['user']['id_user']) && $_SESSION['user']['id_user']>0){
                      echo '<button><span><i class="fa fa-user"></i></span></button>
                            <div class="dropdown-content">
                              <a href="?mod=page&act=account">Tài khoản</a>
                              <a href="?mod=user&act=logout">Đăng xuất</a>
                            </div>';
                    }else{
                      echo '<a href="?mod=user&act=login"><button><span><i class="fa fa-user"></i></span></button></a>';
                    }
                  ?>
                </div>
              </li>
            </ul>
          </div>
          <div class="cart">
            <button><span><i class="fa fa-shopping-basket"></i></span></button>
          </div>
        </div>
      </div>