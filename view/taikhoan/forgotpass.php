
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Forgot password</h4>
                        <div class="breadcrumb__links">
                            <a href="index.php">Home</a>
                            <span>Forgot password</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="main">
    <div class="section-title">
      
        <form action="index.php?act=forgotpass" method="POST" class="form" id="form-1">
            <div class="section-title">
                <h2>Forgot password</h2>
            </div>
          <div class="spacer"></div>
          
      
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="text" placeholder="VD: dangxuanhau248@gamil.com" class="form-control">
            <span class="form-message"></span>
          </div>
      
      
          <input type="submit" name="forgotpass" value="SUBMIT" class="form-submit">


        </form>
        <?php 
      if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
      }
      ?>
        
           </div>
      </div>
      