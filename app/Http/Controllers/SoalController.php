<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function soal ()
   {
    $soal = DB::table('soal')
    ->leftJoin('grup_soal', 'soal.id_grup_soal', '=', 'grup_soal.id_grup_soal')
    ->get();
    	return view('soal.soal',['soal' => $soal]);
   }

   public function tambah_data_soal(Request $request)
   {
       DB::table('soal')->insert([
           'id_grup_soal' => $request->grup_soal,
           'soal' => $request->soal,
           'gambar' => $request->gambar,
           'a' => $request->a,
           'b' => $request->b,
           'c' => $request->c,
           'd' => $request->d,
           'jawaban' => $request->jawaban,
       ]);
       return redirect('/soal');
   
   }

   public function edit_soal($id)
   {
    $soal = DB::table('soal')
    ->leftJoin('grup_soal', 'soal.id_grup_soal', '=', 'grup_soal.id_grup_soal')
    ->where('id_soal',$id)
    ->get();
        return view('soal.soal_edit',['soal' => $soal]);
   }

   public function edit_data_soal(Request $request)
   {
    DB::table('soal')->where('id_soal',$request->id_soal)->update([
        'id_grup_soal' => $request->id_grup_soal,
        'soal' => $request->soal,
        'gambar' => $request->gambar,
        'a' => $request->a,
        'b' => $request->b,
        'c' => $request->c,
        'd' => $request->d,
        'jawaban' => $request->jawaban,
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/grup_soal');
   }

   public function delete_soal($id)
   {
       DB::table('soal')->where('id_soal',$id)->delete();
       return redirect('/grup_soal');
   }
}
