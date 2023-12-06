@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

    <br>
    <br>
    <br>
    <h1>Data Pegawai</h1>
    <br><br>
    <a href = "/pegawai">
        <button class = "btn btn-primary">Kembali</button>
    </a>
    <br />
    <br />

    <form action="/pegawai/store" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class = "row container-fluid pl-0 pr-2">
            <div class = "col-5 pl-0">
                <div class="pl-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="image" name = "image" style = "width : max; height:220px; text-align : center;">
                </div>

            </div>
            <div class = "col-7 pl-2 pr-0">
                <div class="form-group row">
                    <label form="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label form="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                </div>
                <div class="form-group row">
                    <label form="umur" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Alamat" class="col-sm-2 col-form-label mr-3">Alamat</label>
                    <textarea class="form-control col-sm-9 " id="alamat" name = "alamat" rows="3"></textarea>
                </div>
                <br>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </div>
    </form>
    <br>

@endsection
