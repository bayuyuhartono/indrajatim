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
                      <th class="text-center">No</th>
                      <th>Username</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th class="text-center">#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($list_pesan as $data) { ?>
                      <tr>
                        <td class="text-center"><?= $no;?></td>
                        <td><?= $data['username'];?></td>
                        <td><?= $data['phone'];?></td>
                        <td><?= $data['email'];?></td>
                        <td><?= $data['message'];?></td>
                        <td class="text-center">
                          <button onclick="return confirm('Yakin mau hapus data ini?')" class="btn btn-sm btn-danger"><a class="text-white" href="<?= base_url('admin/pesan/actionhapus/'.$data['id']);?>">Delete</a></button>
                        </td>
                      </tr>
                    <?php $no++; } ?>  
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