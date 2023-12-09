@extends('master2')
@section('JudulHalaman', 'Nilai Kuliah')
@section('konten')
    <h3>Nilai Mata Kuliah</h3>

    <a href="/nilaikuliah/tambahData" class="btn btn-primary"> + Tambah Nilai Kuliah</a>

    <br />
    <br />


    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka >= 81)
                        A
                    @elseif ($n->NilaiAngka >= 61)
                        B
                    @elseif ($n->NilaiAngka >= 41)
                        C
                    @else
                        D
                    @endif
                </td>
                <td>{{ ($n->NilaiAngka * $n->SKS) }}</td>
                {{-- <td>{{ if($n->NilaiAngka)}}</td> --}}
                {{-- <td>
                    <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                    |
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td> --}}
            </tr>
        @endforeach
    </table>
@endsection
