
     
      <div class="col-md-12" >   
          
		
        <div class="receipt-main col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
         <?php
              if(isset($bill)&&(is_array($bill))){
                 extract($bill);
               }
           ?> 
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="receipt-left">
							<img class="img-responsive" alt="iamgurdeeposahan" src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width: 71px; border-radius: 43px;">
						</div>
					</div>
					
				</div>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-12 col-sm-12 col-md-12 text-left">
						<div class="receipt-right">
							<h5><?=$bill['fullname']?></h5>
							<p><b>Mobile :</b> <?=$bill['phone'];?></p>
							<p><b>Email :</b> <?=$bill['email'];?></p>
							<p><b>Address :</b> <?=$bill['address'];;?></p>
                            <p><b>Code Bill :</b>DH<?=$bill['ma_hd'];;?></p>
						</div>
					</div>
					
				</div>
            </div>
           
            
			
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>QUANTITY</th>
                            <th>Price</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                  <?php
                  billct($billct);
                ?>
                        <!-- <tr>
                            <td class="col-md-6">Payment for August 2016</td>
                            <td class="col-md-3"><i class="fa fa-inr"></i> 15,000/-</td>
                            <td class="col-md-3"><i class="fa fa-inr"></i> 15,000/-</td>
                        </tr> -->
                      
                      
                        <tr>
                           
                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td></td>
                            <td class="text-left text-danger"><h2><strong>$ <?=$total?></strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-12 col-sm-12 col-md-12 text-left">
						<div class="receipt-right">
							<p><b>Date :</b><?=$bill['order_date'];?></p>
							<h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
						</div>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8">
						<div class="receipt-left">
							<h1> Hậu</h1>
						</div>
					</div>
				</div>
            </div>
        </div>
        </div>    
	</div>
</div>
</div>
