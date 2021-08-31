<?php $this->load->view('admin/template/header'); ?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4><?= $subtitle;?>  
              <br>
                <button class="btn btn-sm btn-primary"><a class="text-white" href="<?= base_url('admin/berita/tambah_data');?>">Tambah</a></button>
              </h4>  
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1" style="width:100%;">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Kategori</th>
                      <th>Gambar</th>
                      <th>Judul</th>
                      <th>Tanggal</th>
                      <th width="50">#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($list_berita as $data) { ?>
                      <tr>
                        <td class="text-center"><?= $no;?></td>
                        <td><?= $data['kategori'];?></td>
                        <td><img src="<?= base_url('assets/admin/upload/berita/'.$data['gambar']);?>" width="58" height="58"></td>
                        <td><?= $data['judul'];?></td>
                        <td><?= date('d-m-Y', strtotime($data['tanggal']));?></td>
                        <td>
                          <button class="btn btn-sm btn-primary mb-2"><a class="text-white" href="<?= base_url('admin/berita/edit_data/'.$data['id_berita']);?>">Edit</a></button>
                          <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau delete data ini?')"><a class="text-white" href="<?= base_url('admin/berita/actiondelete/'.$data['id_berita']);?>">Delete</a></button> 
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




