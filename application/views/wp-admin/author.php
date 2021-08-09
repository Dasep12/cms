    
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Daftar Author
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Author</a></li>
      </ol>
    </section>   
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <?php if($this->session->flashdata('ok')) { ?>
            <div class="alert alert-info alert-dismissible" role="alert">
              <strong>Berhasil!</strong> <?= $this->session->flashdata('ok') ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php }else if($this->session->flashdata('err')) { ?>
          <div class="alert alert-danger alert-dismissible" role="alert">
              <strong>Gagal ! </strong>  <?= $this->session->flashdata('err') ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } ?>
          <div class="form-group">
            <a href="<?= base_url('wp-admin/Author/add') ?>" class="btn btn-danger">Tambah </a>
          </div>
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Author</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Image</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1 ;  foreach($author as $post) :  ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $post->nama ?></td>
                  <td><?= $post->image ?></td>
                  <td>
                    <a onclick="return confirm('hapus')" href="<?= base_url('wp-admin/Post/delete/' . $post->id) ?>" class="btn btn-danger btn-sm"  >hapus</a>
                    <a href="<?= base_url('wp-admin/Post/edit/' . $post->id) ?>" class="btn btn-primary btn-sm">edit</a>
                  </td>
                </tr>
                <?php endforeach ; ?>
              </table>
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