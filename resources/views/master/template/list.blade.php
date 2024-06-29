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
                        Template
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <button name="submit-form" value="submit-form" class="btn btn-default mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                            Ubah
                        </button>
                    </form>
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
                                <label class="form-label">
                                    Waktu
                                </label>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                Indikator
                                            </th>
                                            <th>
                                                Bukti Dukung
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Ketepatan waktu dalam pelaksanaan pekerjaan sesuai ruang lingkup dan jadwal.
                                            </td>
                                            <td>
                                                Status Monicon dan ACP.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body">
                                <label class="form-label">
                                    Kualitas
                                </label>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                Indikator
                                            </th>
                                            <th>
                                                Bukti Dukung
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Pemenuhan atas kualitas hasil pekerjaan sesuai dengan ruang lingkup penugasan.
                                            </td>
                                            <td>
                                                Acceptance Criteria Report.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Pemenuhan kepatuhan atas prosedur internal dalam pengelolaan (Monicon) dan dokumentasi proyek (ACP).
                                            </td>
                                            <td>
                                                Update Monicon dan ACP.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body">
                                <label class="form-label">
                                    Pengembangan
                                </label>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                Indikator
                                            </th>
                                            <th>
                                                Bukti Dukung
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Pelaksanaan kegiatan pengembangan kompetensi personil  sesuai dengan penugasan/arah pengembangan.
                                            </td>
                                            <td>
                                                Laporan hasil pelaksanaan pengembangan kompetensi.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Pelaksanaan atas catatan yang perlu ditindaklanjuti dari hasil review kinerja kuartal sebelumnya.
                                            </td>
                                            <td>
                                                Laporan catatan perbaikan kinerja.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop