
    
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Product</h6>
            </div>
            <form action="index.php?act=list-product" method="post">
              <input type="text" name="kyw">
              <select name="ma_loai">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach($listcategory as $loai){
                  extract($loai);
                  echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                }
                ?>

              </select>
            <input type="submit" name="listok" value="go">
            </form>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-secondary opacity-7"></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Img</th>
                    
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($listproduct as $sanpham) {
                      extract($sanpham);

                      $suahh ="index.php?act=suahh&ma_hh=".$ma_hh;
                      $xoahh ="index.php?act=xoahh&ma_hh=".$ma_hh;
                      $hinhpath="../upload/".$hinh;
                      if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='80'>";
                      }else{
                        $hinh="no photo";
                      }
                      echo '<tr>
                      <td><input type="checkbox" name="" id=""</td>
                      <td>
                        <p class="align-middle text-center text-sm">'.$ma_hh.'</p>
                      </td>
                      <td class="align-middle text-center text-sm">'.$ten_hh.'</td>
                      <td class="align-middle text-center text-sm">'.$don_gia.'</td>
                      <td class="align-middle text-center text-sm">'.$hinh.'</td>
                     
                      
                      <td class="align-middle">
                      <a href="'.$suahh.'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                      <a href="'.$xoahh.'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Delete
                      </a>
                    </td>
                    </tr>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <div>
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=product">  <input type="button" value="Nhập thêm"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
 