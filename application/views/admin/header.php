<div   class="container-fluid">
  <div class="row">
    <div class="header col s12">
      <nav style="background-image:url('<?php echo base_url('assets/images/') ?>background.png')" class="nav-top">
        <div class="nav-wrapper menu-top">
          <a href="#" class="brand-logo right"><img class="logo_admin" src="<?php echo base_url("assets/images/"); ?>logo.jpg" alt=""></a>
          <ul id="nav-mobile" class="left">
            <li><a id="menu" data-activates="slide-out" class="waves-effect waves-light btn btn-floating" href="#"><i class="material-icons">menu</i></a></li>
            <li><a href="sass.html">Hello, Admin</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <?php $this->load->view("admin/slide-nav");?>
      
