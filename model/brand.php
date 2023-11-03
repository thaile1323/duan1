<?php
    function get_brand($hienthi=0){
        global $conn;
        $query = "SELECT * FROM brand WHERE hienthi=0";
        if($hienthi==1){
            $query = "SELECT * FROM brand WHERE hienthi=1";
        }
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
    function count_brand($start=0, $limit=0){
        global $conn;
        $query = "SELECT count(*) as soluong FROM brand WHERE hienthi=0";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    function get_brandPage($start=0, $limit=0){
        global $conn;
        $query = "SELECT * FROM brand WHERE hienthi=0";
        if($limit > 0 ){
            $query .= " LIMIT ".$start.",".$limit;
        }
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
?>