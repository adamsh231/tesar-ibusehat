@extends('template')

@section('content')
    {{-- <div class="row g-3 align-items-center">
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="p-3 border bg-light">Jadwal Kunjungan hari ini</div>
            <table class="table table-secondary table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal kunjungan Terakhir</th>
                        <th scope="col">Tanggal Chekup</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>16-06-2023</td>
                        <td>23-06-2023</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>17-06-2023</td>
                        <td>23-06-2023</td>
                    </tr>
                    <tr>
                        <td>Larry the Bird</td>
                        <td>17-06-2023</td>
                        <td>23-06-2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <table class="table table-secondary table-striped">
                <div class="p-3 border bg-light">Jadwal Kunjungan Besok</div>
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal kunjungan Terakhir</th>
                        <th scope="col">Tanggal Chekup</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>16-06-2023</td>
                        <td>24-06-2023</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>17-06-2023</td>
                        <td>24-06-2023</td>
                    </tr>
                    <tr>
                        <td>Larry the Bird</td>
                        <td>17-06-2023</td>
                        <td>24-06-2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
