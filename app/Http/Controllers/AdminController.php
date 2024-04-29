<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.users.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.admin.create');
    }

    // Fungsi untuk menghasilkan ID unik pengguna
    private function generateUserId($tahun_masuk)
    {
        // Mengambil jumlah data pengguna dari tabel users
        $userCount = User::count();

        // Membentuk ID unik
        $id = "AD" . substr($tahun_masuk, -2) . str_pad($userCount + 1, 2, '0', STR_PAD_LEFT);

        return $id;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'tahun_masuk' => 'required|numeric',
            'username' => 'required|alpha:ascii|min:4',
            'level' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            // Jika validasi gagal, kembalikan ke halaman form dengan pesan kesalahan
            dd($validator);
            // return redirect()->back()->withErrors($validator)->withInput();
        }

        // Jika validasi berhasil, lanjutkan dengan logika bisnis Anda
        $id = $this->generateUserId($request->input('tahun_masuk'));


        // Setelah mendapatkan id, Anda dapat melanjutkan dengan menyimpan data ke dalam database
        $user = new User;
        $user->id_users = $id;
        $user->email = $request->email;
        $user->tahun_masuk = $request->tahun_masuk;
        $user->username = $request->username;
        $user->level = $request->level;
        $user->password = bcrypt($request->password);
        $user->save();
        
        $admin = new Admin;
        $admin->id_users = $id;
        $admin->name = $request->name;
        // Set atribut lain yang diperlukan untuk admin
        $admin->save();

        // Redirect ke halaman admin setelah berhasil
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
