<?php
include "../module/pdo.php";
include "../module/sanpham.php";
include "../module/cart.php";
include "../module/danhmuc.php";
include "../module/binhluan.php";
include "../module/taikhoan.php";
include "../admin/layout/aside.php";
include "../admin/layout/nav.php";
//controller
 if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case 'customer':
            $listcustomer=loadall_taikhoan();
            include "./pages/customer.php";
            break;
        case 'xoatk':
                if(isset($_GET['ma_kh'])&&($_GET['ma_kh']>0)){
                   delete_taikhoan($_GET['ma_kh']);
                }
                $listcustomer=loadall_taikhoan();
                include "./pages/customer.php";
                break;
        case 'category':
            include "./danhmuc/category.php";
            // Kiểm tra người dùng có add hay không
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $ten_loai = $_POST['ten_loai'];
                 insert_danhmuc($ten_loai);
                $thongbao = "Thêm thành công!!!";
            }
            break;
        case 'list-category':
            $listcategory = loadall_danhmuc();
            include "./danhmuc/list-category.php";
            break;
        case 'xoaloai':
             if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){
                delete_danhmuc($_GET['ma_loai']);
             }
             $listcategory = loadall_danhmuc();
            include "./danhmuc/list-category.php";
            break;
        case 'sualoai':
            if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){
              $loai = loadone_danhmuc($_GET['ma_loai']);
             }

               include "./danhmuc/update.php";
               break;
        case 'updateloai':

                if(isset($_POST['update'])&&($_POST['update'])){
                    $ten_loai = $_POST['ten_loai'];
                    $ma_loai = $_POST['ma_loai'];
                    update_danhmuc($ma_loai,$ten_loai);
                    $thongbao = "Cập nhật thành công!!!";
                }
                $sql = "select * from loai order by ma_loai desc";
                $listcategory = pdo_query($sql);
                include "./danhmuc/list-category.php";
                break;
          // controller sản phẩm  
        
        case 'product':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $ma_loai=$_POST['ma_loai'];
                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $mo_ta = $_POST['mo_ta'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir.basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                }else{

                }
              
                insert_sanpham($ten_hh,$don_gia,$hinh,$mo_ta,$ma_loai);
                $thongbao = "Thêm thành công!!!";
            }
            $listcategory = loadall_danhmuc();

            include "./sanpham/product.php";
             break;
        case 'list-product':
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw = $_POST['kyw'];
                $ma_loai = $_POST['ma_loai'];
            }else{
                $kyw = '';
                $ma_loai = 0;
            }
           
            $listcategory = loadall_danhmuc();
            $listproduct = loadall_sanpham($kyw,$ma_loai);
            
             include "./sanpham/list-product.php";
             break;
        case 'xoahh':
                if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){
                   delete_sanpham($_GET['ma_hh']);
                }
                $listproduct = loadall_sanpham("",0);
               include "./sanpham/list-product.php";
               break;
        case 'suahh':
               if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){
                 $sanpham = loadone_sanpham($_GET['ma_hh']);
                }
                $listcategory = loadall_danhmuc();
                  include "./sanpham/update_hh.php";
                  break;
        case 'update_hh':

                if(isset($_POST['update'])&&($_POST['update'])){
                    $ma_loai=$_POST['ma_loai'];
                    $ma_hh= $_POST['ma_hh'];
                    $ten_hh = $_POST['ten_hh'];
                    $don_gia = $_POST['don_gia'];
                    $mo_ta = $_POST['mo_ta'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
    
                    }else{
    
                    }
                  
                        update_sanpham($ma_hh,$ma_loai,$ten_hh,$don_gia,$hinh,$mo_ta);
                        $thongbao = "Cập nhật thành công!!!";
                    }
                    $listcategory = loadall_danhmuc();
                    $listproduct=loadall_sanpham();
                 
                    include "./sanpham/list-product.php";
                    break;
        case 'comment':
            $listcomment=binh_luan_select_all();
            include "./pages/comment.php";
            break;
        case 'xoabl':
                if(isset($_GET['ma_bl'])&&($_GET['ma_bl']>0)){
                   delete_binhluan($_GET['ma_bl']);
                }
                $listcomment=binh_luan_select_all();
                include "./pages/comment.php";
               break;
        case 'order':
            $listbill=loadall_bill(0);
                include "./order/order.php";
                break;
        case 'xoabill':
                if(isset($_GET['ma_hd'])&&($_GET['ma_hd']>0)){
                       delete_bill($_GET['ma_hd']);
                    }
                    $listbill = loadall_bill(0);
                   include "./order/order.php";
                   break;
        case 'suabill':
                if(isset($_GET['ma_hd'])&&($_GET['ma_hd']>0)){
                      $bill = loadone_bill($_GET['ma_hd']);
                     }
                    
                     include "./order/update_order.php";
                       break;
                case 'updatebill':
        
                        if(isset($_POST['update'])&&($_POST['update'])){
                            $ma_hd = $_POST['ma_hd'];
                            $status = $_POST['status'];
                            update_bill($ma_hd,$status);
                            $thongbao = "Cập nhật thành công!!!";
                        }
                        $listbill = loadall_bill(0);
                        include "./order/order.php";
                        break;
        default:
        include "../admin/layout/main.php";
    }
 }else{
    $listtk=loadall_thongke();
    include "../admin/layout/main.php";
 }

include "../admin/layout/footer.php";
?>