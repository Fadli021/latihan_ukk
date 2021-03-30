<?php 

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


/**
 * 
 */
class DaftarController extends Controllers
{
	 public function daftar() {
        return view('siswa-daftar');
    }

    public function daftar_post(Request $request) {
        $user = DB::table('siswas')->where('nis',$request->nis)->first();
        $request->validate([
            'nis' => 'required|numeric',
            'email' => 'required|email',
            'nama' => 'required|max:50',
            'jenkel' => 'required',
            'temp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ]);

	
	
}

 ?>