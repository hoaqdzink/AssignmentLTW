<?php
    function checkuser($user, $pass){
        $conn = connect();
        // thực thi đọc dữ liệu database
        $stmt = $conn->prepare("SELECT * FROM users WHERE user ='".$user."' AND pass='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        if(count($kq)>0){
            return $kq[0]['role'];
        }else {
            return 0;
        }
    }
?>