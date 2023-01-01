<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        return view('artikel', [
            "title" => "Artikel",
            "artikel" => Artikel::all()
    
        ]);
    }
    public function show(Artikel $artikel){
        return view('show',[
            "title" => "single Artikel",
            "artikel" => $artikel
        ]);
    }
}
