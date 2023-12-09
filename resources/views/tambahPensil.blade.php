@extends('master2')
@section('judulhalaman', 'Tambah Daftar Pensil')

@section('konten')

    <br>
    <br>
    <br>
    <h1>Daftar Pensil</h1>
    <br><br>
    <a href = "/pensil">
        <button class = "btn btn-primary">Kembali</button>
    </a>
    <br />
    <br />

    <form action="/pensil/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label form="merk" class="col-sm-2 col-form-label">Merk Pensil</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="merk" name="merk">
            </div>
        </div>
        <div class="form-group row">
            <label form="stock" class="col-sm-2 col-form-label">Jumlah Pensil</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="stock" name="stock">
            </div>
        </div>
        <br>
        <div class="text-center">
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </div>
    </form>
    <br>

@endsection
