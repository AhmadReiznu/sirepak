<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            {{-- <div class="navbar-brand-box">
                <a href="{{url('index')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/logo-dark.png') }}" alt="" height="20">
            </span>
            </a>

            <a href="{{url('index')}}" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ URL::asset('/assets/images/logo-sm.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="20">
                </span>
            </a>
        </div> --}}

        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <i class="fa fa-fw fa-bars"></i>
        </button>

        <!-- App Search-->
        <form class="app-search d-none d-lg-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="@lang('translation.Search')...">
                <span class="uil-search"></span>
            </div>
        </form>
    </div>

    <div class="d-flex">

        <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="uil-search"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                <form class="p-3">
                    <div class="m-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="@lang('translation.Search')..." aria-label="Recipient's username">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                <i class="uil-minus-path"></i>
            </button>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="uil-bell"></i>
                <span class="badge bg-danger rounded-pill">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                <div class="p-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="m-0 font-size-16"> @lang('translation.Notifications') </h5>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="small"> @lang('translation.Mark_read')</a>
                        </div>
                    </div>
                </div>
                <div data-simplebar style="max-height: 230px;">
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="uil-shopping-basket"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mt-0 mb-1">@lang('translation.order_placed')</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">@lang('translation.languages_grammar')</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> @lang('translation.3_min_ago')</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <img src="{{ URL::asset('/assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-xs" alt="user-pic">
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1">James Lemire</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">@lang('translation.simplified_English')</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> @lang('translation.1_hours_ago')</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar-xs">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="uil-truck"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mt-0 mb-1">@lang('translation.item_shipped')</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">@lang('translation.languages_grammar')</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> @lang('translation.3_min_ago')</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <img src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" class="rounded-circle avatar-xs" alt="user-pic">
                            </div>
                            <div class="flex-1">
                                <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">@lang('translation.friend_occidental')</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> @lang('translation.1_hours_ago')</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-2 border-top">
                    <div class="d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i> @lang('translation.View_More')..
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="{{ URL::asset('/assets/images/users/avatar-4.jpg') }}" alt="Header Avatar">
                <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{Str::ucfirst(Auth::user()->name)}}</span>
                <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">@lang('translation.View_Profile')</span></a>
                {{-- <a class="dropdown-item" href="#"><i class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">@lang('translation.My_Wallet')</span></a>
                <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">@lang('translation.Settings')</span> <span class="badge bg-soft-success rounded-pill mt-1 ms-2">03</span></a>
                <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">@lang('translation.Lock_screen')</span></a> --}}
                <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">@lang('translation.Sign_out')</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>



    </div>
    </div>
    <div class="container-fluid">
        <div class="topnav">

            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('dashboard')}}">
                                <i class="uil-home-alt me-2"></i> Dashboard
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="tabel_1" role="button">
                                <i class="uil-layers me-2"></i>Tabel 1 <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="tabel_1">
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-1-1') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-1-1.index')}}" role="button">
                                        Kerjasama Pendidikan
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-1-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-1-2.index')}}">
                                        Kerjasama Penelitian
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-1-3') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-1-3.index')}}">
                                        Kerjasama Pengabdian Kepada Masyarakat
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="tabel_2" role="button">
                                <i class="uil-layers me-2"></i>Tabel 2 <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="tabel_2">
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-2-a') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-2-a.index') }}" role="button">
                                        Seleksi Mahasiswa
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-2-b') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-2-b.index') }}" role="button">
                                        Mahasiswa Asing
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="tabel_3" role="button">
                                <i class="uil-layers me-2"></i>Tabel 3 <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown" aria-labelledby="tabel_3">
                                    <a class="dropdown-item {{ request()->is('tabel-3-a-1') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-a-1.index') }}" role="button">
                                        Dosen Tetap Perguruan Tinggi
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-a-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-a-2.index') }}" role="button">
                                        Dosen Pembimbing Utama Tugas Akhir
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-a-3') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-a-3.index') }}" role="button">
                                        Ekuivalen Waktu Mengajar Penuh (EWMP) Dosen Tetap Perguruan Tinggi
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-a-4') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-a-4.index') }}" role="button">
                                        Dosen Tidak Tetap
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-a-5') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-a-5.index') }}" role="button">
                                        Dosen Industri/Praktisi
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-1') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-1.index') }}" role="button">
                                        Pengakuan/Rekognisi DTPS
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-2.index') }}" role="button">
                                        Penilitian DTPS
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-3') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-3.index') }}" role="button">
                                        PkM DTPS
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-4-1') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-4-1.index') }}" role="button">
                                        Publikasi Ilmiah DTPS
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-4-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-4-2.index') }}" role="button">
                                        Pagelaran/Pameran/Presentasi/Publikasi Ilmiah DTPS
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-5') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-5.index') }}" role="button">
                                        Karya Ilmiah DTPS yang Disitasi
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-6') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-6.index') }}" role="button">
                                        Produk/Jasa DTPS yang Diadopsi oleh Industri/Masyarakat
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-7-1') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-7-1.index') }}" role="button">
                                        Luaran Penelitian/PkM Lainnya - HKI (Paten, Paten Sederhana)
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-7-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-7-2.index') }}" role="button">
                                        Luaran Penelitian/PkM Lainnya - HKI (Hak Cipta, Desain Produk Industri, dll.)
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-7-3') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-7-3.index') }}" role="button">
                                        Luaran Penelitian/PkM Lainnya - Teknologi Tepat Guna, Produk, Karya Seni, Rekayasa Sosial
                                    </a>
                                    <a class="dropdown-item {{ request()->is('tabel-3-b-7-4') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-3-b-7-4.index') }}" role="button">
                                        Luaran Penelitian/PkM Lainnya - Buku ber-ISBN, Book Chapter
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="lain_lain" role="button">
                                <i class="uil-layers me-2"></i>Lain-Lain <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="lain_lain">
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-4') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-4.index') }}" role="button">
                                        Penggunaan Dana
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-5-a') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-5-a.index') }}" role="button">
                                        Kurikulum, Capaian Pembelajaran, dan Rencana Pembelajaran
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-5-b') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-5-b.index') }}" role="button">
                                        Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-5-c') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-5-c.index') }}" role="button">
                                        Kepuasan Mahasiswa
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-6-a') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-6-a.index') }}" role="button">
                                        Penelitian DTPS yang Melibatkan Mahasiswa
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-6-b') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-6-b.index') }}" role="button">
                                        Penelitian DTPS yang Menjadi Rujukan Tema Tesis/Disertasi
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-7') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-7.index') }}" role="button">
                                        PkM DTPS yang Melibatkan Mahasiswa
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="tabel_8" role="button">
                                <i class="uil-layers me-2"></i>Tabel 8 <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="tabel_8">
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-a') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-a.index') }}" role="button">
                                        IPK Lulusan
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-b-1') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-b-1.index') }}" role="button">
                                        Prestasi Akademik Mahasiswa
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-b-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-b-2.index') }}" role="button">
                                        Prestasi Non-akademik Mahasiswa
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-c-1') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-c-1.index') }}" role="button">
                                        Masa Studi Lulusan (1)
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-c-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-c-2.index') }}" role="button">
                                        Masa Studi Lulusan (2)
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-c-3') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-c-3.index') }}" role="button">
                                        Masa Studi Lulusan (3)
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-c-4') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-c-4.index') }}" role="button">
                                        Masa Studi Lulusan (4)
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-d-1-a') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-d-1-a.index') }}" role="button">
                                        Waktu Tunggu Lulusan (1)
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-d-1-b') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-d-1-b.index') }}" role="button">
                                        Waktu Tunggu Lulusan (2)
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-d-1-c') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-d-1-c.index') }}" role="button">
                                        Waktu Tunggu Lulusan (3)
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-d-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-d-2.index') }}" role="button">
                                        Kesesuaian Bidang Kerja Lulusan
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-e-1') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-e-1.index') }}" role="button">
                                        Tempat Kerja Lulusan
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-e-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-e-2.index') }}" role="button">
                                        Kepuasan Pengguna Lulusan
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-ref-8-e-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-ref-8-e-2.index') }}" role="button">
                                        Tabel Referensi : Kepuasan Pengguna Lulusan
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-f-1-1') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-f-1-1.index') }}" role="button">
                                        Publikasi Ilmiah Mahasiswa
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-f-1-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-f-1-2.index') }}" role="button">
                                        Pagelaran/Pameran/Presentasi/Publikasi Ilmiah Mahasiswa
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-f-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-f-2.index') }}" role="button">
                                        Karya Ilmiah Mahasiswa yang Disitasi
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-f-3') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-f-3.index') }}" role="button">
                                        Produk/Jasa DTPS yang Dihasilkan Mahasiswa yang Diadopsi oleh Industri/Masyarakat
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-f-4-1') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-f-4-1.index') }}" role="button">
                                        Luaran Penelitian/PkM yang Dihasilkan Mahasiswa - Bagian-1 HKI (Paten, Paten Sederhana)
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-f-4-2') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-f-4-2.index') }}" role="button">
                                        Luaran Penelitian/PkM yang Dihasilkan Mahasiswa - Bagian-2 HKI (Hak Cipta, Desain Produk Industri, dll.)
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-f-4-3') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-f-4-3.index') }}" role="button">
                                        Luaran Penelitian/PkM yang Dihasilkan Mahasiswa - Bagian-3 Teknologi Tepat Guna, Produk, Karya Seni, Rekayasa Sosial
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item {{ request()->is('tabel-8-f-4-4') ? 'bg-primary text-white' : '' }}" href="{{ route('tabel-8-f-4-4.index') }}" role="button">
                                        Luaran Penelitian/PkM yang Dihasilkan Mahasiswa - Bagian-4 Buku Ber-ISBN, Book Chapter
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}" id="lain_lain" role="button">
                                <i class="uil-layers me-2"></i>User
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</header>