<?php
if(is_array($bill)){
    extract($bill); 
}
?>
    <div class="main">>
  
        <form action="index.php?act=updatebill" method="post" class="form" enctype="multipart/form-data">
            <div class="section-title">
                <h2> Order update</h2>
            </div>
            <div class="form-group">
            <label class="form-label">Order ID</label>
                <input type="text" name="ma_hd" class="form-control" value="<?=$bill['ma_hd']?>">
            </div>
            <div class="form-group">
            <label class="form-label" >Status</label>
                <input type="text" name="status" class="form-control" value="<?=$bill['status']?>">
            </div>
            <div>
            <input type="hidden" name="ma_hd" value="<?=$bill['ma_hd']?>">
                <input type="submit" name="update" class="form-submit" value="Update">
                <input type="reset" value=" Retype" class="form-submit">
                <a href="index.php?act=order"><input type="button" value="List" class="form-submit"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
  </main>
  
  