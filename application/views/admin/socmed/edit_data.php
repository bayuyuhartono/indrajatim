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
              <form method="post" action="<?= base_url('admin/socmed/actionedit');?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="hidden" name="id" class="form-control" value="<?= $id;?>">
                      <input type="file" name="gambar" class="form-control">
                      <p class="text-danger">*) max size gambar di upload 32x32 px</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Link Socmed</label>
                      <input type="text" name="link" class="form-control" value="<?= $link;?>">
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