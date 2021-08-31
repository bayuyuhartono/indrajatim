<?php $this->load->view('template/header');?>
<section id="page-content">
    <div class="container">
        <div class="row">
            <?php foreach ($list_privacypolicy as $data) { ?>
                <div class="content col-lg-12">
                    <div id="blog" class="single-post">
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-item-description">
                                    <h2>Privacy Policy</h2>
                                    <p><?= $data['privacy_policy'];?></p>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div> 
            <?php } ?>    
        </div>
    </div>
</section>
<?php $this->load->view('template/footer');?>

