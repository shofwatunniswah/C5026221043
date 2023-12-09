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
    @foreach ($pensil as $p)
        <form action="/pensil/update/{{ $p->kodepensil }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label form="merk" class="col-sm-2 col-form-label">Merk Pensil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="merk" name="merk"
                        value = "{{ $p->merkpensil }}">
                </div>
            </div>
            <div class="form-group row">
                <label form="stock" class="col-sm-2 col-form-label">Jumlah Pensil</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="stock" name="stock"
                        value = "{{ $p->stockpensil }}">
                </div>
            </div>
            {{-- <div class="form-group row">
                <label form="tersedia" class="col-sm-2 col-form-label"> Ketersediaan </label>
                <div class="col-sm-10">
                    <select class="form-control" id="tersedia" name="tersedia" required>
                        <option value="" disabled hidden>Masukkan ketersediaan</option>
                        <option value="Y">Tersedia</option>
                        <option value="N">Tidak Tersedia</option>
                    </select>
                </div>
            </div> --}}
            {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#stock').on('input', function() {
                        var stockValue = $(this).val();
                        var tersediaOption = $('#tersedia option[value="Y"]');
                        var tidakTersediaOption = $('#tersedia option[value="N"]');

                        if (stockValue > 0) {
                            tersediaOption.prop('selected', true);
                        } else {
                            tidakTersediaOption.prop('selected', true);
                        }
                    });
                });

            </script> --}}

            <br>
            <div class="text-center">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </form>
    @endforeach
    <br>

@endsection
