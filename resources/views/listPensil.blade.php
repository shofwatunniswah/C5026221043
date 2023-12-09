@extends('master2')

@section('title', 'Daftar Pensil')

@section('konten')

    <h3>Daftar Pensil</h3>
<br>
    <a href="/pensil/tambah" class="btn btn-primary"> + Tambah Daftar Pensil</a>

    <br><br>
    <p>Cari Berdasarkan Merk :</p>
    <form action="/pensil/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Pensil .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary" type="submit" value="CARI">
    </form>
    <br />
    <br />
    <br />


    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pensil</th>
            <th>Merk Pensil</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
            <th style="text-align: center">Action</th>
        </tr>
        @foreach ($pensil as $p)
            <tr>
                <td>{{ $p->kodepensil }}</td>
                <td>{{ $p->merkpensil }}</td>
                <td>{{ $p->stockpensil }}</td>
                <td>
                    @if ($p->tersedia == 'Y') Tersedia
                    @else Tidak tersedia
                    @endif
                </td>
                <td style="text-align:center">
                    <a href="/pensil/view/{{ $p->kodepensil }}" class="btn btn-primary">View</a>
                    |
                    <a href="/pensil/edit/{{ $p->kodepensil }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pensil/hapus/{{ $p->kodepensil }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{-- {{ $pegawai->links() }} --}}
@endsection
