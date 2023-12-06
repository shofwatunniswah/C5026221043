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

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <div class = "row container-fluid pl-0 pr-2">
                <div class = "col-6 pl-0">
                    @foreach ($pegawai as $p)
                        @if ($p->pegawai_foto)
                            <img src="{{ asset('storage/' . $p->pegawai_foto) }}" alt="{{ $p->pegawai_nama }}"
                                class="img-fluid d-flex border"
                                style = "width:300px; height:400px; margin-right:auto; margin-left:auto; display:block; object-fit:cover;">
                        @else
                            <img src="{{ asset('asset/default-avatar.png') }}" alt={{ $p->pegawai_nama }}
                                class="img-fluid d-flex border"
                                style = "width : 300px; height : 400px; margin-right:auto; margin-left:auto; display:block;">
                        @endif
                    @endforeach
                    <div class="pl-3">
                        <label for="formFile" class="form-label">Foto</label>
                        <input class="form-control" type="file" id="image" name = "image"
                            style = "width : max; height:50px; text-align : center;">
                    </div>

                </div>
                <div class = "col-6 pl-2 pr-0" style="margin-top: auto; margin-bottom:auto; display:block">
                    <div class="form-group row">
                        <label form="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="{{ $p->pegawai_nama }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label form="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan" name="jabatan"
                                value="{{ $p->pegawai_jabatan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label form="umur" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="umur" name="umur"
                                value="{{ $p->pegawai_umur }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Alamat" class="col-sm-2 col-form-label mr-3">Alamat</label>
                        <textarea class="form-control col-sm-9 " id="alamat" name = "alamat" rows="3">{{ $p->pegawai_alamat }}</textarea>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <div class="text-center">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </form>
    @endforeach
<br>
@endsection
