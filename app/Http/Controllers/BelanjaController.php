<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
	public function shop()
	{
    	// mengambil data dari table pegawai
		$keranjangbelanja = DB::table('keranjangbelanja')->get();

        // $keranjangbelanja = DB::table('keranjangbelanja')
        //                 ->orderBy('ID','asc');

    	// mengirim data keranjang belanja ke view index
		return view('shop',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request){
    // Validate the request, including the image file
    // $request->validate([
    //     'ID' => 'required|integer',
    //     'KodeBarang' => 'required|integer',
    //     'Jumlah' => 'required|integer',
    //     'Harga' => 'required|integer',
    // ]);

    DB::table('keranjangbelanja')->insert([
        'KodeBarang' => $request->KodeBarang,
        'Jumlah' => $request->Jumlah,
        'Harga' => $request->Harga,
    ]);

    // Redirect to the '/pegawai' route after successfully storing data
    return redirect('/keranjangbelanja');
}


	// // method untuk edit data pegawai
	// public function edit($id)
	// {
	// 	// mengambil data pegawai berdasarkan id yang dipilih
	// 	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// 	// passing data pegawai yang didapat ke view edit.blade.php
	// 	return view('edit',['pegawai' => $pegawai]);

	// }

	// update data pegawai
	// public function update(Request $request)
	// {
	// 	// update data pegawai
	// 	$request->validate([
    //         'nama' => 'required|string',
    //         'jabatan' => 'required|string',
    //         'umur' => 'required|integer',
    //         'alamat' => 'required|string',
    //         'image' => 'image|mimes:jpeg,png,jpg,gif|',
    //     ]);

    //     DB::table('pegawai')->insert([
    //         'pegawai_nama' => $request->nama,
    //         'pegawai_jabatan' => $request->jabatan,
    //         'pegawai_umur' => $request->umur,
    //         'pegawai_alamat' => $request->alamat,
    //         'pegawai_foto' => $request->file('image')->store('pegawai_foto') // Use the stored filename here
    //     ]);

    //     // Redirect to the '/pegawai' route after successfully storing data
    //     return redirect('/pegawai');
	// }

	// method untuk hapus data pegawai
	public function batal($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
    // public function cari(Request $request)
	// {
	// 	// menangkap data pencarian
	// 	$cari = $request->cari;

    // 		// mengambil data dari table pegawai sesuai pencarian data
	// 	$pegawai = DB::table('pegawai')
	// 	            ->where('pegawai_nama','like',"%".$cari."%")
	// 	            ->paginate();

    // 		// mengirim data pegawai ke view index
	// 	return view('index',['pegawai' => $pegawai, 'cari' => $cari]);

	// }
//     public function view($id){
//     // Mengambil data pegawai dari database pegawai
//     $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

//     // Mengalihkan tampilan ke view dari pegawai
//     return view('view', ['pegawai' => $pegawai]);
// }
}
