<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        // return "Halo ini adalah method index dalam kontroller ManagementUser";
        // return "Method ini nantinya akan mengambil semua data user";
        $nama = "Setiawan";
        $pelajaran = ["Workshop SI Web Framework", "Wokrshop App Framework", "Workshop Sistem Cerdas"];

        return view('home', compact('nama', 'pelajaran'));

    }

    public function create()
    {
        return "Method ini akan menampilkan form untuk menambah data User";
    }

    public function store(Request $request)
    {
        return "Method ini nantinya akan menciptakan data user yang baru";
    }

    public function show($id)
    {
        return "Method ini nantinya digunakan untuk menampilkan satu data user dengan id " . $id;
    }

    public function edit($id)
    {
        return "Method ini nantinya akan menampilkan form untuk mengubah data edit dengan id " . $id;
    }

    public function update(Request $request, $id)
    {
        return "Method ini nantinya digunakan untuk mengubah data user dengan id " . $id;
    }

    public function destroy($id)
    {
        return "Method ini nantinya akan menghapus data user dengan id " . $id;
    }
}
