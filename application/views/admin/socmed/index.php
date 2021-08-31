<?php $this->load->view('admin/template/header'); ?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4><?= $subtitle;?></h4>  
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Gambar</th>
                      <th width="50">#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($list_contact as $data) { ?>
                      <tr>
                        <td><img src="<?= base_url('assets/admin/upload/socmed/'.$data['gambar']);?>" width="58" height="58"></td>
                        <td>
                          <button class="btn btn-sm btn-primary mb-2"><a class="text-white" href="<?= base_url('admin/socmed/edit_data/'.$data['id']);?>">Edit</a></button>
                        </td>
                      </tr>  
                    <?php } ?>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('admin/template/footer'); ?>