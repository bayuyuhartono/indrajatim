<?php $this->load->view('template/header'); ?>
<section id="page-content">    
	<div class="container">        
		<div class="page-title">            
			<h2>Hiburan</h2>        
		</div>        
		<br>  
		<?php if (count($list_hiburan) > 0) { ?>
			<?php foreach ($list_Hiburan as $data) { ?>
				<div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">      
					<div class="post-item border">                
						<div class="post-item-wrap">                    
							<div class="post-image">                        
								<a href="<?= base_url('sejarah/detail/'.$data['slug']);?>">                            
									<img alt="img-sejarah" src="<?= base_url('assets/admin/upload/berita/'.$data['gambar']);?>">
								</a>                    
							</div>                    
							<div class="post-item-description">                        
								<span class="post-meta-date"><i class="fa fa-calendar"></i><?= date('d-m-Y', strtotime($data['tanggal']));?></span>                        
								<span class="post-meta-comments"><i class="fa fa-user"></i>By Admin</span>                        
								<h2 style="font-size:13px;"><a href="<?= base_url('sejarah/detail/'.$data['slug']);?>"><?= $data['judul'];?></a></h2>                     
								<a href="<?= base_url('sejarah/detail/'.$data['slug']);?>" class="item-link">Read More <i class="icon-chevron-right"></i></a>              
							</div>                
						</div>            
					</div>
				</div>    
			<?php } ?>
		<?php } else { ?>
			<h2 style="text-align: center;">Data Belum Tersedia</h2>
		<?php } ?>
	</div>
</section>        
<?php $this->load->view('template/footer'); ?>