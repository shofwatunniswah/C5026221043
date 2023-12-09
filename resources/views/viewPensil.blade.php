@extends('master2')
@section('judulhalaman', 'Data Pensil')

@section('konten')

    <br>
    <br>
    <h1>Data Pensil</h1>
    <br><br>
    <a href="/pensil">
        <button class="btn btn-primary">Kembali</button>
    </a>
    <br />
    <br />
    <div>
        @foreach ($pensil as $p)

        <div class = "row mt-2">
            <div class = "col-3 ">
                Kode Pensil
            </div>
            <div class = "col-9 border" style="background-color:rgb(224, 224, 224)">
                <input value="{{ $p->kodepensil }}" class = "border-0" style ="background-color:rgb(224, 224, 224)" readonly>
            </div>
        </div>
        <div class = "row mt-2">
            <div class = "col-3 ">
                Merk Pensil
            </div>
            <div class = "col-9 border" style="background-color:rgb(224, 224, 224)">
                <input value="{{ $p->merkpensil }}" class = "border-0" style ="background-color:rgb(224, 224, 224)" readonly>
            </div>
        </div>
        <div class = " row mt-2">
            <div class = "col-3 ">
                Jumlah Pensil
            </div>
            <div class = "col-9 border" style="background-color:rgb(224, 224, 224)">
                <input value="{{ $p->stockpensil }}" class = "border-0" style ="background-color:rgb(224, 224, 224)" readonly>
            </div>
        </div>
        <div class = " row mt-2">
            <div class = "col-3 ">
                Ketersediaan
            </div>
            <div class = "col-9 border" style="background-color:rgb(224, 224, 224)">
                <input value="@if ($p->tersedia === 'Y') Tersedia
            @else Tidak tersedia
            @endif" class = "border-0" style ="background-color:rgb(224, 224, 224)" readonly>
            </div>
        </div>
        @endforeach
    </div>

    {{-- <form action="/pensil/view" method="get">
        {{ csrf_field() }}
        <div class = "container-fluid pr-2" style="margin-left:auto; margin-right :auto; display:block;">
            @foreach ($pensil as $p)
                <div class="form-group row">
                    <label form="merk" class="col-form-label">Merk Pensil</label>
                    <div class=>
                        <input type="text" class="form-control" id="merk" name="merk" style = "width: max-content"
                            value="{{ $p->merkpensil }}"readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label form="stock" class="col-form-label">Jumlah Pensil</label>
                    <div class=>
                        <input type="number" class="form-control" id="stock" name="stock"
                            value="{{ $p->stockpensil }}"readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label form="tersedia" class="col-form-label"> Ketersediaan </label>
                    <input type="text" class="form-control" id="tersedia" name="tersedia"
                        value="
                    @if ($p->tersedia === 'Y') Tersedia
                @else
                    Tidak tersedia @endif "readonly>
                </div>
            @endforeach
        </div>
    </form> --}}



    <br><br>
@endsection
