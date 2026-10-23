<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // 1. Halaman Beranda Utama (Hanya Banner Welcome)
    public function index()
    {
        return view('movies.index');
    }

    // 2. Halaman Katalog Film Terpisah
    public function catalog()
    {
        $movies = DB::table('movies')->get();
        return view('movies.catalog', compact('movies'));
    }

    // 3. Halaman Detail Film
    public function show($id)
    {
        $movie = DB::table('movies')->where('id', $id)->first();
        if (!$movie) {
            abort(404);
        }
        return view('movies.show', compact('movie'));
    }

    public function about()
    {
        return view('movies.about');
    }

    public function profile()
    {
        return view('movies.profile');
    }
}
