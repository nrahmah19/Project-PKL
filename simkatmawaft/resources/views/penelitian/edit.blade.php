@include('master')
@include('sidebar')
<style>
#form1 {
    border-width: 2px;
    border-left-color: #00CED1;
    border-right-color: #00CED1;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card card-info">
            <div class="card-header md-12">
                <h5 class="text-center">Tambah Data Kegiatan Penelitian/Riset</h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                    <form action="/penelitian/{{$penelitian->id}}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label>ID kegiatan</label>
                            <input id="form1" type="text" class="form-control" name="id" value="{{$penelitian->id}}"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label>NPM Mahasiswa</label>
                            <input id="form1" type="text" class="form-control" name="nim" placeholder="Masukkan NPM"
                                value="{{$penelitian->nim}}">
                        </div>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input id="form1" type="text" class="form-control" name="nama" placeholder="Masukkan Nama"
                                value="{{$penelitian->nama}}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Penelitian</label>
                            <input id="form1" type="text" class="form-control" name="jenis_penelitian"
                                value="{{$penelitian->jenis_penelitian}}" placeholder="Masukkan Jenis Penelitian">
                        </div>
                        <div class="form-group">
                            <label>Judul Penelitian</label>
                            <input id="form1" type="text" class="form-control" name="judul_penelitian"
                                value="{{$penelitian->judul_penelitian}}" placeholder="Masukkan Judul Penelitian">
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input id="form1" type="text" class="form-control" name="alamat"
                                value="{{$penelitian->alamat}}" placeholder="Masukkan Lokasi Penelitian">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Mulai Penelitian</label>
                            <input id="form1" type="date" class="form-control" name="tanggal_mulai"
                                value="{{$penelitian->tanggal_mulai}}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai Penelitian</label>
                            <input id="form1" type="date" class="form-control" name="tanggal_selesai"
                                value="{{$penelitian->tanggal_selesai}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="dokumen"
                                        value="{{$penelitian->dokumen}}">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="background-color: white;"><br>
                            <input type="submit" name="submit" class="btn btn-info"></input>
                            <a href="/penelitian/index" type="submit" class="btn btn-default float-right">Kembali</a>
                        </div>
                </div>
                </form>
    </section>
</div>