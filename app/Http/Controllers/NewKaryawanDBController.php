<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanDBController extends Controller
{
    public function index()
    {
        $newkaryawan = DB::table('newkaryawan')->GET();
    	return view('indexnewkaryawan',['newkaryawan' => $newkaryawan]);
    }

    public function tambah(){
        return view('tambahnewkaryawan');
    }

public function store(Request $request)
{
	DB::table('newkaryawan')->insert([
		'NIP' => $request->NIP,
		'nama' => $request->nama,
		'pangkat' => $request->pangkat,
		'gaji' => $request->gaji
	]);
	return redirect('/eas');

}

public function hapus($id)
{
	DB::table('newkaryawan')
    ->where('NIP',$id)
    ->delete();
	return redirect('/eas');
}

}