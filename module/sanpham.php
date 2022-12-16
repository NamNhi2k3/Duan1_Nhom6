<?php

 function insert_sanpham($ten_hh,$don_gia,$hinh,$mo_ta,$ma_loai){
        $sql = "INSERT INTO hang_hoa(ten_hh,don_gia,hinh,mo_ta,ma_loai) values('$ten_hh','$don_gia','$hinh','$mo_ta','$ma_loai')";
        pdo_execute($sql);
 }
 function delete_sanpham($ma_hh){
         $sql ="delete from hang_hoa where ma_hh=".$ma_hh; 
         pdo_execute($sql);
}
function loadall_sanpham_trangchu(){
   $sql="SELECT * from hang_hoa where 1 order by ma_hh desc limit 0,12";
   $listproduct = pdo_query($sql);
   return $listproduct;
}
 function loadall_sanpham($kyw="",$ma_loai=0){
    $sql = "select * from hang_hoa where 1";
    if($kyw!=""){
      $sql.=" and ten_hh like '%".$kyw."%'";
    }
    if($ma_loai>0){
      $sql.=" and ma_loai='".$ma_loai."'";
    }
    $sql.=" order by ma_hh desc";
    $listproduct = pdo_query($sql);
    return $listproduct;
 }
 function loadone_sanpham($ma_hh){
    $sql = "select * from hang_hoa where ma_hh=".$ma_hh;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
 }
 function  update_sanpham($ma_hh,$ma_loai,$ten_hh,$don_gia,$hinh,$mo_ta){
   if($hinh!=""){
      $sql = "UPDATE hang_hoa set ma_loai='".$ma_loai."', ten_hh='".$ten_hh."',don_gia='".$don_gia."',hinh='".$hinh."',mo_ta='".$mo_ta."' where ma_hh=".$ma_hh;
   }else{
      $sql = "UPDATE hang_hoa set ma_loai='".$ma_loai."', ten_hh='".$ten_hh."',don_gia='".$don_gia."',mo_ta='".$mo_ta."' where ma_hh=".$ma_hh;
   }
       
   pdo_execute($sql);
 }
?>