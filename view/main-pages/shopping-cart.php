

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tong=0;
                                $i=0;

                                foreach ($_SESSION['mycart'] as $cart){
                                
                                    $ttien=$cart[3]*$cart[4];
                                    $tong+=$ttien;
                                        
                                 
                                       
                                       $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa" style="border:none;font-size:14px; color:black; blackground-color:white;"></a>';
                                       echo ' <tr>
                                       <td class="product__cart__item">
                                           <div class="product__cart__item__pic">
                                               <img src="'.$cart[2].'" alt="" height="100">
                                           </div>
                                           <div class="product__cart__item__text">
                                               <h6>'.$cart[1].'</h6>
                                               <h5></h5>
                                           </div>
                                       </td>
                                       <td class="quantity__item">
                                           <div class="quantity">
                                               <div class="pro-qty-2">
                                                   <input type="text" value="'.$cart[4].'"name="so_luong">
                                               </div>
                                           </div>
                                       </td>
                                       <td class="cart__price">$'.$ttien.'</td>
                                       <td>'.$xoasp.'</td>
                                   </tr>';
                                   $i+=1;
                                }
                        ?>
                         
                                <!-- <tr>
                    //                 <td class="product__cart__item">
                    //                     <div class="product__cart__item__pic">
                    //                         <img src="img/shopping-cart/cart-1.jpg" alt="">
                    //                     </div>
                    //                     <div class="product__cart__item__text">
                    //                         <h6>T-shirt Contrast Pocket</h6>
                    //                         <h5>$98.49</h5>
                    //                     </div>
                    //                 </td>
                    //                 <td class="quantity__item">
                    //                     <div class="quantity">
                    //                         <div class="pro-qty-2">
                    //                             <input type="text" value="1">
                    //                         </div>
                    //                     </div>
                    //                 </td>
                    //                 <td class="cart__price">$ 30.00</td>
                    //                 <td class="cart__close"><i class="fa fa-close"></i></td>
                    //             </tr>
                    //             <tr>
                    //                 <td class="product__cart__item">
                    //                     <div class="product__cart__item__pic">
                    //                         <img src="img/shopping-cart/cart-2.jpg" alt="">
                    //                     </div>
                    //                     <div class="product__cart__item__text">
                    //                         <h6>Diagonal Textured Cap</h6>
                    //                         <h5>$98.49</h5>
                    //                     </div>
                    //                 </td>
                    //                 <td class="quantity__item">
                    //                     <div class="quantity">
                    //                         <div class="pro-qty-2">
                    //                             <input type="text" value="1">
                    //                         </div>
                    //                     </div>
                    //                 </td>
                    //                 <td class="cart__price">$ 32.50</td>
                    //                 <td class="cart__close"><i class="fa fa-close"></i></td>
                    //             </tr>
                    //             <tr>
                    //                 <td class="product__cart__item">
                    //                     <div class="product__cart__item__pic">
                    //                         <img src="img/shopping-cart/cart-3.jpg" alt="">
                    //                     </div>
                    //                     <div class="product__cart__item__text">
                    //                         <h6>Basic Flowing Scarf</h6>
                    //                         <h5>$98.49</h5>
                    //                     </div>
                    //                 </td>
                    //                 <td class="quantity__item">
                    //                     <div class="quantity">
                    //                         <div class="pro-qty-2">
                    //                             <input type="text" value="1">
                    //                         </div>
                    //                     </div>
                    //                 </td>
                    //                 <td class="cart__price">$ 47.00</td>
                    //                 <td class="cart__close"><i class="fa fa-close"></i></td>
                    //             </tr>
                    //             <tr>
                    //                 <td class="product__cart__item">
                    //                     <div class="product__cart__item__pic">
                    //                         <img src="img/shopping-cart/cart-4.jpg" alt="">
                    //                     </div>
                    //                     <div class="product__cart__item__text">
                    //                         <h6>Basic Flowing Scarf</h6>
                    //                         <h5>$98.49</h5>
                    //                     </div>
                    //                 </td>
                    //                 <td class="quantity__item">
                    //                     <div class="quantity">
                    //                         <div class="pro-qty-2">
                    //                             <input type="text" value="1">
                    //                         </div>
                    //                     </div>
                    //                 </td>
                    //                 <td class="cart__price">$ 30.00</td>
                    //                 <td class="cart__close"><i class="fa fa-close"></i></td>
                    //             </tr> -->
                           </tbody>
                       </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="index.php?act=shop">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="index.php?act=myorder"><i class="fa fa-spinner"></i>My Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div> -->
                   
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <?php
                       echo ' <ul>
                       
                       <li>Total <span>$'.$tong.'</span></li>
                   </ul>';
                        ?>
                        <a href="index.php?act=checkout" class="primary-btn">Proceed to checkout</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
