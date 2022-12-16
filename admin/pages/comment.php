
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Comment</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Content</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> ID User</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID product</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Comment date</th>

                    
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($listcomment as $comment) {
                      extract($comment);

                     
                      $xoabl ="index.php?act=xoabl&ma_bl=".$ma_bl;
                      echo' <tr>
                      <td><input type="checkbox" name="" id=""</td>
                      <td class="align-middle ">
                        <span class="text-secondary text-xs font-weight-bold">'.$ma_bl.'</span>
                      </td>
                      <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">'.$noi_dung.'</span>
                    </td>
                      <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">'.$ma_kh.'</span>
                    </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$ma_hh.'</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$ngay_bl.'</span>
                      </td>
        
                      <td class="align-middle">
                        <a href="'.$xoabl.'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                   
                    </tr>';
                    }
                      ?>
                     <!-- <tr>
                      <td>
                       
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <div class="d-flex px-2 py-1">
                         
                         <div class="d-flex flex-column justify-content-center">
                           <h6 class="mb-0 text-sm">John Michael</h6>
                           <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                         </div>
                       </div>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>  -->
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
 