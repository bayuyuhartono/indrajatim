<?php $this->load->view('template/header'); ?>
<section id="page-content">    
	<div class="container">        
		<div class="page-title">            
			<h2>Budaya</h2>        
		</div>        
		<br>        
		<div class="gridwrap">
			<div class="grid-layout post-3-columns beritalist" data-item="post-item">            
				<?php foreach ($list_budaya as $data) { ?>
					<div class="post-item border">                
						<div class="post-item-wrap">                    
							<div class="post-image">                        
								<a href="<?= base_url('budaya/detail/'.$data['slug']);?>">                            
									<img alt="img-budaya" src="<?= base_url('assets/admin/upload/berita/'.$data['gambar']);?>">
								</a>                    
							</div>                    
							<div class="post-item-description">                        
								<span class="post-meta-date"><i class="fa fa-calendar"></i><?= date('d-m-Y', strtotime($data['tanggal']));?></span>                        
								<span class="post-meta-comments"><i class="fa fa-user"></i>By Admin</span>                        
								<h2 style="font-size:13px;"><a href="<?= base_url('budaya/detail/'.$data['slug']);?>"><?= $data['judul'];?></a></h2>                     
								<a href="<?= base_url('budaya/detail/'.$data['slug']);?>" class="item-link">Read More <i class="icon-chevron-right"></i></a>              
							</div>                
						</div>            
					</div>
				<?php } ?>	        
			</div>    
		</div>    
		
		<div class="loadmore-section">
			<input type="text" id="next-value" value="<?= count($list_budaya);?>" style="display:block;">
			<button class="btn btn-light load-btn"> Load More </button>
			<img alt="loading" class="loading-bar" src="<?= base_url('assets/other/loading-bar.svg');?>">
		</div>
	</div>
</section>        
<?php $this->load->view('template/footer'); ?>

<script>
	$( document ).ready(function() {
		$( ".loading-bar" ).hide();
		$( ".load-btn" ).click(function() {
			$( ".load-btn" ).hide();
			$( ".loading-bar" ).show();
			let next = $( "#next-value" ).val();

			$.ajax({
				type:"GET",
				url:"<?= base_url('api/berita/getMoreData/');?>"+ next +"",
				success: function(result) {
					let object = JSON.parse(result);
					let databerita = object['data'];

					let nextVal = object['next'];
					let htmlValue = '<div class="grid-layout post-3-columns beritalist" data-item="post-item-2">';
					for (let i = 0; i < databerita.length; i++) {
						const element = databerita[i];
						htmlValue += '<div class="post-item border">'
						htmlValue += '	<div class="post-item-wrap">'
						htmlValue += '		<div class="post-image">'
						htmlValue += '			<a href="<?= base_url('budaya/detail/');?>'+ element['slug'] +'">'
						htmlValue += '				<img alt="img-budaya" src="<?= base_url('assets/admin/upload/berita/');?>'+ element['gambar'] +'">'
						htmlValue += '			</a>'
						htmlValue += '		</div>'
						htmlValue += '		<div class="post-item-description">'
						htmlValue += '			<span class="post-meta-date"><i class="fa fa-calendar"></i>'+ element['tanggal'] +'</span>'
						htmlValue += '			<span class="post-meta-comments"><i class="fa fa-user"></i>By Admin</span>'
						htmlValue += '			<h2 style="font-size:13px;"><a href="<?= base_url('budaya/detail/');?>'+ element['slug'] +'">'+ element['judul'] +'</a></h2>'
						htmlValue += '			<a href="<?= base_url('budaya/detail/');?>'+ element['slug'] +'" class="item-link">Read More <i class="icon-chevron-right"></i></a>'
						htmlValue += '		</div>'
						htmlValue += '	</div>'
						htmlValue += '</div>'
					}
					htmlValue += '</div>';
					$( ".gridwrap" ).append(htmlValue);
					$( "#next-value" ).val(nextVal);
					$( ".load-btn" ).show();
					$( ".loading-bar" ).hide();
				},
			});
		});
	});
</script>