<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{url('home')}}" class="brand-link">
        <img src="{{asset('/template/frontend/images/logo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">KemahasiswaanFT</span>
    </a>
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <ul class="nav nav-treeview">
                </ul>
                </li>
                @if (auth()->user()->level == 'admin')
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/mahasiswa" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Data Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/sekolah" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p>Data Sekolah</p>
                            </a>
                        </li>
                    </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bookmark"></i>
                        <p>
                            Validasi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="valpenelitian" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Penelitian/Riset</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="valpengabdian" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Pengabdian Masyarakat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="valmengajar" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Mengajar di Sekolah</p>
                            </a>
                        </li>
                    </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>
                            Rekap Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/rekpenelitian" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Penelitian/Riset</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/rekpengabdian" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Pengabdian Masyarakat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/rekmengajar" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Mengajar di Sekolah</p>
                            </a>
                        </li>
                    </ul>
                    @endif
                    @if (auth()->user()->level == 'user')
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Penelitian/Riset
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/penelitian" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Form Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/st_penelitian" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Data Pengajuan</p>
                            </a>
                        </li>
                    </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Pengabdian Masyarakat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pengabdian" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Form Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="st_pengabdian" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Data Pengajuan</p>
                            </a>
                        </li>
                    </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon"></i>
                        <p>
                            Mengajar di sekolah
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/mengajar" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Form Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/st_mengajar" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Data Pengajuan</p>
                            </a>
                        </li>
                    </ul>
                    @endif
                <li class="nav-item">
                    <a href="/login" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
                </li>
                <ul class="nav nav-treeview">
                </ul>
    </div>
</aside>