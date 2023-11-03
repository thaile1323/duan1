<div class="menu-bar">
  <ul>
    <li>
      <span class="menu-item" style="background-color: red">HOME PAGE</span>
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
    <li class="hide-menu">
      <span class="menu-item">STORE LIST</span>
    </li>
    <li class="hide-menu">
      <span class="menu-item">ORDER</span>
    </li>
  </ul>
</div>
<div class="main-banner">
  <img src="website-user/image/slider_3.jpg">
</div>
</header>
</section>
<section class="section-product">
  <div class="slideshow-brand">
      <ul>
        <?php foreach ($data['list_slideshow'] as $item):?>
        <li>
          <img src="<?=$item['img_brand'];?>">
        </li>
        <?php endforeach; ?>
      </ul>
  </div>
  <div class="type-of-product">
    <?php foreach($data['list_brand'] as $brand): ?>
      <div class="converse">
        <a href="?mod=product&act=product&id=<?=$brand['name_brand'] ?>">
          <img src="<?=$brand['img_brand'] ?>">
        </a>
        <h1>
          <?=$brand['name_brand'] ?>
        </h1>
      </div>
      <?php endforeach; ?>
  </div>
  <div class="product-items">
    <div class="product-wrap-item">
      <div class="title">
        <h1>SẢN PHẨM KHUYẾN MÃI</h1>
      </div>
      <div class="product-wrap">
        <?php foreach ($data_promo['list_product']['all'] as $product): ?>
        <div class="product">
          <div class="product-name">
            <div class="product-image">
              <img src="<?php echo $product['img_product'] ?>">
            </div>
            <div class="name">
              <?php echo $product['name_product'] ?>
            </div>
            <div class="id">
              <?php echo $product['id_product'] ?>
            </div>
          </div>
          <div class="product-price">
            <b class="price">
              <?php echo number_format($product['price'], 0, '.', '.'); ?>
            </b>
            <a href="?mod=product&act=product_details&id=<?=$product['id_product']?>"><button>Chi tiết</button></a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="title" style="text-align: center; margin-bottom: 10px;">
      <h1>SẢN PHẨM MỚI</h1>
    </div>
    <div class="pallatower">
      <div class="details">
        <div class="image-details">
          <img src="website-user/image/banner_product_nangdong.jpg">
        </div>
        <div class="news">
          <h1>PALLADIUM PALLATOWER</h1>
          <p>PALLATOWER LO là sự kết hợp giữa phong cách cổ điển và thể thao với đế ngoài cao su
            chunky mượn từ dòng Revolt mang tính biểu tượng của Palladium. Thiết kế đơn giản
            nhưng tinh tế, kết hợp màu sắc đa dạng, giày PALLATOWER LO tạo nên một phong cách
            thanh lịch và đẳng cấp cho người sử dụng. Làm từ chất liệu vải cao cấp, sản phẩm
            không chỉ đem lại cảm giác êm ái và thoải mái khi sử dụng nhưng vẫn đảm bảo sự
            ổn định và độ bền cho sản phẩm. Điểm đặc biệt nổi bật của đôi giày chính là công
            nghệ Lite Technology được sử dụng trong thiết kế đế giày, giúp giảm trọng lượng
            và tăng độ êm ái khi di chuyển. Bạn sẽ không cảm thấy mỏi chân khi sử dụng
            giày PALLATOWER LO trong nhiều giờ liền. Nếu bạn đang tìm kiếm một đôi giày
            phù hợp cho nhiều hoạt động như đi làm, dạo phố hay đi chơi cùng bạn bè thì
            không thể bỏ qua dòng PALLATOWER này, sản phẩm phù hợp với nhiều phong cách
            thời trang khác nhau, từ trang phục công sở đến trang phục cá tính.</p>
          <h4>XEM TẤT CẢ ></h4>
        </div>
      </div>
      <div class="product-wrap">
        <div class="product-wrap">
          <?php foreach ($data_new['list_product']['all'] as $product): ?>
          <div class="product">
            <div class="product-name">
              <div class="product-image">
                <img src="<?php echo $product['img_product'] ?>">
              </div>
              <div class="name">
                <?php echo $product['name_product'] ?>
              </div>
              <div class="id">
                <?php echo $product['id_product'] ?>
              </div>
            </div>
            <div class="product-price">
              <b class="price">
                <?php echo number_format($product['price'], 0, '.', '.'); ?>
              </b>
              <a href="?mod=product&act=product_details&id=<?=$product['id_product']?>"><button>Chi tiết</button></a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="pallatower">
      <div class="details-vans">
        <div class="image-details">
          <img src="website-user/image/banner_product_thanhlich.jpg">
        </div>
        <div class="news">
          <h1>PALLADIUM PALLATOWER</h1>
          <p>PALLATOWER LO là sự kết hợp giữa phong cách cổ điển và thể thao với đế ngoài cao su
            chunky mượn từ dòng Revolt mang tính biểu tượng của Palladium. Thiết kế đơn giản
            nhưng tinh tế, kết hợp màu sắc đa dạng, giày PALLATOWER LO tạo nên một phong cách
            thanh lịch và đẳng cấp cho người sử dụng. Làm từ chất liệu vải cao cấp, sản phẩm
            không chỉ đem lại cảm giác êm ái và thoải mái khi sử dụng nhưng vẫn đảm bảo sự
            ổn định và độ bền cho sản phẩm. Điểm đặc biệt nổi bật của đôi giày chính là công
            nghệ Lite Technology được sử dụng trong thiết kế đế giày, giúp giảm trọng lượng
            và tăng độ êm ái khi di chuyển. Bạn sẽ không cảm thấy mỏi chân khi sử dụng
            giày PALLATOWER LO trong nhiều giờ liền. Nếu bạn đang tìm kiếm một đôi giày
            phù hợp cho nhiều hoạt động như đi làm, dạo phố hay đi chơi cùng bạn bè thì
            không thể bỏ qua dòng PALLATOWER này, sản phẩm phù hợp với nhiều phong cách
            thời trang khác nhau, từ trang phục công sở đến trang phục cá tính.</p>
          <h4>XEM TẤT CẢ ></h4>
        </div>
      </div>
      <div class="product-wrap">
        <div class="product-wrap">
          <?php foreach ($data_new['list_product']['all'] as $product): ?>
          <div class="product">
            <div class="product-name">
              <div class="product-image">
                <img src="<?php echo $product['img_product'] ?>">
              </div>
              <div class="name">
                <?php echo $product['name_product'] ?>
              </div>
              <div class="id">
                <?php echo $product['id_product'] ?>
              </div>
            </div>
            <div class="product-price">
              <b class="price">
                <?php echo number_format($product['price'], 0, '.', '.'); ?>
              </b>
              <a href="?mod=product&act=product_details&id=<?=$product['id_product']?>"><button>Chi tiết</button></a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="hightlight">
      <div class="banner-adv">
        <img src="website-user/image/banner_product_noibat.jpg">
      </div>
      <div class="title" style="text-align: center; margin: 5px 0 10px 0;">
        <h1>SẢN PHẨM HOT</h1>
      </div>
      <div class="product-wrap">
        <?php foreach ($data_hot['list_product']['all'] as $product): ?>
        <div class="product">
          <div class="product-name">
            <div class="product-image">
              <a href="product.html">
                <img src="<?php echo $product['img_product'] ?>">
              </a>
            </div>
            <div class="name">
              <?php echo $product['name_product'] ?>
            </div>
            <div class="id">
              <?php echo $product['id_product'] ?>
            </div>
          </div>
          <div class="product-price">
            <b class="price">
              <?php echo number_format($product['price'], 0, '.', '.'); ?>
            </b>
            <a href="?mod=product&act=product_details&id=<?=$product['id_product']?>"><button>Chi tiết</button></a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="see-more">
        <button>Xem thêm >></button>
      </div>
    </div>
</section>