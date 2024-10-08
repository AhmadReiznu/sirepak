@extends('layouts.master-layouts')
@section('title')
Kerjasama Pendidikan
@endsection

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Kerjasama Pendidikan @endslot
@slot('title') Ubah @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        {{-- <button class="btn btn-secondary mb-5">
            <a href="{{ url('tabel-1-1') }}" class="text-white">Kembali</a>
        </button> --}}
        <div class="card">
            <form action="{{ route('tabel-1-1.update', $tabel_1_1->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    @csrf
                    <div class="card-body">
                        @if(count($errors) > 0)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                        <h4 class="card-title">Ubah Data Kerjasama Pendidikan</h4>

                        <div class="mb-3 mt-3 row">
                            <label for="lembaga_mitra" class="col-md-2 col-form-label">Lembaga</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="lembaga_mitra" value="{{ $tabel_1_1->lembaga_mitra }}" id="lembaga">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="example-search-input" class="col-md-2 col-form-label">Tingkat</label>
                            <div class="col-md-10">
                                <select name="tingkat" class="form-select">
                                    <option value="{{ $tabel_1_1->tingkat }}">{{ $tabel_1_1->tingkat }}</option>
                                    <option value="lokal">Lokal</option>
                                    <option value="nasional">Nasional</option>
                                    <option value="internasional">Internasional</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="judul_kegiatan" class="col-md-2 col-form-label">Judul Kegiatan Kerjasama</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $tabel_1_1->judul_kegiatan_kerjasama }}" name="judul_kegiatan_kerjasama" id="judul_kegiatan">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="manfaat_ps" class="col-md-2 col-form-label">Manfaat bagi PS yang Diakreditasi</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="manfaat_bagi_ps_yang_diakreditasi" value="{{ $tabel_1_1->manfaat_bagi_ps_yang_diakreditasi }}" id="manfaat_ps">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="waktu_durasi" class="col-md-2 col-form-label">Waktu & Durasi</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="waktu_dan_durasi" value="{{ $tabel_1_1->waktu_dan_durasi }}" id="waktu_durasi">
                                    <div class="input-group-text">Tahun</div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="bukti_kerjasama" class="col-md-2 col-form-label">Bukti Kerjasama</label>
                            <div class="col-md-10">
                                <p>File yang sudah diunggah : </p><span>{{ asset('dokumen/'.$tabel_1_1->bukti_kerjasama) }}</span>
                                <input class="form-control" type="file" name="bukti_kerjasama" value="" id="bukti_kerjasama">
                                <input type="hidden" name="current_document" value="{{ $tabel_1_1->bukti_kerjasama }}" id="bukti_kerjasama">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tahun_akhir_kerjasama" class="col-md-2 col-form-label">Tahun Berakhirnya Kerjasama</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" name="tahun_berakhirnya_kerjasama" value="{{ $tabel_1_1->tahun_berakhirnya_kerjasama }}" id="tahun_akhir_kerjasama">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Ubah</button>
                        <button class="btn btn-danger">
                            <a href="{{ route('tabel-1-1.index') }}" class="text-white">Batal</a>
                        </button>
                    </div>
            </form>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

{{-- <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form layouts</h4>

                <div class="row">
                    <div class="col-lg-5">
                        <div class="mt-4">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Form groups</h5>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-Fullname-input">Full Name</label>
                                    <input type="text" class="form-control" id="formrow-Fullname-input" placeholder="Enter your full Name">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-email-input">Email</label>
                                            <input type="email" class="form-control" id="formrow-email-input" placeholder="Enter your email address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-password-input">Password</label>
                                            <input type="password" class="form-control" id="formrow-password-input" placeholder="Enter your password">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="formrow-customCheck">
                                    <label class="form-check-label" for="formrow-customCheck">Check me out</label>
                                </div>

                                <div class="d-flex flex-wrap gap-3 mt-3">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                    <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 ms-lg-auto">
                        <div class="mt-5 mt-lg-4">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Horizontal form</h5>

                            <form>
                                <div class="row mb-4">
                                    <label for="horizontal-Fullname-input" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="horizontal-Fullname-input" placeholder="Enter your full name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="horizontal-email-input" placeholder="Enter your email address">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="horizontal-password-input" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" class="form-check-input" id="horizontal-customCheck">
                                            <label class="form-check-label" for="horizontal-customCheck">Remember me</label>
                                        </div>

                                        <div class="d-flex flex-wrap gap-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                            <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 mt-4">
                        <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Floating labels</h5>

                        <form>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingnameInput" placeholder="Enter Name">
                                <label for="floatingnameInput">Name</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingemailInput" placeholder="Enter Email address">
                                        <label for="floatingemailInput">Email address</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="floatingSelectGrid">Works with selects</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="floatingCheck">
                                    <label class="form-check-label" for="floatingCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-3">
                                <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                            </div>
                        </form>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6 mt-4">
                        <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Inline forms layout</h5>

                        <form class="row row-cols-lg-auto gx-3 gy-2 align-items-center">
                            <div class="col-12">
                                <label class="visually-hidden" for="specificSizeInputName">Name</label>
                                <input type="text" class="form-control" id="specificSizeInputName" placeholder="Enter Name">
                            </div>
                            <div class="col-12">
                                <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div>
                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                    <label class="form-check-label" for="autoSizingCheck2">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-wrap gap-3">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                </div>
                            </div>
                        </form>

                        <div class="mt-4">
                            <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i> Inline forms layout</h5>

                            <form>
                                <div class="hstack gap-3">
                                    <input class="form-control me-auto" type="text" placeholder="Add your item here..." aria-label="Add your item here...">
                                    <button type="button" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                    <div class="vr"></div>
                                    <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div> --}}
