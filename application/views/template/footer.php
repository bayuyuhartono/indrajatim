<footer id="footer">    
	<div class="footer-content">        
		<div class="container">            
			<div class="row">                
				<div class="col-lg-4 col-lg-2 col-md-4">                    
					<div class="widget widget-contact-us" style="background-image: url('<?= base_url();?>assets/temp/images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">                        
						<h4>INDRA JATIM</h4>                        
						<ul class="list-icon">                            
							<li style="text-align:left;"><i class="fa fa-map-marker-alt"></i> <?= $alamat;?></li>                            
							<li><i class="fa fa-phone"></i> <?= $no_telp;?></li>                            
							<li><i class="far fa-envelope"></i> <?= $email;?></li>                        
						</ul>                    
					</div>                
				</div>                      
				<div class="col-xl-4 col-lg-4 col-md-4">                 
					<div class="widget" id=>                    
						<h4>FOLLOW US</h4>                    
						<ul class="list social-icons social-icons-colored">                        
							<li class="social-instagram"><a href="<?= $socmed_satu;?>" target="__blank"><img src="<?= base_url('assets/admin/upload/socmed/'.$img_socmedsatu);?>"></a></li>                        
							<li class="social-facebook"><a href="<?= $socmed_dua;?>" target="__blank"><img src="<?= base_url('assets/admin/upload/socmed/'.$img_socmeddua);?>"></a></li>                        
							<li class="social-youtube"><a href="<?= $socmed_tiga;?>" target="__blank"><img src="<?= base_url('assets/admin/upload/socmed/'.$img_socmedtiga);?>"></a></li>                    
							<li class="social-twitter"><a href="<?= $socmed_empat;?>" target="__blank"><img src="<?= base_url('assets/admin/upload/socmed/'.$img_socmedempat);?>"></a></li>
							<li class="social-tiktok"><a href="<?= $socmed_lima;?>" target="__blank"><img src="<?= base_url('assets/admin/upload/socmed/'.$img_socmedlima);?>"></a></li>
						</ul>                
					</div>            
				</div>             
				<div class="col-lg-4">                
					<h3>Kontak</h3>                
					<form method="post">                    
						<div class="input-group mb-2">                        
							<div class="input-group-prepend">                            
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>                        
							</div>                        
							<input type="text" id="username" class="form-control" placeholder="Username" required>                    
						</div>                    
						<div class="input-group mb-2">                        
							<div class="input-group-prepend">                            
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>                        
							</div>                        
							<input type="email" id="email" class="form-control" placeholder="Email" required>                    
						</div>                    
						<div class="input-group mb-2">                        
							<div class="input-group-prepend">                            
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>                        
							</div>                        
							<input type="number" id="phone" class="form-control" onkeypress="return onlyNumberKey(event)" placeholder="Phone" required>                    
						</div>                    
						<div class="form-group mb-2">                        
							<textarea type="text" id="message" rows="5" class="form-control" placeholder="Message" required></textarea>                    
						</div>                    
						<div class="form-group">                        
							<button class="btn" type="submit" onclick="return SendPesan()"><i class="fa fa-paper-plane"></i>&nbsp;Kirim Pesan</button> 
							<div id="msg" style="color:red;" ></div>                   
						</div>                
					</form>            
				</div>        
			</div>  
			<div class="row">
				<div class="col-lg-12">                                                
					<div class="struktur_new">
						<ul class="list">                            
							<li><a href="<?= base_url('strukturredaksi');?>">Struktur Redaksi</a></li>                            
							<li><a href="<?= base_url('tentangkami');?>">Tentang Kami</a></li>                          
							<li><a href="<?= base_url('privacypolicy');?>">Privacy Policy</a></li>                        
						</ul>                 
					</div>	   
				</div>
			</div>  
		</div>
	</div>
	<div class="copyright-content">    
		<div class="container">        
			<div class="row">            
				<div class="col-lg-12">                
					<div class="copyright-text text-center">Copyright &copy; 2021 Indra Jatim All Rights Reserved.</div>            
				</div>        
			</div>    
		</div>
	</div>
</footer>
</div>
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<script src="<?= base_url('assets/temp/js/jquery.js');?>"></script>
<script src="<?= base_url('assets/temp/js/plugins.js');?>"></script>
<script src="<?= base_url('assets/temp/js/functions.js');?>"></script>
<script>
	function SendPesan() {
		var username = $('#username').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var message = $('#message').val();
		$.ajax({
			type	: "POST",
			url 	: "<?= base_url('home/pesan'); ?>",
			data: {username: username,phone: phone,email: email,message: message},
			beforeSend:function(){
				document.getElementById("msg").innerHTML = " Mohon Menunggu !";
			},
			success : function(data){
				try {
					document.getElementById("msg").innerHTML = "Pesan Sudah Dikirim";
				}
				catch(err) {
					document.getElementById("msg").innerHTML = "Pesan Gagal Dikirim";
				}
				location.reload();
			}
		})
	}

	function onlyNumberKey(evt) 
   	{
	    // Only ASCII character in that range allowed
	    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
	    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
	    return false;
	    return true;
   	}
</script>
</body>
</html>