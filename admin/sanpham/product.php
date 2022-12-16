

   
    <div class="main">
        <form action="index.php?act=product" method="post" enctype="multipart/form-data" class="form">
           <div class="section-title">
                <h2>More new products</h2>
            </div>
            <div class="form-group">
            <label class="form-label">Category</label>
                <select name="ma_loai">
                   <?php
                       foreach($listcategory as $loai){
                        extract($loai);
                        echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                       }
                   ?>
                </select>
                
            </div>
            <div class="form-group">
                <label class="form-label">Product name</label>
                <input type="text" name="ten_hh" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label">Price</label>
                <input type="text" name="don_gia" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label">Img</label>
                <input type="file" name="hinh"  class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label">Describe</label>
                <textarea name="mo_ta" cols="10" rows="6"></textarea>
            </div>
            <div >
                <input type="submit" name="themmoi" value="ADD" class="form-submit">
                <input type="reset" value=" Retype" class="form-submit">
                <a href="index.php?act=list-product"><input type="button" value="List" class="form-submit"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>

</div>
  </main>
  
  

   