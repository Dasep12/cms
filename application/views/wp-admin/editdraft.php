
    
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Postingan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Post</a></li>
        <li class="active">Edit Post</li>
      </ol>
    </section>   
    
    <section class="content">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Postingan</h3>
            </div>
            <!-- /.box-header -->
          <div class="box-body">
               <form id="formUpload1" action="<?= base_url('wp-admin/Draft/update') ?>" method="post">
                <div class="form-group">
                    <label>Judul Postingan</label>
                    <input type="hidden" name="id" value="<?= $post->id ?>">
                    <input  type="text" name="title" value="<?= $post->title ?>" class="form-control">
                 </div>

                <div class="form-group">
                  <select class="form-control" name="kategori">
                    <option selected=""><?= $post->kategori ?></option>
                    <?php foreach($kategori as $k ) : ?>
                      <option><?= $k->kategori ?></option>
                    <?php endforeach ; ?>
                  </select>
                </div>

                <div class="form-group">
                    <label>Postingan</label>
                    <textarea rows="20" col="30" name="content" id="content" class="form-control ckeditor"><?= $post->content ?></textarea>
                 </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Perbarui</button>
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