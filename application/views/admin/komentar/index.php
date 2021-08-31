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
                      <th>Berita</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Komentar</th>
                      <th>Status</th>
                      <th class="text-center">#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($list_komentar as $data) { ?>
                      <tr>
                        <td class="text-center"><?= $no;?></td>
                        <td><?= $data['judul'];?></td>
                        <td><?= $data['nama'];?></td>
                        <td><?= $data['email'];?></td>
                        <td><?= $data['komentar'];?></td>
                        <td>
                          <?php if ($data['status'] == 1) { ?>
                            <span>Publish</span>
                          <?php }else{ ?>  
                            <span>Un Publish</span>
                          <?php } ?>
                        </td>
                        <td class="text-center">
                          <button class="btn btn-sm btn-primary"><a class="text-white" href="<?= base_url('admin/komentar/actionpublish/'.$data['id']);?>">Publish</a></button>
                          <button class="btn btn-sm btn-primary"><a class="text-white" href="<?= base_url('admin/komentar/actionunpublish/'.$data['id']);?>">Un Publish</a></button>
                          <button onclick="return confirm('Yakin mau hapus data ini?')" class="btn btn-sm btn-danger mt-1"><a class="text-white" href="<?= base_url('admin/komentar/actionhapus/'.$data['id']);?>">Delete</a></button>
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