<!-- End Form Layout -->

<!-- Start Form Sizing -->
{{-- <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sizing</h4>
                <p class="card-title-desc">Set heights using classes like <code>.form-control-sm</code> and <code>.form-control-lg</code>.</p>

                <form>
                    <div class="row align-items-start">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="form-sm-input">Form Small Input</label>
                                <input class="form-control form-control-sm" type="text" id="form-sm-input" placeholder=".form-control-sm">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="">
                                <label class="form-label" for="form-lg-input">Form Large Input</label>
                                <input class="form-control form-control-lg" type="text" id="form-lg-input" placeholder=".form-control-lg">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
<!-- End Form Sizing -->

{{-- <div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Checkboxes</h4>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div>
                            <h5 class="font-size-14 mb-3">
                                <i class="mdi mdi-arrow-right text-primary me-1"></i>Form Checkboxes
                            </h5>
                            <div class="vstack gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Form Checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck2" checked>
                                    <label class="form-check-label" for="formCheck2">
                                        Form Checkbox checked
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h5 class="font-size-14 mb-3">
                            <i class="mdi mdi-arrow-right text-primary me-1"></i> Form Checkboxes Right
                        </h5>
                        <div class="vstack gap-2">
                            <div>
                                <div class="form-check form-check-right">
                                    <input class="form-check-input" type="checkbox" id="formCheckRight1">
                                    <label class="form-check-label" for="formCheckRight1">
                                        Form Checkbox
                                    </label>
                                </div>
                            </div>
                            <div>
                                <div class="form-check form-check-right">
                                    <input class="form-check-input" type="checkbox" id="formCheckRight2" checked>
                                    <label class="form-check-label" for="formCheckRight2">
                                        Form Checkbox checked
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Radios</h4>

                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <h5 class="font-size-14 mb-3">
                                <i class="mdi mdi-arrow-right text-primary me-1"></i>Form Radios
                            </h5>
                            <div class="vstack gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked>
                                    <label class="form-check-label" for="formRadios1">
                                        Form Radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="formRadios" id="formRadios2">
                                    <label class="form-check-label" for="formRadios2">
                                        Form Radio checked
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ms-auto">
                        <div class="mt-lg-0">
                            <h5 class="font-size-14 mb-3">
                                <i class="mdi mdi-arrow-right text-primary me-1"></i>Form Radios Right
                            </h5>
                            <div class="vstack gap-2">
                                <div>
                                    <div class="form-check form-check-right">
                                        <input class="form-check-input" type="radio" name="formRadiosRight" id="formRadiosRight1" checked>
                                        <label class="form-check-label" for="formRadiosRight1">
                                            Form Radio Right
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <div class="form-check form-check-right">
                                        <input class="form-check-input" type="radio" name="formRadiosRight" id="formRadiosRight2">
                                        <label class="form-check-label" for="formRadiosRight2">
                                            Form Radio Right checked
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- end row -->

{{-- <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Switches</h4>
                <p class="card-title-desc">A switch has the markup of a custom checkbox but uses the <code>.custom-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.</p>

                <div class="row">

                    <div class="col-md-6">
                        <div>
                            <h5 class="font-size-14 mb-3">
                                <i class="mdi mdi-arrow-right text-primary me-1"></i>Switch examples
                            </h5>

                            <div class="vstack gap-2">
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="customSwitch1" checked>
                                    <label class="form-check-label" for="customSwitch1">Toggle this switch element</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" disabled id="customSwitch2">
                                    <label class="form-check-label" for="customSwitch2">Disabled switch element</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-4 mt-md-0">
                            <h5 class="font-size-14 mb-3">
                                <i class="mdi mdi-arrow-right text-primary me-1"></i>Switch sizes
                            </h5>

                            <div class="vstack gap-2">
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="customSwitchsizesm" checked>
                                    <label class="form-check-label" for="customSwitchsizesm">Small Size Switch</label>
                                </div>

                                <div class="form-check form-switch form-switch-md">
                                    <input type="checkbox" class="form-check-input" id="customSwitchsizemd">
                                    <label class="form-check-label" for="customSwitchsizemd">Medium Size Switch</label>
                                </div>

                                <div class="form-check form-switch form-switch-lg">
                                    <input type="checkbox" class="form-check-input" id="customSwitchsizelg" checked>
                                    <label class="form-check-label" for="customSwitchsizelg">Large Size Switch</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- end row -->

@endsection