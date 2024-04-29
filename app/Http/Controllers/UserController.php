<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function generateUserId($level, $year)
    {
        // Mengambil jumlah data pengguna dari tabel users
        $userCount = User::count();

        // Menentukan tahun masuk atau sesuai dengan logika Anda
        $tahun_masuk = $year;

        // Membentuk ID unik
        $role = '';
        if ($level == 1) {
            $role = 'AD';
        } else if ($level == 2) {
            $role = 'GR';
        } else if ($level == 3) {
            $role = 'SW';
        }

        $id = $role . $tahun_masuk . str_pad($userCount + 1, 2, '0', STR_PAD_LEFT);

        return $id;
    }
}
