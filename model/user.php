<?php
    function login($email, $password){
        global $conn;
        $query="SELECT * FROM user WHERE email='".$email."' AND password='".$password."'";
        $stmt = $conn->prepare($query);
        $stmt-> execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
    function signup($name, $birthday, $email, $password, $phone_number){
        global $conn;
        $query = "INSERT INTO user (`user_name`, `birthday`, `email`, `password`, `phone`) VALUES (:username, :birthday, :email, :pass, :phone)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $name);
        $stmt->bindParam(":birthday", $birthday);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pass", $password);
        $stmt->bindParam(":phone", $phone_number);
        return $stmt->execute();
    }
    function checkAccount($email){
        global $conn;
        $query="SELECT * FROM user WHERE email=:email";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt-> execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

?>