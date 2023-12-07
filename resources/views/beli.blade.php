@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

    <br>
    <br>
    <br>
    <h1>Keranjang Belanja</h1>
    <br><br>
    <a href = "/keranjangbelanja">
        <button class = "btn btn-primary">Kembali</button>
    </a>
    <br />
    <br />

    <form action="/keranjangbelanja/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
        </div>
        <div class="form-group row">
            <label form="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label form="Jumlah" class="col-sm-2 col-form-label">Jumlah Barang</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label form="Harga" class="col-sm-2 col-form-label">Harga Per Item</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Harga" name="Harga">
            </div>
        </div>
        <div class="text-center">
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </div>
    </form>
    <br>

@endsection
