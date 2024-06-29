@extends("layout.default")

@section("content")
    <style>
        th {
            vertical-align: middle;
        }
    </style>
    <div class="container-xl">
        <div class="page-header text-white d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle text-white">
                        Penilaian
                    </div>
                    <h2 class="page-title">
                        Formulir
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
                                        Waktu
                                    </label>
                                    <p class="form-control mb-0">
                                        Periode Q2 2024
                                    </p>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Proyek
                                    </label>
                                    <p class="form-control mb-0">
                                        Doi Masaru
                                    </p>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Manajer
                                    </label>
                                    <p class="form-control mb-0">
                                        Edmond Lohanata
                                    </p>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">
                                        Target
                                    </label>
                                    <p class="form-control mb-0">
                                        Menyelesaikan pengembangan dan pengujian seluruh modul.
                                    </p>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-label">
                                        Anggota
                                    </label>
                                    <p class="form-control mb-0">
                                        Zulfahmi Ardiansah
                                    </p>
                                </div>
                            </div>
                            <div class="card-body">
                                <label class="form-label">
                                    Waktu
                                </label>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="3">
                                                Indikator
                                            </th>
                                            <th rowspan="3">
                                                Bukti Dukung
                                            </th>
                                            <th rowspan="3">
                                                Target
                                            </th>
                                            <th rowspan="3">
                                                Realisasi
                                            </th>
                                            <th colspan="3">
                                                Penilaian
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Mandiri
                                            </th>
                                            <th>
                                                Manajer
                                            </th>
                                            <th>
                                                Pimpinan
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
                                            <td>
                                                Membantu menyiapkan kebutuhan aplikasi sesuai dengan waktu sprint yang ditetapkan.
                                            </td>
                                            <td>
                                                <textarea class="form-control"></textarea>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
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
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="3">
                                                Indikator
                                            </th>
                                            <th rowspan="3">
                                                Bukti Dukung
                                            </th>
                                            <th rowspan="3">
                                                Target
                                            </th>
                                            <th rowspan="3">
                                                Realisasi
                                            </th>
                                            <th colspan="3">
                                                Penilaian
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Mandiri
                                            </th>
                                            <th>
                                                Manajer
                                            </th>
                                            <th>
                                                Pimpinan
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
                                            <td>
                                                Di isi sesuai dengan ketetapan minimal dari manajemen.
                                            </td>
                                            <td>
                                                <textarea class="form-control"></textarea>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Pemenuhan kepatuhan atas prosedur internal dalam pengelolaan (Monicon) dan dokumentasi proyek (ACP).
                                            </td>
                                            <td>
                                                Update Monicon dan ACP.
                                            </td>
                                            <td>
                                                Di isi sesuai dengan ketetapan minimal dari manajemen.
                                            </td>
                                            <td>
                                                <textarea class="form-control"></textarea>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
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
                                            <th rowspan="3">
                                                Indikator
                                            </th>
                                            <th rowspan="3">
                                                Bukti Dukung
                                            </th>
                                            <th rowspan="3">
                                                Target
                                            </th>
                                            <th rowspan="3">
                                                Realisasi
                                            </th>
                                            <th colspan="3">
                                                Penilaian
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Mandiri
                                            </th>
                                            <th>
                                                Manajer
                                            </th>
                                            <th>
                                                Pimpinan
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
                                            <td>
                                                Di isi sesuai dengan target yang dibebankan di awal oleh pimpinan.
                                            </td>
                                            <td>
                                                <textarea class="form-control"></textarea>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Pelaksanaan atas catatan yang perlu ditindaklanjuti dari hasil review kinerja kuartal sebelumnya.
                                            </td>
                                            <td>
                                                Laporan catatan perbaikan kinerja.
                                            </td>
                                            <td>
                                                Di isi sesuai dengan improvement plan penilaian kinerja sebelumnya.
                                            </td>
                                            <td>
                                                <textarea class="form-control"></textarea>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" placeholder="1-4">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body">
                                <label class="form-label">
                                    Riwayat
                                </label>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                Tanggal Mulai
                                            </th>
                                            <th>
                                                Proses
                                            </th>
                                            <th>
                                                Penanggung Jawab
                                            </th>
                                            <th>
                                                Posisi
                                            </th>
                                            <th>
                                                Tanggal Selesai
                                            </th>
                                            <th>
                                                Keterangan
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ date("M d, Y") }}
                                            </td>
                                            <td>
                                                Pengisian
                                            </td>
                                            <td>
                                                Zulfahmi Ardiansah
                                            </td>
                                            <td>
                                                Anggota
                                            </td>
                                            <td>
                                                {{ date("M d, Y") }}
                                            </td>
                                            <td>
                                                Sudah diisi sesuai dengan petunjuk.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ date("M d, Y") }}
                                            </td>
                                            <td>
                                                Penilaian
                                            </td>
                                            <td>
                                                Edmond Lohanata
                                            </td>
                                            <td>
                                                Manajer
                                            </td>
                                            <td>
                                                {{ date("M d, Y") }}
                                            </td>
                                            <td>
                                                Sudah dinilai sesuai dengan petunjuk.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ date("M d, Y") }}
                                            </td>
                                            <td>
                                                Penilaian
                                            </td>
                                            <td>
                                                Agus Sugianto
                                            </td>
                                            <td>
                                                Pimpinan
                                            </td>
                                            <td>
                                                {{ date("M d, Y") }}
                                            </td>
                                            <td>
                                                Sudah dinilai sesuai dengan petunjuk.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body">
                                <label class="form-label">
                                    Keterangan
                                </label>
                            </div>
                            <div class="card-body">
                                <textarea name="" id="" class="form-control"></textarea>
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