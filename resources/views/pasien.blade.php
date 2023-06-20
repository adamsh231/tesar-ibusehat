<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
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
        {{-- @foreach ($biodata as $b)
            <tr>
                <td scope="col">{{ $b->id }}</td>
                <td scope="col">{{ $b->nama }}</td>
                <td scope="col">{{ $b->umur }}</td>
                <td scope="col">{{ $b->agama }}</td>
                <td scope="col">{{ $b->pendidikan }}</td>
                <td scope="col">{{ $b->pekerjaan }}</td>
                <td scope="col">{{ $b->alamat }}</td>
                <td scope="col">{{ $b->nomer_tlpn }}</td>
                <td scope="col">{{ $b->nama_suami }}</td>
                <td scope="col">{{ $b->umur_suami }}</td>
                <td scope="col">{{ $b->agama_suami }}</td>
                <td scope="col">{{ $b->pendidikan_suami }}</td>
                <td scope="col">{{ $b->pekerjaan_suami }}</td>
                <td scope="col">{{ $b->alamat_suami }}</td>
                <td scope="col">{{ $b->nomer_suami }}</td>
        @endforeach --}}
    </tbody>
</table>
@endsection
