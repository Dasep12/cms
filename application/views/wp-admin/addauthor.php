
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?= "Kategori" ?></a></li>
        <li class="active"><?= "Tambah Kategori" ?></li>
      </ol>
    </section> 
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <?php if($this->session->flashdata('ok')) { ?>
            <div class="alert alert-info alert-dismissible" role="alert">
              <strong>Berhasil!</strong> Kategori di tambahkan
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php }else if($this->session->flashdata('err')) { ?>
          <div class="alert alert-danger alert-dismissible" role="alert">
              <strong>Gagal ! </strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah</h3>
            </div>
            <!-- /.box-header -->
            <form enctype="multipart/form-data" encypte="multipart/form-data"  action="<?= base_url('wp-admin/Author/input') ?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control"  name="nama" id="nama">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" class="form-control" name="file" id="file">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Posting</button>
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
function submit(){
  alert('hallo');
  return ;
    //  if(document.getElementsById("kode").value == ""){
    //    alert('kode kosong');
    //    return false ;
    //  }else if(document.getElementsById("kategori").value == "") {
    //   alert('kategori kosong');
    //   return false ;
    //  }
    //  return false;
}

</script>