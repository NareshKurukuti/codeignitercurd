
<div class="col-md-6">
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Form Add</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form method="post" action="<?php echo base_url('index.php/CurdController/addfunction') ?>">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="idname" name="name" placeholder="Your Name" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" class="form-control" id="idaddress" name="address" placeholder="Your Address" required>
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?php echo base_url('index.php/CurdController/') ?>" style="color:White"><button type="button" class="btn btn-primary">Back</button></a>
    </div>
  </form>
</div>
</div>