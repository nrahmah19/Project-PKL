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
                <a href="/rekpenelitian/cetak" class="btn btn-primary float-lg-right">cetak rekap</a>
                <h5 class="text-center">Rekap Data Kegiatan Penelitian/Riset</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Kegiatan</th>
                            <th>NPM Mahasiswa</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jenis Penelitian</th>
                            <th>Judul Penelitian</th>
                            <th>Lokasi</th>
                            <th>Tanggal Mulai Kegiatan</th>
                            <th>Tanggal Selesai Kegiatan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    @foreach($penelitian as $e=>$p)
                    <tbody>
                        <tr>
                            <td>{{$e+1}}</td>
                            <td>{{$p->id}}</td>
                            <td>{{$p->nim}}</td>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->jenis_penelitian}}</td>
                            <td>{{$p->judul_penelitian}}</td>
                            <td>{{$p->alamat}}</td>
                            <td>{{$p->tanggal_mulai}}</td>
                            <td>{{$p->tanggal_selesai}}</td>
                            <td>@if($p->status==0)
                                Menunggu
                                @elseif($p->status==1)
                                Kegiatan Disetujui
                                @elseif($p->status==2)
                                {{$p->keterangan}}
                                @endif</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
</div>