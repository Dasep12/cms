
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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah</h3>
            </div>
            <!-- /.box-header -->
            <form action="<?= base_url('wp-admin/Post/simpanPostingan') ?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                    <label>Kode Kategori</label>
                    <input type="text" class="form-control" name="kode" id="kode">
                    </div>

                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="kode" id="kode">
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
