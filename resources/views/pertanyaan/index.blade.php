@extends('../template')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tabel Pertanyaan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Profil</th>
                                    <th>Tanggal Diperbaharui</th>
                                    <th style="width: 40px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($pertanyaan as $value):?>  
                                <tr>
                                    <td><?php echo $value->id;?></td>
                                    <td><?php echo $value->judul;?></td>
                                    <td><?php echo $value->isi;?></td>
                                    <td><?php echo $value->tanggal_dibuat;?></td>
                                    <td><?php echo $value->profil_id;?></td>
                                    <td><?php echo $value->tanggal_diperbaharui;?></td>
                                    <td><a class="btn btn-warning" href="">Edit</a></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection
