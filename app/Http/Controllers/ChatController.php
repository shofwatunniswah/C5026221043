<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$chat = DB::table('chat')->get();
        // $pegawai = DB::table('pegawai')->paginate(15);
    	// mengirim data pegawai ke view index
		return view('ChatView',['chat' => $chat]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahPesan');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('chat')->insert([
			'ID' => $request->id,
			'pesan' => $request->pesan,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/chat');

	}
    public function update(Request $request)
	{

        DB::table('chat')->insert([
            'pesan' => $request->pesan,
        ]);

        // Redirect to the '/pegawai' route after successfully storing data
        return redirect('/pesan');
	}

}
