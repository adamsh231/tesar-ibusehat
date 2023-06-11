@extends('layouts.app')
@section('content')
    <div class="card text-center">
        <div class="card-header bg-info">
            Biodata Pasien
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header bg-info">Pasien</h5>
                            <div class="card-body">
                                <h5 class="card-title">Nama : {{ $biodata->nama }} </h5>
                                <h5 class="card-title">Umur : {{ $biodata->umur }} </h5>
                                <h5 class="card-title">Agama : {{ $biodata->agama }} </h5>
                                <h5 class="card-title">pendidikan : {{ $biodata->pendidikan }} </h5>
                                <h5 class="card-title">pekerjaan : {{ $biodata->pekerjaan }} </h5>
                                <h5 class="card-title">alamat : {{ $biodata->alamat }} </h5>
                                <h5 class="card-title">nomer telpon : {{ $biodata->nomer_tlpn }} </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header bg-info">Suami</h5>
                            <div class="card-body">
                                <h5 class="card-title">Nama : {{ $biodata->nama_suami }} </h5>
                                <h5 class="card-title">Umur : {{ $biodata->umur_suami }} </h5>
                                <h5 class="card-title">Agama : {{ $biodata->agama_suami }} </h5>
                                <h5 class="card-title">pendidikan : {{ $biodata->pendidikan_suami }} </h5>
                                <h5 class="card-title">pekerjaan : {{ $biodata->pekerjaan_suami }} </h5>
                                <h5 class="card-title">alamat : {{ $biodata->alamat_suami }} </h5>
                                <h5 class="card-title">nomer telpon : {{ $biodata->nomer_suami }} </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center">
        <div class="card-header bg-info">
            Data Pasien
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-sm-6 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header bg-info">Data Subjektif</h5>
                            <div class="card-body">

                                @foreach ($biodata->with('subjektifs')->get() as $biodata)
                                    @foreach ($biodata->subjektifs as $subjektif)
                                        <p>{{ $subjektif->biodata_id }}</p>
                                    @endforeach
                                @endforeach

                                <a href="">Buat Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-header bg-info">Data Objektif</h5>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <a href="{{ route('biodata.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
