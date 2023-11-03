<?php
    function add_brand($id_brand, $name_brand, $img_brand, $hienthi){
        global $conn;
        $query = "INSERT INTO brand (`id_brand`, `name_brand`, `img_brand`, `hienthi`) VALUES (:id_brand, :name_brand, :img_brand, :hienthi)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id_brand',$id_brand);
        $stmt->bindParam(':name_brand',$name_brand);
        $stmt->bindParam(':img_brand',$img_brand);
        $stmt->bindParam(':hienthi',$hienthi);
        return $stmt->execute();
    } 

    function get_brandByID($id_brand){
        global $conn;
        $query = "SELECT * FROM brand WHERE id_brand = ".$id_brand;
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
    
    function update_brand($id_brand, $name_brand,$img_brand, $hienthi) {
        global $conn;
        $query = "UPDATE brand SET `name_brand` = :name_brand, `img_brand` = :img_brand, `hienthi` = :hienthi WHERE `id_brand` = :id_brand";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id_brand', $id_brand);
        $stmt->bindParam(':name_brand', $name_brand);
        $stmt->bindParam(':img_brand', $img_brand);
        $stmt->bindParam(':hienthi', $hienthi);
        return $stmt->execute();
    }
    
    function delete($id_brand){
        global $conn;
        $query = "DELETE FROM brand WHERE id_brand = :id_brand";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(':id_brand',$id_brand);
        return $stmt->execute();
    }

    function count_product(){
        global $conn;
        $query = "SELECT COUNT(id_product) FROM product";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchColumn();
    }

    function count_user(){
        global $conn;
        $query = "SELECT COUNT(id_user) FROM user WHERE role = 'user'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchColumn();
    }

    function count_products_by_category() {
    global $conn;
    $query = "SELECT name_cat AS TenChuDe, COUNT(*) AS SoLuong FROM product GROUP BY name_cat";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


?>