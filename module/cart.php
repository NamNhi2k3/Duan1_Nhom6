<?php
function billct($listbill){
    $tong=0;
    

    foreach ($listbill as $cart){
          
           $tong+=$cart['thanhtien'];
        
           echo ' <tr>
           <td class="col-md-6 product__cart__item">
                <div class="product__cart__item__pic">
                   <img src="'.$cart['hinh'].'" alt="" height="100">
                </div>
                <div class="product__cart__item__text">
                   <h6>'.$cart['ten_hh'].'</h6>
                </div>
            </td>
           <td class="col-md-3">'.$cart['so_luong'].'</td>
           <td class="col-md-3">'.$cart['don_gia'].'</td>
       </tr>';
       
    }
   
}

function total(){
    $tong=0;
    foreach($_SESSION['mycart'] as $cart){
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
    }
    return $tong;
}
function insert_bill($ma_kh,$fullname,$address,$phone,$email,$order_date,$payment,$total){
    $sql="INSERT INTO hoa_don(ma_kh,fullname,address,phone,email,order_date,payment,total) values('$ma_kh','$fullname','$address','$phone','$email','$order_date','$payment','$total')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($ma_kh,$ma_hh,$ten_hh,$hinh,$don_gia,$so_luong,$thanhtien,$ma_hd){
    $sql="INSERT INTO hoa_don_chi_tiet(ma_kh,ma_hh,ten_hh,hinh,don_gia,so_luong,thanhtien,ma_hd) values('$ma_kh','$ma_hh','$ten_hh','$hinh','$don_gia','$so_luong','$thanhtien','$ma_hd')";
    return pdo_execute($sql);
}
function loadone_bill($ma_hd){
    $sql="select * from hoa_don where ma_hd=".$ma_hd;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadall_cart($ma_hdct){
    $sql="select * from hoa_don_chi_tiet where ma_hd=".$ma_hdct;
    $bill=pdo_query($sql);
    return $bill;
}
function loadall_cart_count($ma_hdct){
    $sql="select * from hoa_don_chi_tiet where ma_hd=".$ma_hdct;
    $bill=pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($ma_kh){
    $sql="select * from hoa_don where 1";
    if($ma_kh>0) $sql=" AND ma_kh=".$ma_kh;
    $sql.=" order by ma_hd desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function loadall_myorder($ma_kh){
    $sql="select * from hoa_don where ma_kh=".$ma_kh;
    $listorder=pdo_query($sql);
    return $listorder;
}
function  update_bill($ma_hd,$status){
       $sql = "UPDATE hoa_don set status='".$status."' where ma_hd=".$ma_hd;
    pdo_execute($sql);
  }
function delete_bill($ma_hd){
    $sql ="delete from hoa_don where ma_hd=".$ma_hd; 
    pdo_execute($sql);
}
function get_status($n){
    switch($n){
       case '0':
        $status="New order";
        break;
        case '1':
            $status="Processing";
            break;
            case '2':
                $status="Delivering";
                break;
                case '3':
                    $status="Success";
                    break;
    }
    return $status;
}
function get_payment($m){
    switch($m){
       case '1':
        $payment="Check payment";
        break;
        case '2':
            $payment="Paypal";
            break;
            
    }
    return $payment;
}
function loadall_thongke(){
    $sql="select loai.ma_loai as maloai, loai.ten_loai as tenloai, count(hang_hoa.ma_hh) as countsp, min(hang_hoa.don_gia) as minprice, max(hang_hoa.don_gia) as maxprice from hang_hoa left join loai on loai.ma_loai=hang_hoa.ma_loai group by loai.ma_loai order by loai.ma_loai desc";
    $listtk=pdo_query($sql);
    return $listtk;
}
?>