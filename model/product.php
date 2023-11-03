<?php
    function get_products($id_cat = 0, $limit = null){
        global $conn;
        $query = "SELECT * FROM product p INNER JOIN category c ON p.id_cat = c.id_cat";
        if ($id_cat != 0) {
            $query .= " WHERE c.id_cat = " . $id_cat;
        }
        if (!is_null($limit)) {
            $query .= " LIMIT " . $limit;
        }        
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);        
        return $stmt->fetchAll();
    }

    function get_productsPage($start=0, $limit=0){
        global $conn;
        $query = "SELECT * FROM product p INNER JOIN category c ON p.id_cat = c.id_cat";
        if($limit > 0 ){
            $query .= " LIMIT '.$start.','.$limit.'";
        }
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    function get_productByID($id_product){
        global $conn;
        $query = "SELECT * FROM product WHERE id_product = '" . $id_product . "'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    function get_productByBrand($name_brand, $limit){
        global $conn;
        $query = "SELECT * FROM product p INNER JOIN category c ON p.name_cat = c.name_cat WHERE c.name_cat = '" . $name_brand . "' ORDER BY RAND() LIMIT " . $limit;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchALL();
    }

    function search_products($keyword, $limit){
        global $conn;
        $query = "SELECT * FROM product p INNER JOIN category c ON p.name_cat = c.name_cat WHERE c.name_cat LIKE '%" . $keyword . "%' ORDER BY RAND() LIMIT " . $limit;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }    
    function get_img_details($id){
        global $conn;
        $query = "SELECT * FROM details_img WHERE id_product = '" . $id . "'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchALL();
    }

    function addToCart($id_product, $name_product, $price, $img_product, $qty) {
        global $conn;
        
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        if (isset($_SESSION['cart'][$id_product])) {
            $_SESSION['cart'][$id_product]['qty'] += $qty;

           
        } else {
            $_SESSION['cart'][$id_product] = array(
                'id_product' => $id_product,
                'product_name' => $name_product,
                'price' => $price,
                'qty' => $qty,
                'img_product' => $img_product
            );
        }
    }
    function add_comment($id_product, $id_user, $content){
        global $conn;
        $query = "INSERT INTO comment (`id_product`, `id_user`, `content`) VALUES (:id_product, :id_user, :content)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id_product',$id_product);
        $stmt->bindParam(':id_user',$id_user);
        $stmt->bindParam(':content',$content);
        return $stmt->execute();
    } 
    function get_commentBySKU($id_product){
        global $conn;
        $query = "SELECT * FROM comment c INNER JOIN user u ON c.id_user = u.id_user WHERE c.id_product = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$id_product]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchALL();
    }
    function deleteComment($id_cmt){
        global $conn;
        $query = "DELETE FROM comment WHERE id_cmt = :id_cmt";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':id_cmt',$id_cmt);
        return $stmt->execute();
    }
    // function add_Order($id_user, $id_product){
    //     global $conn;
    //     $query = "INSERT INTO order (`id_user`, `id_order`) VALUES (:id_user, :id_order)";
    //     $stmt = $conn->prepare($query);
    //     $stmt->bindParam(':id_user',$id_user);
    //     $stmt->bindParam(':id_order',$id_order);
    //     return $stmt->execute();
    // }
            // $query = "UPDATE cart SET qty = qty + :qty WHERE id_product = :id_product";
            // $stmt = $conn->prepare($query);
            // $stmt->bindParam(":id_product", $id_product);
            // $stmt->bindParam(":qty", $qty);
            // $stmt->execute();
            
            // $query = "INSERT INTO cart (`id_cart`, `id_product`, `name_product`, `price`, `img_product`, `qty`) VALUES (:id_cart, :id_product, :name_product, :price, :img_product, :qty)";
            // $stmt = $conn->prepare($query);
            // $stmt->bindParam(":id_cart", $id_cart);
            // $stmt->bindParam(":id_product", $id_product);
            // $stmt->bindParam(":name_product", $name_product);
            // $stmt->bindParam(":price", $price);
            // $stmt->bindParam(":img_product", $img_product);
            // $stmt->bindParam(":qty", $qty);
            // $stmt->execute();    
?>
