<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GrupsoalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function grupsoal ()
    {
    	$grupsoal = DB::table('grup_soal')->get();
        return view('grupsoal.grup_soal',['grupsoal' => $grupsoal]);
    }

    public function tambah_data_grupsoal(Request $request)
   {
       DB::table('grup_soal')->insert([
           'nama_grup_soal' => $request->nama_grup_soal,
       ]);
       return redirect('/grup_soal');
   
   }

   public function edit_grupsoal($id)
   {
        $grupsoal = DB::table('grup_soal')->where('id_grup_soal',$id)->get();
        return view('grupsoal.grup_soal_edit',['grup_soal' => $grupsoal]);
   }

   public function edit_data_grupsoal(Request $request)
   {
    DB::table('grup_soal')->where('id_grup_soal',$request->id_grup_soal)->update([
        'nama_grup_soal' => $request->nama_grup_soal,
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/grup_soal');
   }

   public function delete_grupsoal($id)
   {
       DB::table('grup_soal')->where('id_grup_soal',$id)->delete();
       return redirect('/grup_soal');
   }

   public function tambah_soal($id)
   {
        $soal = DB::table('soal')->where('id_grup_soal',$id)->get();
        return view('grupsoal.tambah_soal',['soal' => $soal]);
   }

   public function tambah_data_soal(Request $request)
   {
       DB::table('soal')->where('id_grup_soal',$request->id_grup_soal)->insert([
           'id_grup_soal' => $request->id_grup_soal,
           'soal' => $request->soal,
           'gambar' => $request->gambar,
           'a' => $request->a,
           'b' => $request->b,
           'c' => $request->c,
           'd' => $request->d,
           'jawaban' => $request->jawaban,
       ]);
       return redirect('/grup_soal');
   
   }

   public function delete_data_soal($id)
   {
       DB::table('soal')->where('id_soal',$id)->delete();
       return redirect('/grup_soal');
   }
}
