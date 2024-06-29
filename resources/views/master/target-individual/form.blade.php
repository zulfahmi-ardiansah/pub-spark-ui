@extends("layout.default")

@section("content")
    <div class="container-xl">
        <div class="page-header text-white d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle text-white">
                        Data Dasar
                    </div>
                    <h2 class="page-title">
                        Target Individu
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="javascript:history.back()" class="btn btn-default mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" /></svg>    
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <form action="" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Waktu <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <select name="us_manager" required="true" class="form-control">
                                        <option value="">
                                            Pilih Waktu
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Proyek <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <select name="us_manager" required="true" class="form-control">
                                        <option value="">
                                            Pilih Proyek
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">
                                        Anggota <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <select name="us_manager" required="true" class="form-control">
                                        <option value="">
                                            Pilih Anggota
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body">
                                <label class="form-label">
                                    Waktu
                                </label>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <label class="form-label">
                                        Target <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="us_manager" required="true" class="form-control">
                                                <option value="">
                                                    Pilih Indikator
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea name="" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        Tambah
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <label class="form-label">
                                    Kualitas
                                </label>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <label class="form-label">
                                        Target <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="us_manager" required="true" class="form-control">
                                                <option value="">
                                                    Pilih Indikator
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea name="" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        Tambah
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <label class="form-label">
                                    Pengembangan
                                </label>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <label class="form-label">
                                        Target <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="us_manager" required="true" class="form-control">
                                                <option value="">
                                                    Pilih Indikator
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea name="" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-sm mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>
                                        Tambah
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="d-block">
                            <button name="submit-process" value="submit-process" class="btn btn-primary w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop