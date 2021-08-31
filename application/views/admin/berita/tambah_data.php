<?php $this->load->view('admin/template/header'); ?>
<!-- Main Content -->
<div class="main-content">  
	<section class="section">    
		<div class="section-body">      
			<div class="row">        
				<div class="col-12 col-md-12 col-lg-12">          
					<div class="card">            
						<div class="card-header">              
							<h4><?= $subtitle;?></h4>             
						</div>            
						<div class="card-body">              
							<form method="post" action="<?= base_url('admin/berita/actiontambah');?>" enctype="multipart/form-data">                
								<div class="row">                  
									<div class="col-md-6">                    
										<div class="form-group">                      
											<label>Judul</label>                      
											<input type="text" name="judul" class="form-control" required>                    
										</div>                                      
									</div>                    
									<div class="col-md-6">                    
										<div class="form-group">                      
											<label>Gambar</label>                      
											<input type="file" name="gambar" class="form-control" required>                    
										</div>                                      
									</div> 
                  <div class="col-md-4">               
                    <div class="form-group">                      
											<label>Kategori</label>                      
											<select name="kategori" class="form-control select2">                        
												<?php foreach ($list_kategori as $data) { ?>                          
													<option value="<?= $data['id'];?>"><?= $data['kategori'];?></option>                        
												<?php } ?>                      
											</select>                    
										</div>
                  </div>  
                  <div class="col-md-4">
                    <div class="form-group">                      
											<label>Caption</label>                      
											<input type="text" name="caption" class="form-control" required>                    
										</div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">                      
											<label>Tanggal Publish</label>                      
											<input type="date" name="tanggal" class="form-control" required>                    
										</div>
                  </div>
								</div>                  
								<div class="row">                  
									<div class="col-md-12">                    
										<div class="form-group">
											<textarea class="form-control" id="ckeditor" name="content"></textarea>                  
										</div>	
									</div>                  
								</div>                  
								<div class="row">                  
									<div class="col-md-12">                    
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Simpan</button>                  
										</div>	
									</div>                  
								</div>              
							</form>              
						</div>          
					</div>        
				</div>      
			</div>    
		</div>    
	</section>
</div>
<?php $this->load->view('admin/template/footer'); ?>
<script type="text/javascript">
  $(function () {
    CKEDITOR.replace('ckeditor', {
      filebrowserImageBrowseUrl : '<?= base_url();?>assets/kcfinder/browse.php',
      height: '400px'             
    });
  });
</script>
<script>
  (function() {
    var mathElements = [
    'math',
    'maction',
    'maligngroup',
    'malignmark',
    'menclose',
    'merror',
    'mfenced',
    'mfrac',
    'mglyph',
    'mi',
    'mlabeledtr',
    'mlongdiv',
    'mmultiscripts',
    'mn',
    'mo',
    'mover',
    'mpadded',
    'mphantom',
    'mroot',
    'mrow',
    'ms',
    'mscarries',
    'mscarry',
    'msgroup',
    'msline',
    'mspace',
    'msqrt',
    'msrow',
    'mstack',
    'mstyle',
    'msub',
    'msup',
    'msubsup',
    'mtable',
    'mtd',
    'mtext',
    'mtr',
    'munder',
    'munderover',
    'semantics',
    'annotation',
    'annotation-xml'
    ];

    CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://ckeditor.com/docs/ckeditor4/4.14.1/examples/assets/plugins/ckeditor_wiris/', 'plugin.js');

    CKEDITOR.replace('ckeditor', {
      extraPlugins: 'ckeditor_wiris',
        // For now, MathType is incompatible with CKEditor file upload plugins.
        height: 320,
        // Update the ACF configuration with MathML syntax.
        extraAllowedContent: mathElements.join(' ') + '(*)[*]{*};img[data-mathml,data-custom-editor,role](Wirisformula)'
      });
  });
</script>
