< <div class="col-md-12" >   
          
		
          <div class="receipt-main col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-black">
						    <tr style="background-color: black;">
						      <th>Code Bill</th>
							  <th>Delivery place</th>
                              <th>Quantity</th>
                             
                              <th>Order date</th>
                              <th>Payment</th>
                              <th>Status</th>
							  <th>Total</th>
						     <th>&nbsp;</th> 
						    </tr>
						  </thead>
						  <tbody>
                            <?php
                            if(is_array($listbill)){
                                foreach($listbill as $bill){
                                    extract($bill);
									$xoabill ="index.php?act=xoabill&ma_hd=".$ma_hd;
									$payment=get_payment($bill['payment']);
									$countsp=loadall_cart_count($bill['ma_hd']);
                                    $status=get_status($bill['status']);
                                    echo '   <tr class="alert" role="alert">
                                    <th scope="row">DH'.$bill['ma_hd'].'</th>
                                    <td>'.$bill['address'].'</td>
									<td>'.$countsp.'</td>
									<td>'.$bill['order_date'].'</td>
									
									<td>'.$payment.'</td>
									<td>'.$status.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td>
                                        <a href="'.$xoabill.'" class="close"  aria-label="Close">
                                      <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </a>
                                  </td>
                                  </tr>';
                                }
                            }
                            ?>
						    <!-- <tr class="alert" role="alert">
						      <th scope="row">001</th>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>markotto@email.com</td>
						      <td>
						      	<a href="#" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</a>
				        	</td>
						    </tr>
						    <tr class="alert" role="alert">
						      <th scope="row">002</th>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td>jacobthornton@email.com</td>
						      <td>
						      	<a href="#" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</a>
				        	</td>
						    </tr>
						    <tr class="alert" role="alert">
						      <th scope="row">003</th>
						      <td>Larry</td>
						      <td>the Bird</td>
						      <td>larrybird@email.com</td>
						      <td>
						      	<a href="#" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</a>
				        	</td>
						    </tr>
						    <tr class="alert" role="alert">
						      <th scope="row">004</th>
						      <td>John</td>
						      <td>Doe</td>
						      <td>johndoe@email.com</td>
						      <td>
						      	<a href="#" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</a>
				        	</td>
						    </tr>
						    <tr class="alert" role="alert">
						      <th scope="row">005</th>
						      <td>Gary</td>
						      <td>Bird</td>
						      <td>garybird@email.com</td>
						      <td>
						      	<a href="#" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
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