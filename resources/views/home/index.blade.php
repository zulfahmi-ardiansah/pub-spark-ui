@extends("layout.default")

@section("content")
    <div class="container-xl">
        <div class="page-header text-white d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle text-white">
                        Beranda
                    </div>
                    <h2 class="page-title">
                        Selamat Datang !
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card" style="height: calc(12rem + 10px)">
                        <div class="card-header">
                            <h3 class="card-title">Penilaian Dirimu</h3>
                        </div>
                        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                            <div class="divide-y mb-3">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-truncate">
                                                <a href="{{ url('/form') }}">
                                                    <strong>
                                                        Periode Q2 2024 - Doi Masaru
                                                    </strong>
                                                </a>
                                            </div>
                                            <div class="text-truncate">
                                                <small class="text-muted">
                                                    Diperbarui pada <b>{{ date("M d, Y") }}</b>
                                                    <span style="font-size: .6em; padding: 0px 5px; display: inline-block; transform: translateY(-3px);">●</span> 
                                                    Menunggu Respon <b>Anda</b>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-danger">Menunggu Diisi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divide-y">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-truncate">
                                                <a href="{{ url('/form') }}">
                                                    <strong>
                                                        Periode Q2 2024 - JA Hakui Attendance
                                                    </strong>
                                                </a>
                                            </div>
                                            <div class="text-truncate">
                                                <small class="text-muted">
                                                    Diperbarui pada <b>{{ date("M d, Y") }}</b>
                                                    <span style="font-size: .6em; padding: 0px 5px; display: inline-block; transform: translateY(-3px);">●</span> 
                                                    Menunggu Respon <b>Edmond Lohanata</b>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-success">Telah Terisi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card" style="height: calc(12rem + 10px)">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Pekerjaanmu</h3>
                        </div>
                        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                            <div class="divide-y mb-3">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-truncate">
                                                <a href="{{ url('/form') }}">
                                                    <strong>
                                                        Muhammad Syaifullah - Periode Q2 2024 - Kitaro Sushi
                                                    </strong>
                                                </a>
                                            </div>
                                            <div class="text-truncate">
                                                <small class="text-muted">
                                                    Diperbarui pada <b>{{ date("M d, Y") }}</b>
                                                    <span style="font-size: .6em; padding: 0px 5px; display: inline-block; transform: translateY(-3px);">●</span> 
                                                    Menunggu Respon <b>Anda</b>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-danger">Menunggu Dinilai</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divide-y">
                                <div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-truncate">
                                                <a href="{{ url('/form') }}">
                                                    <strong>
                                                        Dwi Mega Hutami - Periode Q2 2024 - Nyusatsu Concierge
                                                    </strong>
                                                </a>
                                            </div>
                                            <div class="text-truncate">
                                                <small class="text-muted">
                                                    Diperbarui pada <b>{{ date("M d, Y") }}</b>
                                                    <span style="font-size: .6em; padding: 0px 5px; display: inline-block; transform: translateY(-3px);">●</span> 
                                                    Menunggu Respon <b>Anda</b>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="badge bg-success">Telah Dinilai</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop