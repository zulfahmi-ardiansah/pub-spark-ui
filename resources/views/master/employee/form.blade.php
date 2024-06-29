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
                        Pegawai
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
                                        Nama <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <input autocomplete="off" name="us_name" type="text" class="form-control" maxlength="100" required="true">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Email <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <input autocomplete="off" name="us_email" type="email" class="form-control" maxlength="100" required="true">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Jabatan <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <select name="us_position" required="true" class="form-control">
                                        <option value="">
                                            Pilih Jabatan
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Departemen <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <select name="us_departement" required="true" class="form-control">
                                        <option value="">
                                            Pilih Departemen
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Role <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <select name="us_role" required="true" class="form-control">
                                        <option value="">
                                            Pilih Role
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Kata Sandi <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <input autocomplete="off" name="us_password" required="" type="password" maxlength="255" class="form-control">
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">
                                        Alamat <sup class="text-danger"><b>*</b></sup>
                                    </label>
                                    <textarea name="us_address" required="" class="form-control" maxlength="255"></textarea>
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