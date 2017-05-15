<ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img class="back_slide" src="<?php echo base_url('assets/images/') ?>background_slide.jpg">
      </div>
      <a href="#!user"><img class="circle" src="<?php echo base_url('assets/images/') ?>user.jpg"></a>
      <a href="#!name"><span class="white-text name">John Doe</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="<?php echo base_url('Admin'); ?>"><i class="material-icons">cloud</i>Dasboard</a></li>
    <ul class="collapsible" data-collapsible="accordion">
     <li>
       <div class="collapsible-header"><i class="material-icons">filter_drama</i>Category <p style="float:right;  width:50px; text-align:center; vertical-align:middle;"><?php echo $category ?></p> </div>
       <div class="collapsible-body admin-nav-collapse"><span><a href="<?php echo base_url('admin/category/add') ?>">Add Category</a></span></div>
       <div class="collapsible-body admin-nav-collapse"><span><a href="#">Edit Category</a></span></div>
     </li>
     <li>
       <div class="collapsible-header"><i class="material-icons">place</i>Article <p style="float:right;  width:50px; text-align:center; vertical-align:middle;"><?php echo $article ?></p></div>
       <div class="collapsible-body admin-nav-collapse"><span><a href="#">Add Article</a></span></div>
       <div class="collapsible-body admin-nav-collapse"><span><a href="#">Edit Article</a></span></div>
     </li>
     <li>
       <div class="collapsible-header"><i class="material-icons">whatshot</i>Selider <p  style="float:right;  width:50px; text-align:center; vertical-align:middle;"><?php echo $slider ?></p></div>
       <div class="collapsible-body admin-nav-collapse"><span><a href="#">Add Slider</a></span></div>
       <div class="collapsible-body admin-nav-collapse"><span><a href="#">Edit Selider</a></span></div>
     </li>
    </ul>
    <li><a href="#!"></a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
