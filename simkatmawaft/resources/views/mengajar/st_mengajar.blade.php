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
                <h5 class="text-center">Daftar Pengajuan Kegiatan Mengajar di Sekolah</h5>
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
                            <th>Jenis Program</th>
                            <th>Nama Program</th>
                            <th>Tanggal Mulai Kegiatan</th>
                            <th>Tanggal Selesai Kegiatan</th>
                            <th>Dokumen Pendukung</th>
                            <th>Surat Tugas</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach($mengajar as $e=>$s)
                    <tbody>
                        <tr>
                            <td>{{$e+1}}</td>
                            <td>{{$s->id}}</td>
                            <td>{{$s->nim}}</td>
                            <td>{{$s->nama}}</td>
                            <td>{{$s->jenis_program}}</td>
                            <td>{{$s->nama_program}}</td>
                            <td>{{$s->tanggal_mulai}}</td>
                            <td>{{$s->tanggal_selesai}}</td>
                            <td><a href="{{asset('file/'.$s->dokumen)}}" target="_blank">Lihat Dokumen</a></td>
                            <td>@if($s->status==1)
                                <a href="/mengajar/{{$s->id}}/surat" class="btn btn-primary" target="_blank">Cetak
                                    Surat</a>
                                @elseif($s->status==2)
                                <button class="btn btn-primary" disabled>Cetak Surat</button>
                                @endif
                            </td>
                            <td>@if($s->status==0)
                                Menunggu
                                @elseif($s->status==1)
                                Kegiatan Disetujui
                                @elseif($s->status==2)
                                {{$s->keterangan}}
                                @endif</td>
                            <td>{{$s->keterangan}}</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
</div>