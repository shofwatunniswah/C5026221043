<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();

        $pegawai = DB::table('pegawai')
                        ->orderBy('pegawai_nama','asc')
                        ->paginate(10);

    	// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request){
    // Validate the request, including the image file
    $request->validate([
        'nama' => 'required|string',
        'jabatan' => 'required|string',
        'umur' => 'required|integer',
        'alamat' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|',
    ]);

    DB::table('pegawai')->insert([
        'pegawai_nama' => $request->nama,
        'pegawai_jabatan' => $request->jabatan,
        'pegawai_umur' => $request->umur,
        'pegawai_alamat' => $request->alamat,
        'pegawai_foto' => $request->file('image')->store('pegawai_foto') // Use the stored filename here
    ]);

    // Redirect to the '/pegawai' route after successfully storing data
    return redirect('/pegawai');
}


	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['pegawai' => $pegawai]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		$request->validate([
            'nama' => 'required|string',
            'jabatan' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|',
        ]);

        DB::table('pegawai')->where('pegawai_id', $id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
            'pegawai_foto' => $request->file('image')->store('pegawai_foto') // Use the stored filename here
        ]);

        // Redirect to the '/pegawai' route after successfully storing data
        return redirect('/pegawai');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pegawai')->where('pegawai_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		            ->where('pegawai_nama','like',"%".$cari."%")
		            ->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai, 'cari' => $cari]);

	}
    public function view($id){
    // Mengambil data pegawai dari database pegawai
    $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

    // Mengalihkan tampilan ke view dari pegawai
    return view('view', ['pegawai' => $pegawai]);
}
}
