<?php
if(is_array($loai)){
    extract($loai);
}
?>
    <div class="main">>
  
        <form action="index.php?act=updateloai" method="post" class="form">
            <div class="section-title">
                <h2> Category update</h2>
            </div>
            <div class="form-group">
            <label class="form-label">Category ID</label>
                <input type="text" name="ma_loai" class="form-control">
            </div>
            <div class="form-group">
            <label class="form-label" >Category name</label>
                <input type="text" name="ten_loai" class="form-control" value="<?php if(isset($ten_loai)&&($ten_loai!="")) echo $ten_loai; ?>">
            </div>
            <div>
                <input type="hidden" name="ma_loai" class="form-submit" value="<?php if(isset($ma_loai)&&($ten_loai>0)) echo $ma_loai; ?>">
                <input type="submit" name="update" class="form-submit" value="Update">
                <input type="reset" value=" Retype" class="form-submit">
                <a href="index.php?act=list-category"><input type="button" value="List" class="form-submit"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
  </main>
  
  