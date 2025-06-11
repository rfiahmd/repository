<?php

namespace App\Http\Controllers\landingpage;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('landing.home', compact('kategoris'));
    }
    public function document()
    {
        $dokumen = Dokumen::all();
        return view('landing.documents', compact('dokumen'));
    }
    
}
