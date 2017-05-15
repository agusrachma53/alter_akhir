<?php $this->load->view('admin/head'); ?>
<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/quick_view'); ?>
<div class="row">
  <div class="container cate-out">
      <div class="row">
        <div class="row">
          <h4 style="text-align:center;">Category</h4>
        </div>

          <div class="col s4 offset-s2">
            <div class="row">
              <?php if($this->uri->segment(3) == "add"){ ?>
              <h5>Insert Data</h5>
              <form class="" action="<?php echo base_url('admin/act_cate')?>" method="POST">
                <div class="input-field col s12">
                  <input id="password" type="text" name="cate" class="validate">
                  <input class="waves-effect waves-light btn" type="submit" name="proses" value="insert">
                </div>
              </div>
              </form>
            <?php }elseif($this->uri->segment(2) == "edit"){ ?>
              <h5>Edit Data</h5>
              <form class="" action="<?php echo base_url('admin/act_cate')?>" method="POST">
                <div class="input-field col s12">
                  <input id="password" type="text" name="cate" class="validate" value="<?php echo $data->name ?>">
                  <input type="hidden" name="id" value="<?php echo $data->id ?>">
                  <input class="waves-effect waves-light btn" type="submit" name="proses" value="Edit">
                </div>
              </div>
              </form>
            <?php } ?>
          </div>

          <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
          <table class="responsive-table col s4">
          <thead style="background-color:salmon;">
            <tr>
                <th>No</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php $no = 1; foreach($category_2 ->result() as $field) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $field->name ?></td>
              <td><a href="<?php echo base_url('admin/edit/edit_category/'.$field->id) ?>">Edit</a> || <a href="<?php echo base_url('admin/act_cate/delete/'.$field->id) ?>">Delete</a></td>
            </tr>
            <?php $no++; } ?>
          </tbody>
        </table>
      </div>
  </div>
</div>
<?php $this->load->view('admin/footer'); ?>
