<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(Request $request)
    {
        $request->session()->put('nama', 'Politeknik Negeri Jember');
        echo "data session ditambahkan";
    }
    public function show(Request $request)
    {
        if ($request->session()->has('nama')) {
            echo $request->session()->get('nama');
        } else {
            echo 'data tidak ada dalam session';
        }
    }
    public function delete(Request $request)
    {
        $request->session()->forget('nama');
        echo "data telah dihapus di session";
    }
}
