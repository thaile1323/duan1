<head>
<link rel="stylesheet" href="website-user/css/checkout.css">
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
<div class="section-head" style="padding: 15px 10px;">
    <a href="?mod=page&act=home">Trang chủ</a>/<a href="?mod=product&act=product_cart">Giỏ hàng</a>/<a href="" class="section-title">Thanh toán</a>
</div>
<form action="?mod=page&act=sendmail<?= isset($_SESSION['user']) ? '' : '&id=' . $data['sp']['id_product'] ?>" method="POST">
    <div id="main-content-wp" class="checkout-page">
        <div id="checkout-wp" class="section-detail">
            <div id="custom-info-wp" class="fl-left">
                <h3 class="title">THÔNG TIN KHÁCH HÀNG</h3>
                <div class="detail">
                    <div class="input_name">
                        <input type="text" name="fullname" id="fullname" placeholder="Họ và tên" required>
                    </div>
                    <div class="input_group_info">
                        <div class="email">
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="tel">                            
                            <input type="tel" name="tel" id="tel" placeholder="Số điện thoại" required>
                        </div>
                    </div>
                    <div class="input_address">
                        <div class="cod">
                            <input type="radio" checked="checked" id="direct-payment" name="payment-method"
                            value="direct-payment">
                            <label for="direct-payment">Nhận và thanh toán tại cửa hàng</label>
                        </div>                        
                        <div class="at_shop">
                            <input type="radio" id="payment-home" name="payment-method" value="payment-home">
                            <label for="payment-home">Nhận và thanh toán tại nhà</label>
                        </div>                       
                    </div>
                    <div class="input_note">
                        <textarea name="note" placeholder="Ghi chú"></textarea>
                    </div>
                </div>
            </div>
            <div id="order-review-wp" class="fl-right">
                <h3 class="title">THÔNG TIN ĐƠN HÀNG</h3>
                <div class="detail">
                    <table class="shop-table">
                        <thead>
                            <tr style="font-size: large">
                                <td>Ảnh</td>
                                <td>Sản phẩm</td>
                                <td>Giá trị</td>
                            </tr>
                        </thead>
                        <?php if(isset($_SESSION['user'])):?>  
                            <tbody>                          
                                <?php foreach ($_SESSION['cart'] as $item):?>
                                    <tr class="cart-item">
                                        <td><img src="<?=$item['img_product']?>" width="100" height="100"></td>
                                        <td class="product-name"><?=$item['product_name']?><strong class="product-quantity">x <?=$item['qty']?></strong></td>
                                        <td class="product-total"><?=number_format($item['qty'] * $item['price'], 0, ".", ".")?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                            <tfoot>
                                <tr class="order-total">
                                    <td style="font-size: large; font-weight: bold">Tổng đơn hàng:</td>
                                    <td></td>
                                    <td><strong class="total-price"><?php
                                $sub_total = 0;
                                foreach ($_SESSION['cart'] as $item) {
                                    $sub_total += $item['qty'] * $item['price'];
                                }
                                echo number_format($sub_total, 0, ".", ".");
                            ?></strong></td>
                                </tr>
                            </tfoot>
                        <?php else:?>
                            <tbody>                          
                                    <tr class="cart-item">
                                        <td><img src="<?=$data['sp']['img_product']?>" width="100" height="100"></td>
                                        <td class="product-name"><?=$data['sp']['name_product']?><strong class="product-quantity">x 1</strong></td>
                                        <td class="product-total"><?=number_format($data['sp']['price'], 0, ".", ".")?></td>
                                    </tr>
                            </tbody>
                            <tfoot>
                                <tr class="order-total">
                                    <td style="font-size: large; font-weight: bold">Tổng đơn hàng:</td>
                                    <td></td>
                                    <td><strong class="total-price"><?=number_format($data['sp']['price'], 0, ".", ".")?></strong></td>
                                </tr>
                            </tfoot>
                        <?php endif;?>
                    </table>
                    <div class="add_voucher">
                        <div class="voucher_image">
                            <img src="https://cdn-icons-png.flaticon.com/128/8074/8074470.png">
                        </div>
                        <div class="add_code">
                            <input type="text" name="code" id="code" placeholder="Nhập mã giảm giá">
                        </div>
                        <div class="add">                            
                            <button>Áp dụng</button>
                        </div>
                    </div>
                    <div class="list_voucher">
                        <p>Xem các voucher của bạn</p>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</form>