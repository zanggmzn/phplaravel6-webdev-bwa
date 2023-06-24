<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request){
        //apa maksute request, jadi bisa ambil request dari routes kita
        //nah jadi saat request akan ditampilkan dari bagian resources -> view -> admin.index
        return view('admin.index');
    }
}
