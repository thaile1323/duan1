<head>
  <link rel="stylesheet" href="website-user/css/details.css" />
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
<div class="link">
    <span><a href="index.html">Trang chủ</a> > <?=$data['sp']['name_product']?></span>
</div>
<div class="section-details">
    <div class="gallery">
        <div>
            <img src="<?=$data['sp']['img_product']?>">
        </div>
    </div>
    <div class="details">
        <div class="gallery_02">
            <?php foreach ($data['img'] as $value):?>
                <div class="gallery_02_img">
                    <img src="<?=$value['img_detail']?>" height=100 width=100>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="dashed-line">
            <i class="fa fa-cut"></i>
        </div>
        <div class="info">
            <div class="title">
                <h2><?=$data['sp']['name_product']?></h2>
                <p>Thương hiệu:<?=$data['sp']['name_cat']?> | Kho: Còn hàng</p>
                <p>SKU: <?=substr($data['sp']['id_product'],4, 20)?></p>
                <p>Barcode: 16AFC5K</p>
            </div>
            <div class="price">
                <h2><?=number_format($data['sp']['price'],0,".",".")?></h2>
            </div>
            <div class="promotion">
                <p>KHUYẾN MÃI</p>
                <button>Ưu đãi thành viên mới tại website</button><br>
                <button>Ưu đãi thanh toán qua ví VNPay</button><br>
                <button>Vòng xoay may mắn</button>
            </div>
            <div class="size">
                <p>Size:</p>
                <button>35</button>
                <button>36</button>
                <button>37</button>
                <button>38</button>
                <button>39</button>
                <button>40</button>
            </div>
            <div class="counter">
                <p>Số lượng: </p>
                <button>-</button>
                <span>1</span>
                <button>+</button>
            </div>
            <div class="btn-order">
                <?php if(isset($_SESSION['user'])):?>
                    <div class="buy-now">
                        <a href="?mod=product&act=product_cart&id=<?=$data['sp']['id_product']?>"><button>Mua ngay</button></a>
                    </div>
                <?php else:?>
                    <div class="buy-now">
                        <a href="?mod=product&act=checkout&id=<?=$data['sp']['id_product']?>"><button>Mua ngay</button></a>
                    </div>
                <?php endif;?>
                <div class="add_cart">
                    <a href="?mod=product&act=product_cart&id=<?=$data['sp']['id_product']?>"><button>Thêm vào giỏ hàng</button></a>
                </div>
            </div>
        </div>
        <?php if(isset($_SESSION['thongbao'])): ?>
            <div class="alert alert-warning" style="color: red">
                <?= $_SESSION['thongbao']; ?>
            </div>
        <?php endif; unset($_SESSION['thongbao']); ?>
    </div>
    <div class="table">
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2">THÔNG TIN SẢN PHẨM</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>SKU</th>
                    <th><?php echo substr($data['sp']['id_product'],4, 20)?></th>
                </tr>
                <tr>
                    <th>Dòng sản phẩm</th>
                    <th>Standard Fit Pride Deconstructed Graphic Tee</th>
                </tr>
                <tr>
                    <th>Giới tính</th>
                    <th>Unisex</th>
                </tr>
                <tr>
                    <th>Màu sắc</th>
                    <th>CONVERSE BLACK
                        (Màu sắc sản phẩm thực tế sẽ có sự chênh lệch , tham khảo tại ĐÂY)</th>
                </tr>
                <tr>
                    <th>Chế độ bảo hành</th>
                    <th>Không bảo hành</th>
                </tr>
                <tr>
                    <th>Phụ kiện kèm theo</th>
                    <th>Shopping Bag + HĐ Mua Hàng</th>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="wrap">
    <div class="recent">
        <div class="comment-section">
            <?php if(isset($_SESSION['user'])):?>
                <h2>Đánh giá</h2>          
                <div class="comment-form">
                    <form method="POST">
                        <textarea placeholder="Viết đánh giá của bạn..." name="content"></textarea>
                        <input type="submit" name="submit" value="Gửi đánh giá"></input>
                    </form>
                </div>
            <?php endif;?>
            <h2>Tất cả đánh giá</h2>        
            <div class="comments">
            <?php if(empty($dataComment)): ?>
                <p style="color:red; margin-top:10px;">Sản phẩm chưa có đánh giá nào!!</p>
                <?php else: ?>
                    <?php foreach ($dataComment as $comment):?>
                    <div class="comment">
                        <div class="comment-header">
                            <span class="username"><?=$comment['user_name']?></span>
                            <span class="date"><?=date($comment['ngaygui'])?></span> 
                        </div>
                        <div class="comment-content">
                        <?=$comment['content']?>
                        </div>
                    </div>
                    <?php if(isset($_SESSION['user'])):?>
                        <?php if($_SESSION['user']['role'] == 'admin'):?>
                            <div class="btn-group" style="margin-bottom: 10px;">
                                <a href="?mod=product&act=delete_comment&id_product=<?=$comment['id_product']?>&id_cmt=<?=$comment['id_cmt']?>">
                                <button class="btn-delete">Xóa bình luận</button></a>
                            </div>
                        <?php endif;?>
                    <?php endif;?>
                <?php endforeach;?>
            <?php endif;?>
            </div>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="recent">
        <div class="title">
            <p>Đã xem gần đây</p>
        </div>
        <div class="product-wrap">
            <div class="product">
                <div class="product-name">
                    <div class="product-image">
                        <img src="website-user/image/121178-1_7ae11c7ec1b44e70b4689c4c3f063087_medium.webp">
                    </div>
                    <div class="name">
                        Giày Converse Chuck Taylor
                    </div>
                    <div class="id">
                        SKU: 10025863-A01-S
                    </div>
                </div>
                <div class="product-price">
                    <b class="price">2,500,000</b>
                    <a href="?mod=product&act=product_cart"><button>Chi tiết</button></a>
                </div>
            </div>
            <div class="product">
                <div class="product-name">
                    <div class="product-image">
                        <img src="website-user/image/168816_standard_f5149b2e3ee84ef494cfa8f23ed4f77f_medium.webp">
                    </div>
                    <div class="name">
                        Giày Converse Chuck Taylor
                    </div>
                    <div class="id">
                        SKU: 10025863-A01-S
                    </div>
                </div>
                <div class="product-price">
                    <b class="price">2,500,000</b>
                    <button>Chi tiết</button>
                </div>
            </div>
            <div class="product">
                <div class="product-name">
                    <div class="product-image">
                        <img
                            src="https://product.hstatic.net/200000265619/product/a06031c-01-web_6f5ddf7405e6406cb2e91a0c50eb7dc0_medium.jpg">
                    </div>
                    <div class="name">
                        Giày Converse Chuck Taylor
                    </div>
                    <div class="id">
                        SKU: 10025863-A01-S
                    </div>
                </div>
                <div class="product-price">
                    <b class="price">2,500,000</b>
                    <button>Chi tiết</button>
                </div>
            </div>
            <div class="product">
                <div class="product-name">
                    <div class="product-image">
                        <img src="website-user/image/121176-1_30c8dc6f99744c528e1fb54fe5afce3c_medium.webp">
                    </div>
                    <div class="name">
                        Giày Converse Chuck Taylor
                    </div>
                    <div class="id">
                        SKU: 10025863-A01-S
                    </div>
                </div>
                <div class="product-price">
                    <b class="price">2,500,000</b>
                    <button>Chi tiết</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="recent">
        <div class="title">
            <p>Sản phẩm cùng loại</p>
        </div>
        <div class="product-wrap">
            <div class="product">
                <div class="product-name">
                    <div class="product-image">
                        <img src="website-user/image/121178-1_7ae11c7ec1b44e70b4689c4c3f063087_medium.webp">
                    </div>
                    <div class="name">
                        Giày Converse Chuck Taylor
                    </div>
                    <div class="id">
                        SKU: 10025863-A01-S
                    </div>
                </div>
                <div class="product-price">
                    <b class="price">2,500,000</b>
                    <button>Chi tiết</button>
                </div>
            </div>
            <div class="product">
                <div class="product-name">
                    <div class="product-image">
                        <img src="website-user/image/168816_standard_f5149b2e3ee84ef494cfa8f23ed4f77f_medium.webp">
                    </div>
                    <div class="name">
                        Giày Converse Chuck Taylor
                    </div>
                    <div class="id">
                        SKU: 10025863-A01-S
                    </div>
                </div>
                <div class="product-price">
                    <b class="price">2,500,000</b>
                    <button>Chi tiết</button>
                </div>
            </div>
            <div class="product">
                <div class="product-name">
                    <div class="product-image">
                        <img
                            src="https://product.hstatic.net/200000265619/product/a06031c-01-web_6f5ddf7405e6406cb2e91a0c50eb7dc0_medium.jpg">
                    </div>
                    <div class="name">
                        Giày Converse Chuck Taylor
                    </div>
                    <div class="id">
                        SKU: 10025863-A01-S
                    </div>
                </div>
                <div class="product-price">
                    <b class="price">2,500,000</b>
                    <button>Chi tiết</button>
                </div>
            </div>
            <div class="product">
                <div class="product-name">
                    <div class="product-image">
                        <img src="website-user/image/121176-1_30c8dc6f99744c528e1fb54fe5afce3c_medium.webp">
                    </div>
                    <div class="name">
                        Giày Converse Chuck Taylor
                    </div>
                    <div class="id">
                        SKU: 10025863-A01-S
                    </div>
                </div>
                <div class="product-price">
                    <b class="price">2,500,000</b>
                    <button>Chi tiết</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>