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
              <form method="post" action="<?= base_url('admin/banner/actionedit');?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="hidden" name="id" class="form-control" value="<?= $id;?>">
                      <input type="text" name="judul" class="form-control" value="<?= $judul;?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                        <option value="1">Publish</option>
                        <option value="0">Tidak Publish</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" name="gambar" class="form-control">
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