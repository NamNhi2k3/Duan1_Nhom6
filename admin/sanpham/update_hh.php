 <?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$hinh;
if(is_file($hinhpath)){
  $hinh="<img src='".$hinhpath."' height='80'>";
}else{
  $hinh="no photo";
}
?>
    <div class="main">
    
    <div>
        <form action="index.php?act=update_hh" method="post" enctype="multipart/form-data" class="form">
            <div class="section-title">
                <h2> Products update</h2>
            </div>
            <div class="form-group">
             <select name="ma_loai">
                <option value="0" selected  class="form-control">Tất cả</option>
                <?php
                foreach($listcategory as $loai){
                  extract($loai);
                  if($ma_loai==$ma_loai) $s="selected"; else $s="";
                  echo '<option value="'.$ma_loai.'" '.$s.'>'.$ten_loai.'</option>';
                }
                ?>

              </select> 
            </div>
            <div class="form-group">
                <label class="form-label">Product name</label>
                <input type="text" name="ten_hh" value="<?=$ten_hh?>" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label">Price</label>
                <input type="text" name="don_gia" value="<?=$don_gia?>" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label">Img</label>
                <input type="file" name="hinh" class="form-control">
                <?=$hinh?>
            </div>
            <div class="form-group">
                <label class="form-label">Describe</label>
                <textarea name="mo_ta" cols="10" rows="6" ><?=$mo_ta?></textarea>
            </div>
            <div >
                <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
                <input type="submit" name="update" value="Update" class="form-submit">
                <input type="reset" value=" Retype" class="form-submit">
                <a href="index.php?act=list-product"><input type="button" value="List" class="form-submit"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
  </main>
   