<?php

 function insert_danhmuc($ten_loai){
        $sql = "INSERT INTO loai(ten_loai) values('$ten_loai')";
        pdo_execute($sql);
 }
 function delete_danhmuc($ma_loai){
         $sql ="delete from loai where ma_loai=".$ma_loai; 
         pdo_execute($sql);
}
 function loadall_danhmuc(){
    $sql = "select * from loai order by ma_loai desc";
    $listcategory = pdo_query($sql);
    return $listcategory;
 }
 function loadone_danhmuc($ma_loai){
    $sql = "select * from loai where ma_loai=".$ma_loai;
    $loai = pdo_query_one($sql);
    return $loai;
 }
 function update_danhmuc($ma_loai,$ten_loai){
    $sql = "UPDATE loai set ten_loai='".$ten_loai."' where ma_loai=".$ma_loai;
    pdo_execute($sql);
 }
?>