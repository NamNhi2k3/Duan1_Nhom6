<?php
 function insert_taikhoan($user,$fullname,$email,$address,$phone,$password){
    $sql = "INSERT INTO khach_hang(user,fullname,email,address,phone,password) values('$user','$fullname','$email','$address','$phone','$password')";
    pdo_execute($sql);
}
function delete_taikhoan($ma_kh){
    $sql ="delete from khach_hang where ma_kh=".$ma_kh; 
    pdo_execute($sql);
}
function checkuser($user,$password){
    $sql = "select * from khach_hang where user='".$user."' AND password='".$password."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
function checkemail($email){
    $sql = "select * from khach_hang where email='".$email."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
function update_taikhoan($ma_kh,$user,$fullname,$email,$address,$phone,$password){
       $sql = "UPDATE khach_hang set user='".$user."', fullname='".$fullname."' email='".$email."',address='".$address."',phone='".$phone."',password='".$password."' where ma_kh=".$ma_kh;
      return pdo_execute($sql);
  }
  function loadall_taikhoan(){
    $sql = "select * from khach_hang order by ma_kh desc";
    $listcustomer = pdo_query($sql);
    return $listcustomer;
 }
?>