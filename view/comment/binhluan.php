<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .comment{
            width:50%;
            margin-top:10px;
            padding-right:50px;
        }
        .comment-content{
            font-size: 16px;
            color:black;
            
        }
        .comment_ul{
            list-style-type: none;
            
        }
    </style>
</head>
<body>
<div class="product__details__tab">
    <ul class="nav nav-tabs" role="tablist">
   <li class="nav-item">
       <a class="nav-link active" data-toggle="tab" href="#tabs-5"
       role="tab">Comment</a>
   </li>
    </ul>
</div>  

<?php

require './module/binhluan.php';

if (array_key_exists('noi_dung' ,$_POST)){
    $ma_kh = $_SESSION['user']['ma_kh'];
    $noi_dung = $_POST['noi_dung'];
    $ma_hh = $_GET['ma_hh'];
    $ngay_bl = date_format(date_create(), 'Y-m-d');
    binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
}
$binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);

foreach ($binh_luan_list as $bl) {
    extract($bl)
?>
<div class="comment">
    <ul class="comment_ul">

   <li>
        <span class="comment-content"><b><?= $user ?></b> <?= $noi_dung ?> </span>
        <span class="comment-info"><i><?= $ngay_bl ?></i></span>
    </li>
 </ul>
</div>
    
<?php }
if (!isset($_SESSION['user'])) {
   
    echo "<b>Đăng nhập để bình luận về sản phẩm này</b>";
} else {
?>
    <div class="product__details__tab">
        <div class="tab-content">
            <div class="tab-pane active" id="tabs-5" role="tabpanel">
                <div class="product__details__tab__content">
                    <div class="shop__sidebar__search">
                         <form class="binhluan_form" action="index.php?act=shopdetails&ma_hh=<?=$ma_hh?>" method="post">
                            <input name="noi_dung" placeholder="Viết bình luận..." />
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

                         
                          

<?php } ?>


