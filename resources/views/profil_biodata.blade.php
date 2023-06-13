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

                                @foreach ($biodata->subjektif as $s)
                                    <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Id subjektif</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->biodata_id }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">Keluhan</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->keluhan }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">riwayat penyakit</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->riwayat_penyakit }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">riwayat penyakit
                                            keluarga</label>
                                        <div class="col-sm-10">
                                            <label
                                                class="col-sm-2 col-form-label">{{ $s->riwayat_penyakit_keluarga }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">menikah ke</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->menikah_ke }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">usia menikah</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->usia_menikah }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">lama menikah</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->lama_menikah }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">HPHT</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->HPHT }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">menarche</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->menarche }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">lama haid</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->lama_haid }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">siklus haid</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->siklus_haid }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">warna</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->warna }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">flour albus</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->flour_albus }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">riwayat kehamilan</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->riwayat_kehamilan }}</label>
                                        </div>

                                        <label for="staticEmail" class="col-sm-2 col-form-label">riwayat kb</label>
                                        <div class="col-sm-10">
                                            <label class="col-sm-2 col-form-label">{{ $s->riwayat_kb }}</label>
                                        </div>
                                        < </div>
                                            {{-- <div>
                                                <a scope="col" href="{{ route('subjektif.edit', $s->id) }}"
                                                    class="btn btn-primary mr-2">Edit</a>
                                                <a scope="col" href="{{ route('subjektif.create', $s->id) }}"
                                                    class="btn btn-primary mr-2">Tambah Data Baru</a>
                                            </div> --}}
                                @endforeach
                                <a scope="col" href="{{ route('subjektif.create') }}"
                                    class="btn btn-primary mr-2">Tambah Data Baru</a>
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
