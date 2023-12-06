@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

    <br>
    <br>
    <h1>Data Pegawai</h1>
    <br><br>
    <a href="/pegawai">
        <button class="btn btn-primary">Kembali</button>
    </a>
    <br />
    <br />
    <div class="row">
        <div class="col-6 d-flex pr-5">
            @foreach ($pegawai as $p)
                @if ($p->pegawai_foto)
                    <img src="{{ asset('storage/' . $p->pegawai_foto) }}" alt="{{ $p->pegawai_nama }}"
                        class="img-fluid d-flex border"
                        style = "width:300px; height:400px; margin-right:auto; margin-left:auto; display:block; object-fit:cover;">
                @else
                    <img src="{{asset('asset/default-avatar.png')}}" alt={{ $p->pegawai_nama }} class="img-fluid d-flex border"
                        style = "width : 300px; height : 400px; margin-right:auto; margin-left:auto; display:block;">
                @endif
            @endforeach
        </div>
        <div class="col-6 flex-column pl-5" style="margin-top:auto; margin-bottom :auto; display:block;">
            <div class>
                @foreach ($pegawai as $p)
                    <div name="nama" id="nama" class="mb-2" style="font-size: 20px">Nama : {{ $p->pegawai_nama }}</div>
                    <div name="jabatan" id="jabatan" class="mb-2" style="font-size: 20px">Jabatan : {{ $p->pegawai_jabatan }}</div>
                    <div name="umur" id="umur" class="mb-2" style="font-size: 20px">Umur : {{ $p->pegawai_umur }}</div>
                    <div name="alamat" id="alamat" class="mb-2" style="font-size: 20px">Alamat : {{ $p->pegawai_alamat }}</div>
            </div>
            @endforeach
        </div>
    </div>
    <br><br>
@endsection
