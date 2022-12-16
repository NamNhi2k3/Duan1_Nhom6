
    <div class="main">
    
        <form action="index.php?act=category" method="post" class="form">
            <div class="section-title">
                <h2>Add new type</h2>
            </div>
            <div class="form-group">
            <label class="form-label">Category ID</label>
                <input type="text" name="ma_loai" class="form-control">
            </div>
            <div class="form-group">
            <label class="form-label">Category name</label>
                <input type="text" name="ten_loai" class="form-control" >
            </div>
            <div>
                <input type="submit" name="themmoi" value="ADD" class="form-submit">
                <input type="reset" value=" Retype" class="form-submit">
                <a href="index.php?act=list-category"><input type="button" value="List" class="form-submit"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
</div>
  </main>
  
  