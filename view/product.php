<head>
  <link rel="stylesheet" href="website-user/css/product.css" />
</head>
<div class="menu-bar">
        <ul>
          <li>
            <a href="?mod=page&act=home"><span class="menu-item">HOME PAGE</span></a>
          </li>
          <li>
            <span class="menu-item" style="background-color: red">NEW ARRIVAL</span>
          </li>
          <li>
            <span class="menu-item">IN STORE ONLY</span>
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
      <div class="banner-adv">
        <img
          src="website-user/image/banner_product_noibat.jpg">
      </div>
      <div class="details-content">
        <div class="content">
          <p>Thành lập năm 1908, thương hiệu Converse đã nổi tiếng :’’Công ty thể thao truyền thống của MỸ ‘’ và hãng
            cũng sở hữu những
            thiết kế kinh điển như Chuck Taylor All Star, Jack Purcell, One Star, Chuck 70s, Chuck Taylor All Star CX,
            Run Star Hike,...
            Ngày nay, Converse được ưu chuộng và trở thành biểu tượng của thời trang đường phố và có mặt trên 160 quốc
            gia
          </p>
        </div>
      </div>
      <div class="sort-mobile">
        <div class="filter-bar">
          <select class="filter-select">
            <option value="all">Tất cả</option>
            <option value="electronics">Giày</option>
            <option value="clothing">Quần áo</option>
            <option value="books">Phụ kiện</option>
          </select>
          <button class="filter-button">Lọc</button>
        </div>
      </div>
      <div class="section-product">
        <div class="main-product">
          <div class="sort">
            <h3>Danh mục sản phẩm</h3>
            <div class="type-sort">
              <p>CONVERSE</p>
              <p>VANS</p>
              <p>PALLADIUM</p>
              <p>SNEAKER BUZZ</p>
              <p>NIKE</p>
              <p>ADIDAS</p>
              <p>SUBRA</p>
              <p>SNEAKER RAP</p>
            </div>
            <h3>Mức giá</h3>
            <div class="type-sort">
              <input type="checkbox">
              <label>500.000 - 1.000.000</label><br>
              <input type="checkbox">
              <label>1.500.000 - 2.000.000</label><br>
              <input type="checkbox">
              <label>2.500.000 - 3.000.000</label><br>
              <input type="checkbox">
              <label>Trên 3.000.000</label>
            </div>
          </div>
          <div class="main-product-wrap">
            <div class="product-wrap">
            <?php $products['list_product']['all'] = get_productByBrand($_GET['id'], 4)?>
            <?php if(empty($products['list_product']['all'])){
                  echo $thongbao = "Danh mục rỗng";
              }
            ?>
            <?php foreach($products['list_product']['all'] as $item):?>
                <div class="product">
                  <div class="product-name">
                    <div class="product-image">
                      <img
                        src="<?=$item['img_product']?>">
                    </div>
                    <div class="name">
                    <?=$item['name_product']?>
                    </div>
                    <a href="">
                      <div class="id">
                      <?=$item['id_product']?>
                      </div>
                    </a>
                  </div>
                  <div class="product-price">
                    <b class="price"><?=$item['price']?></b>
                    <a href="?mod=product&act=product_details&id=<?=$item['id_product']?>"><button>Chi tiết</button></a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="product-wrap">
            <?php foreach($products['list_product']['all'] as $item):?>
                <div class="product">
                  <div class="product-name">
                    <div class="product-image">
                      <img
                        src="<?=$item['img_product']?>">
                    </div>
                    <div class="name">
                    <?=$item['name_product']?>
                    </div>
                    <a href="">
                      <div class="id">
                      <?=$item['id_product']?>
                      </div>
                    </a>
                  </div>
                  <div class="product-price">
                    <b class="price"><?=$item['price']?></b>
                    <a href="?mod=product&act=product_details&id=<?=$item['id_product']?>"><button>Chi tiết</button></a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>