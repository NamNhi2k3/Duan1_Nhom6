
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Check Out</h4>
                        <div class="breadcrumb__links">
                            <a href="../index.php">Home</a>
                            <a href="./shop.php">Shop</a>
                            <span>Check Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
              
                <form action="index.php?act=bill" method="post">
                <?php
                if(isset($_SESSION['user'])){
                    $fullname=$_SESSION['user']['fullname'];
                    $address=$_SESSION['user']['address'];
                    $email=$_SESSION['user']['email'];
                    $phone=$_SESSION['user']['phone'];
                }else{
                    $fullname="";
                    $address="";
                    $email="";
                    $phone="";
                    $thongbao="Please login your account!!!";
                  
                }
              
                ?>
                 <span style="color:red;font-size:15px;margin-left:20px;">
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                      }
                    
                    ?>
                 </span>
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                            here</a> to enter your code</h6>
                            <h6 class="checkout__title">Billing Details</h6>  
                          
                                <!-- <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" name="fistname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="lastname">
                                    </div>
                                </div> -->
                                <div class="checkout__input">
                                <p>Full name<span>*</span></p>
                                <input type="text"  class="checkout__input__add" name="fullname" value="<?=$fullname?>">
                                </div>
                           
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text"  class="checkout__input__add" name="address" value="<?=$address?>">
                            </div>
                           
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone" value="<?=$phone?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" value="<?=$email?>">
                                    </div>
                                </div>
                            </div>
                           
                            
                        </div>
                      
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Your order</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <?php
                                $tong=0;
                                $i=0;
                                foreach ($_SESSION['mycart'] as $cart){
                                       $ttien=$cart[3]*$cart[4];
                                       $tong+=$ttien;
                                       echo '<ul class="checkout__total__products">
                                       <li>'.$cart[1].'<span>$ '.$cart[3].'</span></li>
                                      
                                   </ul>';
                                     
                                }
                               echo '<ul class="checkout__total__all">
                                      
                               <li>Total <span>$'.$tong.'</span></li>
                           </ul>' ;
                        ?>
                                <!-- <ul class="checkout__total__products">
                                    <li><span>$ 300.0</span></li>
                                    <li>02. German chocolate <span>$ 170.0</span></li>
                                    <li>03. Sweet autumn <span>$ 170.0</span></li>
                                    <li>04. Cluten free mini dozen <span>$ 110.0</span></li>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>$750.99</span></li>
                                    <li>Total <span>$750.99</span></li>
                                </ul> -->
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment" value="1" name="payment" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal" value="2" name="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <input type="submit" class="site-btn" name="order" value="PLACE ORDER">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

   