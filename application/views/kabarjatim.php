<?php $this->load->view('template/header'); ?>
<section id="page-content">    
	<div class="container">        
		<div class="page-title">            
			<h2>Kabar Jatim</h2>        
		</div>        
		<br>        
		<div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">            
			<?php foreach ($list_kabarjatim as $data) { ?>
				<div class="post-item border">                
					<div class="post-item-wrap">                    
						<div class="post-image">                        
							<a href="<?= base_url('kabarjatim/detail/'.$data['slug']);?>">                            
								<img alt="img-sejarah" src="<?= base_url('assets/admin/upload/berita/'.$data['gambar']);?>">
							</a>                    
						</div>                    
						<div class="post-item-description">                        
							<span class="post-meta-date"><i class="fa fa-calendar"></i><?= date('d-m-Y', strtotime($data['tanggal']));?></span>
							<span class="post-meta-comments"><i class="fa fa-user"></i>By Admin</span>                        
							<h2 style="font-size:13px;"><a href="<?= base_url('kabarjatim/detail/'.$data['slug']);?>"><?= $data['judul'];?></a></h2>
							<a href="<?= base_url('kabarjatim/detail/'.$data['slug']);?>" class="item-link">Read More <i class="icon-chevron-right"></i></a>
						</div>                
					</div>            
				</div>
			<?php } ?>	        
		</div>       
	</div>
</section>        
<?php $this->load->view('template/footer'); ?>