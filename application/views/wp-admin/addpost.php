
    
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Postingan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Fixed</li>
      </ol>
    </section>   
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <?php if($this->session->flashdata('ok')) { ?>
        <div class="alert alert-info alert-dismissible" role="alert">
          <strong>Berhasil!</strong> Artikel terposting
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php }else if($this->session->flashdata('err')) { ?>
      <div class="alert alert-danger alert-dismissible" role="alert">
          <strong>Gagal ! </strong> Artikel gagal terposting
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
          <div class="box-body">
               <form id="formUpload1" action="<?= base_url('wp-admin/Post/simpanPostingan') ?>" method="post">
                <div class="form-group">
                    <label>Judul Postingan</label>
                    <input  type="text" name="title" class="form-control">
                 </div>

                <div class="form-group">
                  <select class="form-control" name="kategori">
                    <?php foreach($kategori as $k ) : ?>
                      <option><?= $k->kategori ?></option>
                    <?php endforeach ; ?>
                  </select>
                </div>

                <div class="form-group">
                <label>Postingan</label>
                    <textarea rows="20" col="30" name="content" id="content" class="form-control ckeditor"></textarea>
                 </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Posting</button>
                    <button type="button" class="btn btn-primary">Simpan ke Draft</button>
                </div>
            </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

<script>
 CKEDITOR.replace( 'content', {
  height: 600,
  filebrowserUploadUrl: "<?= base_url('wp-admin/Post/image/') ?>"
 });

</script>