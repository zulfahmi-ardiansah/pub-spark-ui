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
                        Target Proyek
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <button name="submit-form" value="submit-form" class="btn btn-success mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                            Tambah
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive m-0">
                            <table class="table card-table table-hover table-vcenter text-nowrap table-special">
                                <thead>
                                    <tr>
                                        <th>
                                            Waktu
                                        </th>
                                        <th>
                                            Proyek
                                        </th>
                                        <th>
                                            Manajer
                                        </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Periode Q2 2024
                                        </td>
                                        <td>
                                            Doi Masaru
                                        </td>
                                        <td>
                                            Edmond Lohanata
                                        </td>
                                        <td class="w-1">
                                            <form action="" method="POST">
                                                {{ csrf_field() }}
                                                <button name="submit-form" value="submit-form" class="btn btn-default btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                                                    Ubah
                                                </button>
                                                &nbsp;
                                                <button name="submit-delete" value="submit-delete" class="btn btn-danger btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Periode Q2 2024
                                        </td>
                                        <td>
                                            JA Hakui Attendance
                                        </td>
                                        <td>
                                            Zulfahmi Ardiansah
                                        </td>
                                        <td class="w-1">
                                            <form action="" method="POST">
                                                {{ csrf_field() }}
                                                <button name="submit-form" value="submit-form" class="btn btn-default btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                                                    Ubah
                                                </button>
                                                &nbsp;
                                                <button name="submit-delete" value="submit-delete" class="btn btn-danger btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Periode Q2 2024
                                        </td>
                                        <td>
                                            Kitaro Sushi
                                        </td>
                                        <td>
                                            Edmond Lohanata
                                        </td>
                                        <td class="w-1">
                                            <form action="" method="POST">
                                                {{ csrf_field() }}
                                                <button name="submit-form" value="submit-form" class="btn btn-default btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                                                    Ubah
                                                </button>
                                                &nbsp;
                                                <button name="submit-delete" value="submit-delete" class="btn btn-danger btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Periode Q2 2024
                                        </td>
                                        <td>
                                            Nyusatsu Concierge
                                        </td>
                                        <td>
                                            Edmond Lohanata
                                        </td>
                                        <td class="w-1">
                                            <form action="" method="POST">
                                                {{ csrf_field() }}
                                                <button name="submit-form" value="submit-form" class="btn btn-default btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg>
                                                    Ubah
                                                </button>
                                                &nbsp;
                                                <button name="submit-delete" value="submit-delete" class="btn btn-danger btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop