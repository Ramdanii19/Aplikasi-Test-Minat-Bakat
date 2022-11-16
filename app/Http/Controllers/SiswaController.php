<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   //Siswa
   public function siswa ()
   {
       $users = DB::table('users')
               ->where('level', '=', 'user')
               ->get();

       //$admin = DB::table('admin')->get();
       return view('siswa.siswa',['users' => $users]);
   }

   public function tambah_data_siswa(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('/siswa');
    
    }

   public function edit_siswa($id)
   {
        $siswa = DB::table('users')->where('id',$id)->get();
        return view('siswa.siswa_edit',['siswa' => $siswa]);
   }

   public function edit_data_siswa(Request $request)
   {
    DB::table('users')->where('id',$request->id)->update([
        'name' => $request->username,
        'email' => $request->email,
        // 'password' => $request->password,
        'level' => $request->level,
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/siswa');
   }

   public function delete_siswa($id)
   {
       DB::table('users')->where('id',$id)->delete();
       return redirect('/siswa');
   }

   public function ujian ()
   {
    return view('siswa.ujian');
   }

   public function hasil_ujian ()
   {
    return view('siswa.hasil_ujian');
   }
}
