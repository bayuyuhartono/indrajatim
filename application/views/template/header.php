<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INDRA JATIM" />
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title;?></title>
    <link href="<?= base_url('assets/temp/css/plugins.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/temp/css/style.css');?>" rel="stylesheet"> 
</head>
<style type="text/css">
    .struktur_new {
        text-align:left;
    }

    .struktur_new ul {
        display: inline-block; 
        list-style: none;
    }

    .struktur_new ul li {
        text-align: center;
        float: left;
    }

    .struktur_new ul li a {
        display: block;
        text-decoration: none;
        padding: 0px 10px;
    }
    .post-item-description h2 {
        height: 80px;
    }
</style>
<body>
    <div class="body-inner">
        <header id="header" class="header-always" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <div id="logo">
                        <a href="<?= base_url('home');?>">
                            <span class="logo-default"><?= $subtitle;?></span>
                        </a>
                    </div>
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="<?= base_url('infoterkini');?>">Info Terkini</a></li>
                                    <li><a href="<?= base_url('kabarjatim');?>">Kabar Jatim</a></li>
                                    <li><a href="<?= base_url('politik');?>">Politik</a></li>
                                    <li><a href="<?= base_url('budaya');?>">Budaya</a></li>
                                    <li><a href="<?= base_url('sejarah');?>">Sejarah</a></li>
                                    <li><a href="<?= base_url('hiburan');?>">Hiburan</a></li>
                                    <li><a href="<?= base_url('catatanakhirpekan');?>">Catatan Akhir Pekan</a></li>
                                    <li><a href="<?= base_url('tokoh');?>">Tokoh</a></li>
                                    <li><a href="<?= base_url('advertorial');?>">Advertorial</a></li>
                                    <?php if ($this->session->userdata('nama')) { ?>
                                        <li><a href="<?= base_url('login/logout');?>">Logout</a></li>
                                    <?php }else{ ?>    
                                        <li><a class="btn btn-primary text-white rounded-pill" href="<?= base_url('login');?>">Login</a></li> 
                                    <?php } ?>    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
            <?php foreach ($list_slide as $data) { ?>
                <div class="slide" data-bg-image="<?= base_url('assets/admin/upload/slide/'.$data['gambar']);?>">
                    <div class="bg-overlay"></div>
                    <div class="container">
                        <div class="slide-captions text-left text-light">
                            <h1><?= $data['judul'];?></h1> 
                            <p class="text-small"><?= $data['sub_judul'];?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>    
        </div>
    </div>   