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
                      <th>No Telp</th>
                      <th>Email</th>
                      <th>Alamat</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($list_contact as $data) { ?>
                      <tr>
                        <td><?= $data['no_telp'];?></td>
                        <td><?= $data['email'];?></td>
                        <td><?= $data['alamat'];?></td>
                        <td><button class="btn btn-sm btn-primary"><a class="text-white" href="<?= base_url('admin/contact/edit_data/'.$data['id']);?>"><i data-feather="edit"></i></a></button></td>
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