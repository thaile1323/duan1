<div id="content">
    <h2>Quản lí sản phẩm</h2>
    <div class="btn-group">
            <button><a href="?mod=admin&act=add">Add Brand</a></button>
            <button>Delete</button>
            <button>Edit</button>
     </div>
    <table>
            <thead>
                <tr>
                    <th><input type="checkbox">All</th>
                    <th>Id_Brand</th>
                    <th>Name_Brand</th>
                    <th>Image</th>
                    <th>Edit Items</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['list_brand'] as $item):?>                    
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?=$item['id_brand']?></td>
                        <td><?=$item['name_brand']?></td>
                        <td><img src="<?=$item['img_brand']?>" width=200 height=100></td>
                        <td><a onclick="delete_product(<?=$item['id_brand']?>)"><button class="btn-delete"><i class="fa-solid fa-trash"
                                    style="color: #ffffff;"></i></button></a><a href="?mod=admin&act=update&id=<?=$item['id_brand']?>"><button class="btn-fixed"><i
                                    class="fa-solid fa-pen"></i></button></td></a>
                    </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
    <div class="pagination">
    <button class="page-nav-btn"><<</button>
    <?php for ($i = 1; $i <= $pages; $i++): ?>
        <a href="?mod=admin&act=product&page=<?=$i?>" class="page-link"><?php echo $i ?></a>
    <?php endfor; ?>
    <button class="page-nav-btn">>></button>
</div>
</div>
    <script>
        function delete_product(id){
            var kq = confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?");
            if( kq ){
                window.location.search='?mod=admin&act=delete&id='+id;
            }
        }
    </script>