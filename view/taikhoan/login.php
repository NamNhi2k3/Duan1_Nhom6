
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Login</h4>
                        <div class="breadcrumb__links">
                            <a href="index.php">Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="main">
    <div class="section-title">
      
        <form action="index.php?act=login" method="POST" class="form" id="form-1">
            <div class="section-title">
                <h2>LOGIN</h2>
            </div>
          <div class="spacer"></div>
          <div class="form-group">
            <label for="user" class="form-label">User name</label>
            <input id="user" name="user" type="text" placeholder="VD: haudz" class="form-control">
            <span class="form-message"></span>
          </div>
      
          <div class="form-group ">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" type="password" placeholder="*********" class="form-control">
            <span class="form-message"></span>
          </div>
      
      
          <input type="submit" name="login" value="SUBMIT" class="form-submit">
          <div class="forg">
            <a href="#" class="forg-left">Forgot Password?</a>
            <a href="index.php?act=register.php" class="forg-right">Register</a>
        <div class="clearfix"></div>
        </div>

        </form>
        <?php 
      if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
      }
      ?>
        
           </div>
      </div>
      