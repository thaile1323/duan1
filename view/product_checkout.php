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
                    <div class="field-wp">
                        <label>Họ tên</label>
                        <input type="text" name="fullname" id="fullname" required>
                    </div>
                    <div class="field-wp">
                        <label>Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="field-wp">
                        <label>Địa chỉ nhận hàng</label>
                        <input type="text" name="address" id="address" required>
                    </div>
                    <div class="field-wp">
                        <label>Số điện thoại</label>
                        <input type="tel" name="tel" id="tel" required>
                    </div>
                    <div class="field-wp">
                        <label>Ghi chú</label>
                        <textarea name="note"></textarea>
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
                    <div id="payment-checkout-wp">
                        <ul id="payment_methods">
                            <li>
                                <input type="radio" checked="checked" id="direct-payment" name="payment-method"
                                    value="direct-payment">
                                <label for="direct-payment">Nhận và thanh toán tại cửa hàng</label>
                            </li>
                            <li>
                                <input type="radio" id="payment-home" name="payment-method" value="payment-home">
                                <label for="payment-home">Nhận và thanh toán tại nhà</label>
                            </li>
                        </ul>
                    </div>
                    <div class="place-order-wp clearfix">
                        <button type="submit" name="checkout">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>