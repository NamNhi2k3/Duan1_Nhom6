
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Register</h4>
                        <div class="breadcrumb__links">
                            <a href="index.php">Home</a>
                            <span>Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="main">

        <form action="index.php?act=register" method="POST" class="form" id="form-1">
            <div class="section-title">
                <h2>REGISTER</h2>
            </div>
          <div class="spacer"></div>

            <div class="form-group">
                   <label  class="form-label">User name</label>
                    <input  name="user" type="text" placeholder="VD: haudz" class="form-control">
                     <span class="form-message"></span>
            </div>
            <div class="form-group">
                   <label  class="form-label">Full name</label>
                    <input  name="fullname" type="text" placeholder="VD: Đặng Xuân Hậu" class="form-control">
                     <span class="form-message"></span>
            </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="text" placeholder="VD: dangxuanhau248@gamil.com" class="form-control">
            <span class="form-message"></span>
          </div>
          <div class="form-group">
                   <label  class="form-label">Address</label>
                    <input  name="address" type="text" placeholder="VD: Huyện Hòn Đất tỉnh Kiên Giang" class="form-control">
                     <span class="form-message"></span>
            </div>
            <div class="form-group">
                   <label  class="form-label">Number phone</label>
                    <input  name="phone" type="text" placeholder="VD: 0123456789" class="form-control">
                     <span class="form-message"></span>
            </div>
          <div class="form-group ">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" type="password" placeholder="*********" class="form-control">
            <span class="form-message"></span>
          </div>
            <div class="form-group">
            <label for="password_confirmation" class="form-label">Password confirmation</label>
            <input id="password_confirmation" name="password_confirmation" placeholder="*********" type="password" class="form-control">
            <span class="form-message" style="color:red;">
            <?php 
             if(isset($error)&&($error!="")){
              echo $error;
                }
               ?>
            </span>
          </div>  
      
          <input type="submit" class="form-submit" value="SUBMIT" name="register">
          <span style="color:red;">
      <?php 
      if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
      }
      ?>
      </span>
        </form>
      
      </div>
