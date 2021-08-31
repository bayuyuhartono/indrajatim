<?php $this->load->view('template/header');?>
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12">
                <?php foreach ($image_banneratas as $data) { ?>
                    <?php if($data['status'] == 1) { ?>
                        <img src="<?= base_url('assets/admin/upload/banner/'.$data['gambar']);?>" style="width:100%; height:105%;">
                    <?php }else{ ?> 
                    <?php } ?>  
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <?php if ($this->session->userdata('nama')) { ?>
                <div class="content col-lg-9">
                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <h2><?= $judul_berita ?></h2>
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="<?= base_url('assets/admin/upload/berita/'.$gambar_berita);?>">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <span><?= $caption;?></span>
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar"></i><?= format_indo(date('D'));?> <?= date('d-m-Y', strtotime($tanggal));?></span>  
                                        <span class="post-meta-comments"><a href="#respond"><i class="fa fa-comments"></i><?= $countkomentar;?> Comments</a></span>
                                        <span class="post-meta-category"><i class="fa fa-tag"></i>Kategori, <?= $kategori;?></span>
                                    </div>
                                    <p><?= $content;?></p>
                                    <?php foreach ($image_bannerbawah as $data) { ?>
                                        <?php if($data['status'] == 1) { ?>
                                            <img src="<?= base_url('assets/admin/upload/banner/'.$data['gambar']);?>" style="width:100%; height:105%;">
                                        <?php }else{ ?>
                                        <?php } ?>  
                                    <?php } ?>
                                </div> 
                                <div class="comments" id="comments">
                                    <div class="comment_number">
                                        Komentar <span><?= $countkomentar;?></span>
                                    </div>
                                    <div class="comment-list">
                                        <?php foreach ($list_komentar as $data) { ?>
                                            <div class="comment" id="comment-1">
                                                <div class="image"><img alt="" src="<?= base_url('assets/temp/images/coment.png');?>" class="avatar"></div>
                                                <div class="text">
                                                    <h5 class="name"><?= $data['nama'];?></h5>
                                                    <span class="comment_date">Posted at <?= $data['waktu_komentar'];?></span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                    <div class="text_holder">
                                                        <p><?= $data['komentar'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>    
                                    </div>
                                </div>
                                <div class="respond-form" id="respond">
                                    <div class="respond-comment">
                                        Tinggalkan <span>Komentar</span></div>
                                        <form class="form-gray-fields" method="post">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="upper" for="comment">Komentar</label>
                                                        <input class="form-control required" id="nama" type="hidden" value="<?= $nama;?>">
                                                        <input class="form-control required" id="email" type="hidden" value="<?= $emails;?>">
                                                        <textarea class="form-control required" rows="9" placeholder="Komentar" id="komentar" aria-required="true"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group text-center">
                                                        <button class="btn" onclick="return Komentar()" type="submit">Komentar</button>
                                                        <div id="msg" style="color:red;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <div class="sidebar sticky-sidebar col-lg-3">
                        <div class="widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Berita Popular</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tabs-posts-content">
                                    <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                        <div class="post-thumbnail-list">
                                            <?php foreach ($berita_hits as $data) { ?>
                                                <div class="post-thumbnail-entry">
                                                    <img alt="" src="<?= base_url('assets/admin/upload/berita/'.$data['gambar']);?>">
                                                    <div class="post-thumbnail-content">
                                                        <a href="<?= base_url('tokoh/detail/'.$data['id_berita']);?>"><?= $data['judul'];?></a>
                                                        <span class="post-date"><i class="icon-clock"></i> <?= date('d-m-Y', strtotime($data['tanggal']));?></span>
                                                        <span class="post-category"><i class="fa fa-tag"></i> <?= $data['kategori'];?></span>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget" data-username="envato" data-limit="2">
                            <?php foreach ($image_bannerkanan as $data) { ?>
                                <?php if($data['status'] == 1) { ?>
                                    <img src="<?= base_url('assets/admin/upload/banner/'.$data['gambar']);?>" style="width:100%; height:105%;">
                                <?php }else{ ?>
                                <?php } ?>  
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php }else{ ?>  
                <div class="content col-lg-9">
                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <h2><?= $judul_berita ?></h2>
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="<?= base_url('assets/admin/upload/berita/'.$gambar_berita);?>">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <span><?= $caption;?></span>
                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar"></i><?= format_indo(date('D'));?> <?= date('d-m-Y', strtotime($tanggal));?></span>  
                                        <span class="post-meta-comments"><a href="#respond"><i class="fa fa-comments"></i><?= $countkomentar;?> Comments</a></span>
                                        <span class="post-meta-category"><i class="fa fa-tag"></i>Kategori, <?= $kategori;?></span>
                                    </div>
                                    <p><?= $content;?></p>
                                    <?php foreach ($image_bannerbawah as $data) { ?>
                                        <?php if($data['status'] == 1) { ?>
                                            <img src="<?= base_url('assets/admin/upload/banner/'.$data['gambar']);?>" style="width:100%; height:105%;">
                                        <?php }else{ ?>
                                        <?php } ?>  
                                    <?php } ?>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar sticky-sidebar col-lg-3">
                    <div class="widget">
                        <div class="tabs">
                            <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tabs-posts-content">
                                <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                    <div class="post-thumbnail-list">
                                        <?php foreach ($berita_hits as $data) { ?>
                                            <div class="post-thumbnail-entry">
                                                <img alt="" src="<?= base_url('assets/admin/upload/berita/'.$data['gambar']);?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?= base_url('tokoh/detail/'.$data['id_berita']);?>"><?= $data['judul'];?></a>
                                                    <span class="post-date"><i class="icon-clock"></i> <?= date('d-m-Y', strtotime($data['tanggal']));?></span>
                                                    <span class="post-category"><i class="fa fa-tag"></i> <?= $data['kategori'];?></span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget" data-username="envato" data-limit="2">
                        <?php foreach ($image_bannerkanan as $data) { ?>
                            <?php if($data['status'] == 1) { ?>
                                <img src="<?= base_url('assets/admin/upload/banner/'.$data['gambar']);?>" style="width:100%; height:105%;">
                            <?php }else{ ?>
                            <?php } ?>  
                        <?php } ?>
                    </div>
                </div>  
            <?php } ?>    
        </div>
    </div>
</section>
<?php $this->load->view('template/footer');?>
<script type="text/javascript">
    function Komentar() 
    {
        var nama = $('#nama').val();
        var email = $('#email').val();
        var komentar = $('#komentar').val();
        var id_berita = <?= $id_berita;?>;
        $.ajax({
            type    : "POST",
            url     : "<?= base_url(); ?>tokoh/komentar",
            data: {nama: nama,email: email,komentar: komentar,id_berita: id_berita},
            beforeSend:function(){
                document.getElementById("msg").innerHTML = " Mohon Menunggu !";
            },
            success : function(data){
                try {
                    document.getElementById("msg").innerHTML = "Komentar Sudah Diterima";
                }
                catch(err) {
                    document.getElementById("msg").innerHTML = "Komentar Gagal Diterima";
                }
                location.reload();
            }
        })
    }
</script>

