<?php $this->load->view('admin/template/header'); ?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4><?= $subtitle;?></h4>
            </div>
            <div class="card-body">
              <form method="post" action="<?= base_url('admin/contact/actionedit');?>">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>No Telp</label>
                      <input type="hidden" name="id" class="form-control" value="<?= $id;?>">
                      <input type="number" name="no_telp" onkeypress="return onlyNumberKey()" class="form-control" value="<?= $no_telp;?>">
                    </div>
                  </div>  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" value="<?= $email;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" name="alamat" class="form-control" value="<?= $alamat;?>">
                    </div>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </div>  
                </div>
              </form>  
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
</div>
<?php $this->load->view('admin/template/footer'); ?>
<script type="text/javascript">
  function onlyNumberKey(evt) 
    {
      // Only ASCII character in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
      return true;
    }
</script>