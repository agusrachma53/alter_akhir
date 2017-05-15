<?php $this->load->view('admin/head'); ?>
<?php $this->load->view('admin/header'); ?>
      <div style="background-color:red;" class="container">
        <div class="col s3 cover-out">
          <div class="cover-in">
            <h6>Category Article</h6>
            <img class="circle responsive-img  titl" src="<?php echo base_url("assets/images/")?>user.jpg" alt="">
            <p><?php echo $category ?></p>
          </div>
        </div>
        <div class="col s3 cover-out">
          <div class="cover-in">
            <h6>Article</h6>
            <img class="circle responsive-img  titl" src="<?php echo base_url("assets/images/")?>user.jpg" alt="">
            <p><?php echo $article ?></p>
          </div>
        </div>
        <div class="col s3 cover-out">
          <div class="cover-in">
            <h6>Member</h6>
            <img class="circle responsive-img  titl" src="<?php echo base_url("assets/images/")?>user.jpg" alt="">
            <p><?php echo $user ?></p>
          </div>
        </div>
        <div class="col s3 cover-out">
          <div class="cover-in">
            <h6>Slider</h6>
            <img class="circle responsive-img  titl" src="<?php echo base_url("assets/images/")?>user.jpg" alt="">
            <p><?php echo $slider ?></p>
          </div>
        </div>
      </div>
<?php $this->load->view('admin/footer'); ?>
