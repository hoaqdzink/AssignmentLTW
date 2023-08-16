<?php

// Hiểm thị sản phẩm
function getAll_sp(){
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM sanpham");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq= $stmt->fetchAll();
    return $kq;
}

function getOnesp($id){
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM sanpham WHERE id".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
// Xóa sản phẩm
function deleteSP($id){
    $conn = connect();
    $sql = "DELETE FROM sanpham WHERE id=".$id;
    $conn -> exec($sql); 
}

//Cập nhật sản phẩm

function updatesp($id,$tensp,$gia,$soluong,$hinh){
    $conn = connect();
    $sql="UPDATE sanpham SET tensp='".$tensp."', gia='".$gia."',soluong='".$soluong."', hinh='".$hinh."' WHERE id".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
?>