    
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Daftar Post
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
              <h3 class="box-title">Artikel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th>Tanggal Post</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1 ;  foreach($post as $post) :  ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $post->author ?></td>
                  <td><?= $post->title ?></td>
                  <td><?= $post->date ?></td>
                  <td><?= $post->kategori ?></td>
                  <td>
                    <a href="" class="btn btn-info btn-sm"></a>
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