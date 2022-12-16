
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Order</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order Bill</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer</th>
                      
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delivery place</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                     
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($listbill as $bill) {
                      extract($bill);
                      $kh=$bill["fullname"].'
                      <br>'.$bill["email"].'
                      <br>'.$bill["phone"];
                      $status=get_status($bill['status']);
                      $payment=get_payment($bill['payment']);
                      $countsp=loadall_cart_count($bill['ma_hd']);

                      $suabill ="index.php?act=suabill&ma_hd=".$ma_hd;
                      $xoabill ="index.php?act=xoabill&ma_hd=".$ma_hd;
                      echo' <tr>
                      <td><input type="checkbox" name="" id=""</td>
                      <td class="align-middle text-center text-sm>
                        <p class="text-secondary text-xs font-weight-bold">DH'.$bill['ma_hd'].'</p>
                      </td>
                      <td class="align-middle text-center text-sm">

                           <h6 class="text-xs font-weight-bold mb-0">'.$kh.'</h6>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$bill['address'].'</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$countsp.'</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$bill['total'].'</span>
                      </td>
                      <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">'.$bill['order_date'].'</span>
                     </td>
                     <td class="align-middle text-center">
                     <span class="text-secondary text-xs font-weight-bold">'.$payment.'</span>
                    </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$status.'</span>
                      </td>
                      <td class="align-middle">
                      <a href="'.$suabill.'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                       Edit
                      </a>
                      
                        <a href="'.$xoabill.'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
                    </tr> -->
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
 