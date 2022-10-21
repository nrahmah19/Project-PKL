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
                <h5 class="text-center">Daftar Pengajuan Kegiatan Pengabdian Masyarakat</h5>
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
                            <th>Jenis Pengabdian</th>
                            <th>Nama Kegiatan Pengabdian</th>
                            <th>Lokasi</th>
                            <th>Tanggal Mulai Kegiatan</th>
                            <th>Tanggal Selesai Kegiatan</th>
                            <th>Dokumen Pendukung</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach($pengabdian as $e=>$m)
                    <tbody>
                        <tr>
                            <td>{{$e+1}}</td>
                            <td>{{$m->id}}</td>
                            <td>{{$m->nim}}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->jenis_program}}</td>
                            <td>{{$m->nama_program}}</td>
                            <td>{{$m->alamat}}</td>
                            <td>{{$m->tanggal_mulai}}</td>
                            <td>{{$m->tanggal_selesai}}</td>
                            <td>{{$m->dokumen}}</td>
                            <td>@if($p->status==0)
                                Menunggu
                                @elseif($m->status==1)
                                Kegiatan Disetujui
                                @elseif($m->status==2)
                                {{$m->keterangan}}
                                @endif</td>
                            <td>{{$m->keterangan}}</td>
                            <td>@if($m->status==0)
                                <a href="/valpengabdian/{{$m->id}}/validasi" class="btn btn-primary">Disetujui</a>
                                @endif
                                @if($p->status==0)
                                <a href="/valpengabdian/{{$m->id}}/tolak" class="btn btn-primary">Ditolak</a>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
</div>