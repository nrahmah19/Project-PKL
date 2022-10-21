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
                    <form action="/pengabdian/{{$pengabdian->id}}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label>ID kegiatan</label>
                            <input id="form1" type="text" class="form-control" name="id" value="{{$pengabdian->id}}"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label>NPM Mahasiswa</label>
                            <input id="form1" type="text" class="form-control" name="nim" placeholder="Masukkan NPM"
                                value="{{$pengabdian->nim}}">
                        </div>
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input id="form1" type="text" class="form-control" name="nama" placeholder="Masukkan Nama"
                                value="{{$pengabdian->nama}}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Program</label>
                            <select id="form1" value="{{$pengabdian->jenis_program}}" name="jenis_program"
                                class="form-control" placeholder="Masukkan Jenis Program">
                                <option value="">Pilih Jenis Program</option>
                                <option value="Penyuluhan">Penyuluhan</option>
                                <option value="Loka Karya">Loka Karya</option>
                                <option value="Publikasi">Publikasi</option>
                                <option value="Pameran">Pameran</option>
                                <option value="Pelatihan">Pelatihan</option>
                                <option value="Seminar">Seminar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Program</label>
                            <input id="form1" type="text" class="form-control" name="nama_program"
                                placeholder="Masukkan Nama Program" value="{{$pengabdian->nama_program}}">
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input id="form1" type="text" class="form-control" name="alamat"
                                placeholder="Masukkan Lokasi Penelitian" value="{{$pengabdian->alamat}}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Mulai Penelitian</label>
                            <input id="form1" type="date" class="form-control" name="tanggal_mulai"
                                value="{{$pengabdian->tanggal_mulai}}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai Penelitian</label>
                            <input id="form1" type="date" class="form-control" name="tanggal_selesai"
                                value="{{$pengabdian->tanggal_selesai}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="dokumen"
                                        value="{{$pengabdian->dokumen}}">
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