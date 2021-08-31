<?php $this->load->view('template/header'); ?>
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
			<div class="content col-lg-9">                
				<div id="blog" class="grid-layout post-3-columns" data-item="post-item">                    
					<?php foreach ($list_berita as $data) { ?>                        
						<div class="post-item border">                            
							<div class="post-item-wrap">                                
								<div class="post-image">                                    
									<a href="<?= base_url('berita/detail/'.$data['id_berita']);?>">                                        
										<img alt="img-home" src="<?= base_url('assets/admin/upload/berita/'.$data['gambar']);?>">
									</a>                                
								</div>                                
								<div class="post-item-description">   
									<span class="post-meta-date"><i class="fa fa-calendar"></i><?= date('d-m-Y', strtotime($data['tanggal']));?></span>    
									<span class="post-meta-comments"><i class="fa fa-user"></i>By Admin</span>                                               
									<h2 style="font-size:13px;"><a href="<?= base_url('berita/detail/'.$data['id_berita']);?>"><?= $data['judul'];?></a></h2>
									<a href="<?= base_url('berita/detail/'.$data['id_berita']);?>" class="item-link">Read More <i class="icon-chevron-right"></i></a>
								</div>                            
							</div>                            
						</div>                    
					<?php } ?>                     
				</div>               
			</div>            
			<div class="sidebar col-lg-3">                
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
												<a href="<?= base_url('berita/detail/'.$data['id_berita']);?>"><?= $data['judul'];?></a>
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
							<img src="<?= base_url('assets/admin/upload/banner/'.$data['gambar']);?>" style="width:100%; height:100%;">
						<?php }else{ ?>
						<?php } ?>	
					<?php } ?>
				</div>        
			</div>        
		</div>    
	</div>
</section>
<section id="page-content">    
	<div class="container">        
		<div class="page-title">            
			<h2>Pilihan Hari Ini</h2>        
		</div>        
		<br>        
		<div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">            
			<?php foreach ($list_hariini as $data) { ?>
				<div class="post-item border">                
					<div class="post-item-wrap">                    
						<div class="post-image">                        
							<a href="<?= base_url('berita/detail/'.$data['id_berita']);?>">                            
								<img alt="<?= base_url('berita/detail/'.$data['id_berita']);?>" src="<?= base_url('assets/admin/upload/berita/'.$data['gambar']);?>" height="200">
							</a>                    
						</div>                    
						<div class="post-item-description">               
							<span class="post-meta-date"><i class="fa fa-calendar"></i><?= date('d-m-Y', strtotime($data['tanggal']));?></span>                        
							<span class="post-meta-comments"><i class="fa fa-user"></i>By Admin</span>                     
							<h2 style="font-size:20px;"><a href="<?= base_url('berita/detail/'.$data['id_berita']);?>"><?= $data['judul'];?></a></h2>                     
							<a href="<?= base_url('berita/detail/'.$data['id_berita']);?>" class="item-link">Read More <i class="icon-chevron-right"></i></a>              
						</div>                
					</div>            
				</div>
			<?php } ?>	        
		</div> 
		<br>
		<div class="row">
			<div class="col-lg-12">
				<?php foreach ($image_bannerbawah as $data) { ?>
					<?php if($data['status'] == 1) { ?>
						<img src="<?= base_url('assets/admin/upload/banner/'.$data['gambar']);?>" style="width:100%; height:105%;">
					<?php }else{ ?>
					<?php } ?>	
				<?php } ?>
			</div>	
		</div>      
	</div>
</section>        
<?php $this->load->view('template/footer'); ?> 