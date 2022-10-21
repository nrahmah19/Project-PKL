@include('master')
@include('sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header md-12">
                <h5 class="text-center">Data Mahasiswa Fakultas Teknik</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>NPSN</th>
                        <th>Nama Sekolah</th>
                        <th>Alamat Sekolah</th>
                        <th>Telepon</th>
                    </tr>
                    @foreach($sekolah as $data)
                    <tr>
                        <td>no</td>
                        <td>{{$data->npsn}}</td>
                        <td>{{$data->nama_sekolah}}</td>
                        <td>{{$data->alamat_sekolah}}</td>
                        <td>{{$data->telepon}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
</div>