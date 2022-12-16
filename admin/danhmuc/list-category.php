
    
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>List Category</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-secondary opacity-7"></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Category code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category name</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($listcategory as $loai) {
                      extract($loai);

                      $sualoai ="index.php?act=sualoai&ma_loai=".$ma_loai;
                      $xoaloai ="index.php?act=xoaloai&ma_loai=".$ma_loai;
                      echo '<tr>
                      <td><input type="checkbox" name="" id=""</td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">'.$ma_loai.'</p>
                      </td>
                      <td class="align-middle text-center text-sm">'.$ten_loai.'</td>
                      <td class="align-middle">
                      <a href="'.$sualoai.'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                      <a href="'.$xoaloai.'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
                <a href="index.php?act=category">  <input type="button" value="Nhập thêm"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
 