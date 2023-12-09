<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PensilController extends Controller
{
	public function listPensil()
	{
    	// mengambil data dari table pegawai
		$pensil = DB::table('pensil')->get();

        $pensil = DB::table('pensil')
                        ->orderBy('merkpensil','asc')
                        ->paginate(10);

    	// mengirim data pegawai ke view index
		return view('listPensil',['pensil' => $pensil]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahPensil');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
{
    if ($request->stock > 0) {
        $status = 'Y';}
    else {$status = 'N';}
    // Check if the merk already exists in the database
    if (DB::table('pensil')->where('merkpensil', $request->merk)->exists()) {
        // If it exists, update the stock
        DB::table('pensil')->where('merkpensil', $request->merk)->update([
            'stockpensil' => DB::raw('stockpensil + ' . $request->stock),
        ]);
        $newTotalStock = DB::table('pensil')->where('merkpensil', $request->merk)->value('stockpensil');

        // Determine the status based on the new total stock
        $status = ($newTotalStock > 0) ? 'Y' : 'N';

        // Update the status
        DB::table('pensil')->where('merkpensil', $request->merk)->update([
            'tersedia' => $status,
        ]);
    } else {
        // If it doesn't exist, insert a new record
        DB::table('pensil')->insert([
            'kodepensil' => $request->kode,
            'merkpensil' => $request->merk,
            'stockpensil' => $request->stock,
            'tersedia' => $status
        ]);
    }

    // Redirect to the '/pensil' route after successfully storing data
    return redirect('/pensil');
}


	// method untuk edit data pegawai
	public function edit($kode)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pensil = DB::table('pensil')->where('kodepensil',$kode)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editPensil',['pensil' => $pensil]);

	}

	// update data pegawai
	public function update(Request $request, $kode)
	{
        if ($request->stock > 0) {
            $status = 'Y';}
        else {$status = 'N';}
        if (DB::table('pensil')->where('merkpensil', $request->merk)->exists()) {
            // If it exists, update the stock
            DB::table('pensil')->where('merkpensil', $request->merk)->update([
                'stockpensil' => DB::raw('stockpensil + ' . $request->stock),
            ]);
            $newTotalStock = DB::table('pensil')->where('merkpensil', $request->merk)->value('stockpensil');

            // Determine the status based on the new total stock
            $status = ($newTotalStock > 0) ? 'Y' : 'N';

            // Update the status
            DB::table('pensil')->where('merkpensil', $request->merk)->update([
                'tersedia' => $status,
            ]);
        } else {
            // If it doesn't exist, insert a new record
            DB::table('pensil')->insert([
                'kodepensil' => $request->kode,
                'merkpensil' => $request->merk,
                'stockpensil' => $request->stock,
                'tersedia' => $status
            ]);
        }

        // Redirect to the '/pensil' route after successfully storing data
        return redirect('/pensil');
	}

	// method untuk hapus data pegawai
	public function hapus($kode)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pensil')->where('kodepensil',$kode)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/pensil');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pensil = DB::table('pensil')
		            ->where('merkpensil','like',"%".$cari."%")
		            ->paginate();

    		// mengirim data pegawai ke view index
		return view('listPensil',['pensil' => $pensil, 'cari' => $cari]);

	}
    public function view($kode){
    // Mengambil data pegawai dari database pegawai
    $pensil = DB::table('pensil')->where('kodepensil', $kode)->get();

    // Mengalihkan tampilan ke view dari pensil
    return view('viewPensil', ['pensil' => $pensil]);
}
}
