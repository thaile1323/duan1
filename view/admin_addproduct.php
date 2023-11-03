<head><link rel="stylesheet" href="website-admin/css/addproduct.css"></head>
<div id="content">
        <div class="form-container">
            <div class="form-wrapper">
                <h2>Add Product</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ma-san-pham">Id_Product</label>
                        <input type="text" id="ma-san-pham" name="id_brand" required>
                    </div>
                    <div class="form-group">
                        <label for="ten-san-pham">Name Product</label>
                        <input type="text" id="ten-san-pham" name="name_brand" required>
                    </div>
                    <div class="form-group">
                        <label for="gia-san-pham">Price</label>
                        <input type="number" id="gia-san-pham" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="hienthi">Display</label>
                        <input type="text" id="hienthi" name="hienthi" required>
                    </div>
                    <div class="form-group">
                        <label for="so-luong">Quatity</label>
                        <input type="number" id="so-luong" name="qty" required>
                    </div>
                    <div class="form-group">
                        <label for="mo-ta">Decribe</label>
                        <textarea id="mo-ta" name="decribe" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="anh-san-pham">Product Image</label>
                        <input type="file" id="anh-san-pham" name="img_brand" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn-add" value="Add" style="padding: 5px 10px; background-color: #F2B825; color: #000; border: 1px solid #e5e5e5; ">
                    </div>
                    <?php
                        if(isset($thongbao)){
                            echo $thongbao;
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>   
</body>

</html>