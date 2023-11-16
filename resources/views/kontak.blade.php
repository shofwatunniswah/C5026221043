@extends('master')

@section('judulhalaman','Kontak')

@section('judul')
<div class="jumbotron">
    Ini halaman kontak
</div>
@endsection

@section('konten')
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      @for($i=1;$i<6;$i++)
      <tr>
        <td>No</td>
        <td>:</td>
        <td>{{ $i }}</td>
      </tr>
      @endfor
    </tbody>
</table>

@endsection
