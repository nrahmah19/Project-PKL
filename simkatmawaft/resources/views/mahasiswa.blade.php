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
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>NAMA MAHASISWA</th>
                            <th>PROGRAM STUDI</th>
                            <th>JENIS KELAMIN</th>
                            <th>AGAMA</th>
                            <th>TEMPAT LAHIR</th>
                            <th>TANGGAL LAHIR</th>
                            <th>STATUS</th>
                            <th>NO HP</th>
                            <th>DOSEN PA</th>
                        </tr>
                    </thead>
                    @foreach($mahasiswa as $e=>$m)
                    <tbody>
                        <tr>
                            <td>{{$e+1}}</td>
                            <td>{{$m->nim}}</td>
                            <td>{{$m->nama_mahasiswa}}</td>
                            <td>{{$m->program_studi}}</td>
                            <td>{{$m->jenis_kelamin}}</td>
                            <td>{{$m->agama}}</td>
                            <td>{{$m->tempat_lahir}}</td>
                            <td>{{$m->tanggal_lahir}}</td>
                            <td>{{$m->status}}</td>
                            <td>{{$m->nohp}}</td>
                            <td>{{$m->dosenPA}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
</div>