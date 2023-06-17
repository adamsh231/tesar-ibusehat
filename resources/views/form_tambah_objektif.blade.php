@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Objektif</h3>
            </div>
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                <form action="{{ route('objektif.store') }}" method="POST">
                    @csrf
                    <ul class="list-group">

                        <input type="hidden" value="{{ $id }}" name="inputbiodata">
                        kesadaran <input type="text" name="inputkesadaran" required>
                        tekanan_darah <input type="text" name="inputtekanan_darah" required>
                        suhu <input type="text" name="inputsuhu" required>
                        nadi <input type="number" name="inputnadi" required>
                        repirasi <input type="number" name="inputrepirasi" required>
                        bb <input type="number" name="inputbb" required>
                        tb <input type="date" name="inputtb" required>
                        kepala <input type="number" name="inputkepala" required>
                        rambut <input type="number" name="inputrambut" required>
                        muka <input type="number" name="inputmuka" required>
                        mata <input type="text" name="inputmata" required>
                        hidung <input type="text" name="inputhidung" required>
                        telinga <input type="text" name="inputtelinga" required>
                        mulut <input type="text" name="inputmulut" required>
                        leher <input type="text" name="inputleher" required>
                        dada <input type="text" name="inputdada" required>
                        leher <input type="text" name="inputleher" required>
                        dada <input type="text" name="inputdada" required>
                        abdomen <input type="text" name="inputabdomen" required>
                        leopold1 <input type="text" name="inputleopold1" required>
                        leopold2 <input type="text" name="inputleopold2" required>
                        leopold3 <input type="text" name="inputleopold3" required>
                        leopold4 <input type="text" name="inputleopold4" required>
                        genetalia <input type="text" name="inputgenetalia" required>
                        eks_atas <input type="text" name="inputeks_atas" required>
                        eks_bawah <input type="text" name="inputeks_bawah" required>
                    </ul>
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
