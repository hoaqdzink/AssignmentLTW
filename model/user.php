<?php
    function checkuser($user, $pass){
        $connect = connect();
        // thực thi đọc dữ liệu database
        $stmt = $connect->prepare("SELECT * FROM users WHERE user ='".$user."' AND pass='".$pass."'");

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq[0]['role'];
    }
?>