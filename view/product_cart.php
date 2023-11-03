<head>
  <link rel="stylesheet" href="website-user/css/cart.css" />
</head>
<div class="menu-bar">
                <ul>
                    <li>
                        <a href="?mod=page&act=home"><span class="menu-item">HOME PAGE</span></a>
                    </li>
                    <li>
                        <span class="menu-item">NEW ARRIVAL</span>
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
        </header>
    </section>
    <div class="link">
        <p>Trang chủ <span>> Giỏ hàng của bạn</span></p>
    </div>
    <div class="cart">
        <div class="title">
            <h2>Giỏ hàng của bạn</h2>
            <p>Có <?=$total_product?> sản phẩm trong giỏ hàng</p>
            <div class="sort-line"></div>
        </div>
        <div class="section-cart">
            <div class="wrap-cart">
                <div class='cart-item'>
                    <?php foreach ($_SESSION['cart'] as $item):?>
                        <div class="product">
                            <div class="product-img">
                                <img
                                    src="<?=$item['img_product']?>">
                            </div>
                            <div class="content">
                                <div>
                                    <h3><?=$item['product_name']?></h3>
                                    <p><?=number_format($item['price'],0,".",".")?></p>
                                    <p>36.5 / Black/Lunar Grey/Cyber Teal / Canvas</p>
                                    <div class="quantity">
                                        <button class="minus">-</button>
                                        <input type="text" value="<?=$item['qty']?>">
                                        <button class="plus">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-close">
                                <div class="icon">
                                    <a href="?mod=product&act=product_delete&id=<?=$item['id_product']?>"><img src="website-user/image/ic_close.webp"></a>
                                </div>
                                <div>
                                    <p>Thành tiền: <?=number_format($item['qty']*$item['price'],0,".",".")?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="infomation">
                <h2>Thông tin đơn hàng</h2>
                <div class="total-price">
                    <p>Tổng tiền: <span>
                        <?php
                            $sub_total = 0;
                            foreach ($_SESSION['cart'] as $item) {
                                 $sub_total += $item['qty'] * $item['price'];
                            }
                            echo number_format($sub_total, 0, ".", ".");
                        ?>
                    </span></p>
                </div>
                <div class="shipping">
                    Phí vận chuyển sẽ được tính ở trang thanh toán.<br><br>
                    Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.
                </div>
                <div class="btn-payment">
                    <div>
                        <a href="?mod=product&act=checkout"><button>Thanh toán</button></a>
                    </div>
                </div>
                <div class="btn-reply">
                    <div>
                        <a href="?mod=page&act=home"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width="17">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                            </svg>
                            Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="note">
        <h3>Ghi chú đơn hàng</h3>
        <textarea rows="4" placeholder="Ghi chú"></textarea>
    </div>