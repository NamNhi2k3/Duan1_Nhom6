
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Update</h4>
                        <div class="breadcrumb__links">
                            <a href="index.php">Home</a>
                            <span>Update</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="main">
        <?php
        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
            extract($_SESSION['user']);
        }
        ?>
        <form action="index.php?act=update" method="POST" class="form" id="form-1">
            <div class="section-title">
                <h2>Update</h2>
            </div>
          <div class="spacer"></div>

            <div class="form-group">
                   <label for="user" class="form-label">User name</label>
                    <input  id="user" name="user" type="text"  class="form-control" value="<?=$user?>">
                     <span class="form-message"></span>
            </div>
            <div class="form-group">
                   <label for="user" class="form-label">Full name</label>
                    <input  id="user" name="fullname" type="text"  class="form-control" value="<?=$fullname?>">
                     <span class="form-message"></span>
            </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="text" placeholder="VD: dangxuanhau248@gamil.com" class="form-control" value="<?=$email?>">
            <span class="form-message"></span>
          </div>
          <div class="form-group">
                   <label  class="form-label">Address</label>
                    <input  name="address" type="text" placeholder="VD: Huyện Hòn Đất tỉnh Kiên Giang" class="form-control" value="<?=$address?>">
                     <span class="form-message"></span>
            </div>
            <div class="form-group">
                   <label  class="form-label">Number phone</label>
                    <input  name="phone" type="text" placeholder="VD: 0123456789" class="form-control" value="<?=$phone?>">
                     <span class="form-message"></span>
            </div>
          <div class="form-group ">
            <label for="password" class="form-label">Password</label>
            <input id="password" name="password" type="password" placeholder="*********" class="form-control" value="<?=$password?>">
            <span class="form-message"></span>
          </div>
           <!-- <div class="form-group">
            <label for="password_confirmation" class="form-label">Password confirmation</label>
            <input id="password_confirmation" name="password_confirmation" placeholder="*********" type="password" class="form-control">
            <span class="form-message" style="color:red;">
           
            </span>
          </div>  -->
          <input type="hidden" name="ma_kh" value="<?=$ma_kh?>">
          <input type="submit" class="form-submit" value="Update" name="update">
          <span style="color:red;">
      <?php 
      if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
      }
      ?>
      </span>
        </form>
      
      </div>
