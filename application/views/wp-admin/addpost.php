
    
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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <form id="formUpload" action="#" method="post">
            <div class="box-body">
                <div class="form-group">
                    <textarea rows="35" col="30" name="content" id="content" class="form-control ckeditor"></textarea>
                 </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Posting</button>
                    <button type="button" class="btn btn-primary">Simpan ke Draft</button>
                </div>
            </div>
            </form>
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
 
 $(function(){
    $("#formUpload").on('submit',function(e){
      e.preventDefault();
      var url = "<?= base_url('wp-admin/Post/simpanPostingan') ?>" ;
        $.ajax({
          url : url  ,
          data : new FormData(this) ,
          method : "POST" ,
          contentType : false ,
          cache : false ,
          processData : false ,
          beforeSend : function (params) {
            
          },
          complete : function (params) {
            
          },
          success : function (params) {
            
          }
        })
    })
 })

 CKEDITOR.replace( 'content', {

  height: 600,
  filebrowserUploadUrl: "<?= base_url('wp-admin/Post/image/') ?>"

 });

</script>