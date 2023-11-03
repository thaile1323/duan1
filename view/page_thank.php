<div class="thank">
        <div class="success">
            <div>
                <i class="fa-solid fa-circle-check" style="color: #19e00b;"></i>
            </div>
            <div>
                <h1>Đặt hàng thành công</h1>
            </div>
            <div>
                <p>Mã đơn hàng <strong>#HT18305</strong></p>
            </div>
            <div>
                <a href="?mod=page&act=account"><p>(Click để theo dõi trạng thái đơn hàng)</p></a>
            </div>
        </div>
        <div class="infomation">
            <p>Kính chào quý khách hàng: <strong><?=$_GET['name']?></strong></p>
            <p>Thông tin đơn hàng:</p>
            <div class="table">
                <table style="table-layout: auto;">
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ảnh sản Phẩm</th>
                            <th>Tên sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($_SESSION['user'])):?>
                            <?php foreach ($_SESSION['cart'] as $item):?>
                                <tr>
                                    <td>HT18305</td>
                                    <td style="text-align: center;"><img src="<?=$item['img_product']?>" width="50" height="50"></td>
                                    <td><?=$item['product_name']?></td>
                                    <td><?=number_format($item['price'],0,".",".")?></td>
                                    <td><?=$item['qty']?></td>
                                    <td><?=number_format($item['price'] * $item['qty'],0,".",".")?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td>HT18305</td>
                                <td style="text-align: center;"><img src="<?=$data['sp']['img_product']?>" width="50" height="50"></td>
                                <td><?=$data['sp']['name_product']?></td>
                                <td><?=number_format($data['sp']['price'],0,".",".")?></td>
                                <td><?=1?></td>
                                <td><?=number_format(($data['sp']['price'] * 1),0,".",".")?></td>
                            </tr>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="contact">
            <div><p>Cảm ơn bạn đã đặt hàng.</p></div>
            <div><p>Mọi thắc mắc xin liên hệ với hotline CSKH: 0378247378. Xin cảm ơn quý khách đã tin tưởng và ủng hộ.</p></div>
            <div><a href="?mod=page&act=home"><button>Quay lại trang chủ</button></a></div>
        </div>
</div>