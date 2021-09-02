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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

    /* searchbox */

    input {
        outline: none;
    }
    input[type=search] {
        -webkit-appearance: textfield;
        -webkit-box-sizing: content-box;
        font-family: inherit;
        font-size: 100%;
    }
    input::-webkit-search-decoration,
    input::-webkit-search-cancel-button {
        display: none; 
    }


    input[type=search] {
        background: url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
        border: none;
        padding: 9px 10px 9px 32px;
        width: 55px;
        
        -webkit-border-radius: 10em;
        -moz-border-radius: 10em;
        border-radius: 10em;
        
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        transition: all .5s;
    }
    input[type=search]:focus {
        width: 130px;
        background-color: #fff;
        border-color: #66CC75;
        
        -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
        -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
        box-shadow: 0 0 5px rgba(109,207,246,.5);
    }


    input:-moz-placeholder {
        color: #999;
    }
    input::-webkit-input-placeholder {
        color: #999;
    }

    /* Demo 2 */
    #demo-2 input[type=search] {
        width: 15px;
        padding-left: 10px;
        color: transparent;
        cursor: pointer;
    }
    #demo-2 input[type=search]:hover {
        background-color: #fff;
    }
    #demo-2 input[type=search]:focus {
        width: 130px;
        padding-left: 32px;
        color: #000;
        background-color: #fff;
        cursor: auto;
    }
    #demo-2 input:-moz-placeholder {
        color: transparent;
    }
    #demo-2 input::-webkit-input-placeholder {
        color: transparent;
    }

    input:not([type=checkbox]):not([type=radio]),
    select {
        min-height: 15px !important;
    }
    
    textarea:focus,
    input[type="search"]:focus,
    .uneditable-input:focus {   
        border-color: none;
        box-shadow: inset 0 1px 1px rgb(222, 222, 222), 0 0 8px rgb(222, 222, 222);
        outline: 0 none;
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
                                    <li>
                                        <form id="demo-2" method="post" action="<?= base_url('pencarian');?>">
                                            <input type="search" class="search-form" name="searchvalue" autocomplete="off" placeholder="Search">
                                        </form>
                                    </li>
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
        <?php if (count($list_slide) > 0) { ?>
            <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-fade="true">
                <?php foreach ($list_slide as $data) { ?>
                    <div class="slide" data-bg-image="<?= base_url('assets/admin/upload/berita/'.$data['gambar']);?>">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="slide-captions text-left text-light">
                                <h1><a href="<?= base_url($kategori_name.'/detail/'.$data['slug']);?>"><?= $data['judul'];?></a></h1> 
                                <!-- <p class="text-small"><?= $data['sub_judul'];?></p> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>    
            </div>
        <?php  } ?>
    </div>   

    <script>
      $(document).ready(function () {
          var submitIcon = $('.searchbox-icon');
          var inputBox = $('.searchbox-input');
          var searchBox = $('.searchbox');
          var isOpen = false;
          submitIcon.click(function () {
              if (isOpen == false) {
                  searchBox.addClass('searchbox-open');
                  inputBox.focus();
                  isOpen = true;
              } else {
                  searchBox.removeClass('searchbox-open');
                  inputBox.focusout();
                  isOpen = false;
              }
          });
          submitIcon.mouseup(function () {
              return false;
          });
          searchBox.mouseup(function () {
              return false;
          });
          $(document).mouseup(function () {
              if (isOpen == true) {
                  $('.searchbox-icon').css('display', 'block');
                  submitIcon.click();
              }
          });

            // $('.search-form').keypress(function (e) {
            //     if (e.which == 13) {
            //         let searchvalue = e.target.value;
            //         window.location.replace("<?= base_url('pencarian/berita');?>/" + searchvalue);
            //     }
            // });
      });

      function buttonUp() {
          var inputVal = $('.searchbox-input').val();
          inputVal = $.trim(inputVal).length;
          if (inputVal !== 0) {
              $('.searchbox-icon').css('display', 'none');
          } else {
              $('.searchbox-input').val('');
              $('.searchbox-icon').css('display', 'block');
          }
      }
    </script>