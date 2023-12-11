@extends('master2')

@section('title', 'CHAT')

@section('konten')

    <h3>CHAT</h3>


    @foreach ($chat as $c)
        <?php
        $potongan = explode(' ', $c->pesan);
        foreach ($potongan as $index => $value) {
            // Check if the value is ":))"
            if ($value == ':))') {
                echo '<img src="' . asset("EAS/1.png") . '" alt="1.png" style="width:30px; height:30px"> ';
            } elseif ($value == ':3') {
                echo '<img src="' . asset("EAS/2.png") . '" alt="2.png" style="width:30px; height:30px"> ';
            } elseif ($value == ':P') {
                echo '<img src="' . asset("EAS/3.png") . '" alt="3.png" style="width:30px; height:30px"> ';
            } elseif ($value == ':C') {
                echo '<img src="' . asset("EAS/4.png") . '" alt="4.png" style="width:30px; height:30px"> ';
            } elseif ($value == ';)') {
                echo '<img src="' . asset("EAS/5.png") . '" alt="5.png" style="width:30px; height:30px"> ';
            } else {
                // Display the original value
                echo "$value ";
            }
        }
        ?>
    @endforeach
    <br><br>

@endsection
