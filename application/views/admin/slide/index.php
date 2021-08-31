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
                <button class="btn btn-sm btn-primary"><a class="text-white" href="<?= base_url('admin/slide/tambah_data');?>">Tambah</a></button>
              </h4>    
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1" style="width:100%;">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th>Judul</th>
                      <th>Gambar</th>
                      <th>Kategori</th>
                      <th width="50">#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($list_slide as $data) { ?>
                      <tr>
                        <td class="text-center"><?= $no;?></td>
                        <td><?= $data['judul'];?></td>
                        <td><img src="<?= base_url('assets/admin/upload/slide/'.$data['gambar']);?>" width="58" height="58"></td>
                        <td>
                          <?php if ($data['kategori'] == 1) { ?>
                            <span>Home</span>
                          <?php }else if($data['kategori'] == 2) { ?>  
                            <span>Politik</span>
                          <?php }else if($data['kategori'] == 3) { ?>  
                            <span>Budaya</span>  
                          <?php }else if($data['kategori'] == 4) { ?>  
                            <span>Sejarah</span>
                          <?php }else if($data['kategori'] == 5) { ?>  
                            <span>Info Terkini</span> 
                          <?php }else if($data['kategori'] == 6) { ?>  
                            <span>Catatan Akhir Pekan</span> 
                          <?php }else if($data['kategori'] == 7) { ?>  
                            <span>Kabar Jatim</span>    
                          <?php }else if($data['kategori'] == 8) { ?>  
                            <span>Advertorial</span>  
                          <?php }else if($data['kategori'] == 9) { ?>  
                            <span>Tokoh</span>  
                          <?php }else if($data['kategori'] == 10) { ?>  
                            <span>Struktur Redaksi</span>  
                          <?php }else if($data['kategori'] == 11) { ?>  
                            <span>Tentang Kami</span>  
                          <?php }else if($data['kategori'] == 12) { ?>  
                            <span>Privacy Policy</span>  
                          <?php } ?>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-primary mb-2"><a class="text-white" href="<?= base_url('admin/slide/edit_data/'.$data['id']);?>">Edit</a></button>
                          <button class="btn btn-sm btn-danger mb-2" onclick="return confirm('Yakin mau delete data ini?')"><a class="text-white" href="<?= base_url('admin/slide/actiondelete/'.$data['id']);?>">Delete</a></button>
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