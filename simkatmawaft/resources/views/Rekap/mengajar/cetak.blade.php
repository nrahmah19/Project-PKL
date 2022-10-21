<!DOCTYPE html>
<html>

<head>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet"
        href="{{asset ('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->

    <style>
    #example2 {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #example2 td,
    #example2 th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #example2 tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #example2 tr:hover {
        background-color: #ddd;
    }

    #example2 th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #0292eb;
        color: white;
    }

    .footer {
        position: fixed;
        bottom: 0;
        text-align: center;
        font-size: 11px;
        font-family: 'Times New Roman', Times, serif;

    }
    </style>
</head>

<body>
    <img src="/template/frontend/images/ft.png" class="float-left" width="400" height="85">
    <center>
        <h1>REKAP DATA KEGIATAN MANDIRI</h1>
        <h3>FAKULTAS TEKNIK</h3>
        <h3>UNIVERSITAS MUHAMMADIYAH BANJARMASIN</h3>
        <font style="font-size: 2;">Jl. Gubernur Syarkawi/Lingkar Utara Desa Semangat Dalam Handil Bakti, Kecamatan
            Alalak, Kabupaten Barito Kuala.</font>
        <p>=======================================================================================================================
        </p>
    </center>
    <div style="width: 30%; text-align: left; float: left;"><span id="tanggalwaktu"></span></div><br><br>
    <table id="example2">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Kegiatan</th>
                <th>NPM Mahasiswa</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Program</th>
                <th>Nama Program</th>
                <th>Nama Sekolah</th>
                <th>Tanggal Mulai Kegiatan</th>
                <th>Tanggal Selesai Kegiatan</th>
                <th>Status</th>
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
                <td>{{$s->dataskl_id}}</td>
                <td>{{$s->tanggal_mulai}}</td>
                <td>{{$s->tanggal_selesai}}</td>
                Menunggu
                @elseif($s->status==1)
                Kegiatan Disetujui
                @elseif($s->status==2)
                {{$s->keterangan}}
                @endif</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <div class="footer">
        <i>Jl. Gubernur Syarkawi/Lingkar Utara Desa Semangat Dalam Handil Bakti, Kecamatan Alalak, Kabupaten Barito
            Kuala.</i>
        <i>Telp./Fax. (0511) 336 3002 • Email: ft@umbjm.ac.id • Website: ft.umbjm.ac.id</i>
    </div>
    <script src="{{asset ('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset ('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset ('adminlte/plugins/jquery/jquery.min.js')}}"></script>

    <script>
    window.print();
    </script>
    <script>
    var tw = new Date();
    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
    else(a = tw.getTime());
    tw.setTime(a);
    var tahun = tw.getFullYear();
    var hari = tw.getDay();
    var bulan = tw.getMonth();
    var tanggal = tw.getDate();
    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
        "Oktober", "Nopember", "Desember");
    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] +
        " " + tahun;
    </script>
</body>

</html>