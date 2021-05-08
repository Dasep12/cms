    
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?= "Kategori" ?></a></li>
        <li class="active"><?= $this->uri->segment(2) ?></li>
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
          <strong>Gagal ! </strong> <?= $this->session->flashdata('err') ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Kategori</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Kategori</th>
                  <th>Nama Kategori</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1 ; foreach($kategori as $d) : ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $d->idkategori ?></td>
                  <td><?= $d->kategori ?></td>
                  <td>
                    <a 
                        href="javascript:;"
                        data-id="<?php echo $d->id ?>"
                        data-nama="<?php echo $d->kategori ?>"
                        button  data-toggle="modal" data-target="#ubah-data" class="btn-sm btn btn-info">Ubah</button>
                    </a>
                    <a href="<?= base_url('wp-admin/Kategori/delete/' . $d->id) ?>" onclick="return confirm('hapus ?')" class="btn btn-sm btn-danger">hapus</a>
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


    <!-- Modal Ubah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ubah-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Data</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('wp-admin/Kategori/ubah')?>" method="post" enctype="multipart/form-data" role="form">
             <div class="modal-body">
                     <div class="form-group">
                         <div class="col-lg-12">
                           <label class="control-label">Kategori</label>
                            <input type="hidden" id="id1" name="id">
                             <input type="text" class="form-control" id="nama1" name="kategori" placeholder="Tuliskan Kategori">
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                     <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                 </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Ubah -->

<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#ubah-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id1').attr("value",div.data('id'));
            modal.find('#nama1').attr("value",div.data('nama'));
        });
    });
</script>