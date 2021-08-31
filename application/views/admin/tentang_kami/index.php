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
              <form method="post" action="<?= base_url('admin/tentang_kami/actionedit');?>">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="hidden" name="id" value="<?= $id;?>">
                      <textarea class="form-control" id="tentang_kami" name="tentang_kami"><?= $tentang_kami;?></textarea>
                    </div>  
                  </div>  
                </div>  
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Edit</button>
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
    CKEDITOR.replace('tentang_kami',{
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

    CKEDITOR.replace('tentang_kami', { 
      extraPlugins: 'ckeditor_wiris',
        // For now, MathType is incompatible with CKEditor file upload plugins.
        height: 320,
        // Update the ACF configuration with MathML syntax.
        extraAllowedContent: mathElements.join(' ') + '(*)[*]{*};img[data-mathml,data-custom-editor,role](Wirisformula)' 
      });
  }());
</script>