@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                {{-- <a href="{{ route('subjektif.create') }}" class="btn btn-primary">Tambah Data</a> --}}
            </div>
        </div>
    </div>
    {{-- <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">agama</th>
                <th scope="col">pendidikan</th>
                <th scope="col">pekerjaan</th>
                <th scope="col">alamat</th>
                <th scope="col">nomer telpon</th>
                <th scope="col">nama suami</th>
                <th scope="col">umur suami</th>
                <th scope="col">agama suami</th>
                <th scope="col">pendidikan suami</th>
                <th scope="col">pekerjaan suami</th>
                <th scope="col">alamat suami</th>
                <th scope="col">nomer suami</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($subjektif as $s)
                <tr>
                    <td scope="col">{{ $s->nama }}</td>
                    <td scope="col">{{ $s->umur }}</td>
                    <td scope="col">{{ $s->agama }}</td>
                    <td scope="col">{{ $s->pendidikan }}</td>
                    <td scope="col">{{ $s->pekerjaan }}</td>
                    <td scope="col">{{ $s->alamat }}</td>
                    <td scope="col">{{ $s->nomer_tlpn }}</td>
                    <td scope="col">{{ $s->nama_suami }}</td>
                    <td scope="col">{{ $s->umur_suami }}</td>
                    <td scope="col">{{ $s->agama_suami }}</td>
                    <td scope="col">{{ $s->pendidikan_suami }}</td>
                    <td scope="col">{{ $s->pekerjaan_suami }}</td>
                    <td scope="col">{{ $s->alamat_suami }}</td>
                    <td scope="col">{{ $s->nomer_suami }}</td>
                    <td scope="col">
                        <ul class="nav">
                            <a scope="col" href="{{ route('subjektif.edit', $s->id) }}"
                                class="btn btn-primary mr-2">Edit</a>
                            <a scope="col" href="{{ route('subjektif.show', $s->id) }}" class="btn btn-secondary">Show</a>
                            <form action="{{ route('subjektif.destroy', $s->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Hapus
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda Yakin Hapus Data
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
    @foreach ($subjektif as $s)
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Id subjektif</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->biodata_id }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">Keluhan</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->keluhan }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">riwayat_penyakit</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->riwayat_penyakit }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">riwayat_penyakit_keluarga</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->riwayat_penyakit_keluarga }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">menikah_ke</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->menikah_ke }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">usia_menikah</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->usia_menikah }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">lama_menikah</label>
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

            <label for="staticEmail" class="col-sm-2 col-form-label">lama_haid</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->lama_haid }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">siklus_haid</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->siklus_haid }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">warna</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->warna }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">flour_albus</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->flour_albus }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">riwayat_kehamilan</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->riwayat_kehamilan }}</label>
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label">riwayat_kb</label>
            <div class="col-sm-10">
                <label class="col-sm-2 col-form-label">{{ $s->riwayat_kb }}</label>
            </div>

            <a scope="col" href="{{ route('subjektif.edit', $s->id) }}" class="btn btn-primary mr-2">Edit</a>

        </div>
    @endforeach
@endsection
