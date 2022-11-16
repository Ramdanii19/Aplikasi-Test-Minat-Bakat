<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Data Admin

    public function admin ()
    {

        $admin = DB::table('users')
                ->where('level', '=', 'admin')
                ->get();

        //$admin = DB::table('admin')->get();
        return view('admin.admin',['admin' => $admin]);
    }

    public function tambah_data_admin(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('/admin');
    
    }

    public function edit_admin($id)
    {
         $admin = DB::table('users')->where('id',$id)->get();
         return view('admin.admin_edit',['admin' => $admin]);
    }

    public function edit_data_admin(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->username,
            'email' => $request->email,
            // 'password' => $request->password,
            'level' => $request->level,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/admin');
    }

    public function delete_admin($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('/admin');
    }

    //Profile

    public function admin_profile ()
    {
        $users = DB::table('users')->get();
        return view('admin.profile',['users' => $users]);
    }

}
