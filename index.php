
        <?php
        session_start();
            include("./module/pdo.php");
            include("./module/sanpham.php");
            include("./module/danhmuc.php");
            include("./module/cart.php");
            include("./module/taikhoan.php");
            include("global.php");
            include("./view/layout/header.php");
            include("./view/layout/nav.php");

            if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
            $spnew=loadall_sanpham_trangchu();
            $dsdm = loadall_danhmuc();
            if((isset($_GET['act']))&&($_GET['act']!="")){
                $act=$_GET['act'];
                switch ($act){
                    case 'shopdetails':
                         if(isset($_GET['ma_hh'])&&($_GET['ma_hh']>0)){
                                $ma_hh =$_GET['ma_hh'];
                                $onesp=loadone_sanpham($ma_hh);
                                include "./view/main-pages/shop-details.php";
                           }else{
                               include "./view/layout/main.php";
                            }
                        break;
                    case 'product':
                        if(isset($_POST['kyw'])&&($_POST['kyw'])>0){
                            $kyw=$_POST['kyw'];

                        }else{
                            $kyw="";
                        }
                        if(isset($_GET['ma_loai'])&&($_GET['ma_loai'])>0){
                               $ma_loai = $_GET['ma_loai'];
                          }else{
                            $ma_loai=0;
                          }
                          $listproduct=loadall_sanpham($kyw,$ma_loai);
                          include "./view/main-pages/product.php";
                        break;
                    case 'register':
                            if(isset($_POST['register'])&&($_POST['register'])){
                                $user=$_POST['user'];
                                $fullname=$_POST['fullname'];
                                $email=$_POST['email'];
                                $address=$_POST['address'];
                                $phone=$_POST['phone'];
                                $password=md5($_POST['password']);
                                $password_confirmation=md5($_POST['password_confirmation']);
                                if($password != $password_confirmation){
                                    $error ="Password incorrect. Please re-enter!!";
                                }else{
                                insert_taikhoan($user,$fullname,$email,$address,$phone,$password);
                                $thongbao = "Registered successfully. Please login your account!!!";
                                }
                            }
                                include "./view/taikhoan/register.php";
                                break;
                    case 'shop':
                        if(isset($_POST['kyw'])&&($_POST['kyw'])>0){
                            $kyw=$_POST['kyw'];

                        }else{
                            $kyw="";
                        }
                        if(isset($_GET['ma_loai'])&&($_GET['ma_loai'])>0){
                               $ma_loai = $_GET['ma_loai'];
                          }else{
                            $ma_loai=0;
                          }
                          $listproduct=loadall_sanpham($kyw,$ma_loai);
                        
                        include "./view/main-pages/shop.php";
                        break;
                    
                    case 'login':
                        if(isset($_POST['login'])&&($_POST['login'])){
                            $user=$_POST['user'];
                            $password=md5($_POST['password']);
                            $checkuser = checkuser($user,$password);
                            if(is_array($checkuser)){
                                $_SESSION['user']=$checkuser;
                                $thongbao="Đã đăng nhập thành công";
					              echo "<script>window.location.href='index.php';</script>";
                            }else{
                                $thongbao = "Account is not complete!!!!";
                            }
                        }
                        include "./view/taikhoan/login.php";
                        break;
                    case 'update':
                            if(isset($_POST['update'])&&($_POST['update'])){
                                $user=$_POST['user'];
                                $fullname=$_POST['fullname'];
                                $email=$_POST['email'];
                                $address=$_POST['address'];
                                $phone=$_POST['phone'];
                                $password=$_POST['password'];
                                $ma_kh=$_POST['ma_kh'];
                                update_taikhoan($ma_kh,$user,$fullname,$email,$address,$phone,$password);
                                $_SESSION['user']=checkuser($user,$password);
                                echo "<script>window.location.href='index.php';</script>";
                               
                            }
                                include "./view/taikhoan/update.php";
                                break;  
                    case 'forgotpass':
                             if(isset($_POST['forgotpass'])&&($_POST['forgotpass'])){
                           
                                    $email=$_POST['email'];
                                    $checkemail=checkemail($email);
                                    if(is_array($checkemail)){
                                        $thongbao ="Mật khẩu của bạn là: ".$checkemail['password'];
                                    }else{
                                        $thongbao = "Email này không tồn tại!!";
                                    }
                   
                                   }
                                        include "./view/taikhoan/forgotpass.php";
                                        break;  
                    case 'logout':
                        session_unset();
                        echo "<script>window.location.href='index.php';</script>";
                         break;
                    case 'aboutus':

                        include "./view/main-pages/about.php";
                        break;

                   
                    case 'shopping-cart':
                        if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                            $ma_hh=$_POST['ma_hh'];
                            $ten_hh=$_POST['ten_hh'];
                            $hinh=$_POST['hinh'];
                            $don_gia=$_POST['don_gia'];
                          
                          if(isset($_POST['so_luong'])&&($_POST['so_luong']>0)){
                            $so_luong=$_POST['so_luong'];
                          }else{
                            $so_luong=1;
                          }
                          $ttien=$so_luong*$don_gia;
                            $fl=0;
                            for($i=0; $i < sizeof($_SESSION['mycart']); $i++){
                                  if($_SESSION['mycart'][$i][1]==$ten_hh){
                                     $fl=1;
                                     $soluongnew=$so_luong+$_SESSION['mycart'][$i][4];
                                     $_SESSION['mycart'][$i][4]=$soluongnew;
                                     break;
                                  }  
                            }
                            if($fl==0){
                                $spadd=[$ma_hh,$ten_hh,$hinh,$don_gia,$so_luong,$ttien];
                                array_push($_SESSION['mycart'],$spadd);
                               

                            }
                           
                        }
                        include "./view/main-pages/shopping-cart.php";
                        break;
                    case 'delcart':
                        if(isset($_GET['idcart'])){
                            array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                        }else{
                            $_SESSION['mycart']=[];
                        }
                         echo "<script>window.location.href='index.php?act=shopping-cart';</script>";
                        break;
                    
                    case 'checkout':
                        include "./view/main-pages/checkout.php";
                        break;
                    case 'bill':
                        if(isset($_POST['order'])&&($_POST['order'])){
                            if(isset($_SESSION['user'])) $ma_kh=$_SESSION['user']['ma_kh'];
                            else {
                             $ma_kh=0;
                            //  echo "<script>window.location.href='index.php?act=checkout';</script>";
                            }
                            $fullname=$_POST['fullname'];
                            $email=$_POST['email'];
                            $address=$_POST['address'];
                            $phone=$_POST['phone'];
                            $order_date=date('h:i:sa d/m/Y');
                            $payment=$_POST['payment']; 
                            $total=total();
                            $idbill=insert_bill($ma_kh,$fullname,$address,$phone,$email,$order_date,$payment,$total);
                             foreach($_SESSION['mycart'] as $cart){
                               insert_cart($_SESSION['user']['ma_kh'],$cart[0],$cart[1],$cart[2],$cart[3],$cart[4],$cart[5],$idbill);
                              }
                              $_SESSION['mycart']=[];
                        }
                        $bill=loadone_bill($idbill);
                        $billct=loadall_cart($idbill);
                        include "./view/main-pages/bill.php";
                        break;

                    case 'myorder':
                         $listbill=loadall_myorder($_SESSION['user']['ma_kh']);
                        include "./view/main-pages/myorder.php";
                        break;
                    case 'xoabill':
                            if(isset($_GET['ma_hd'])&&($_GET['ma_hd']>0)){
                                   delete_bill($_GET['ma_hd']);
                                }
                                $listbill=loadall_myorder($_SESSION['user']['ma_kh']);
                                include "./view/main-pages/myorder.php";
                               break;
                    case 'blog':
                        include "./view/main-pages/blog.php";
                        break;
                    case 'contacts':
                        include "./view/main-pages/contact.php";
                        break;
                }
            }else{
                include "./view/layout/main.php";
            }
            
            include("./view/layout/footer.php");

        ?>
   
   